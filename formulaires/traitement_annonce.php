<?php
session_start();
$_SESSION['pseudo'] = "joker";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
	<title> cible annonce </title>
</head>

<?php include("../bdd/connexion.php"); ?>

<?php
if(isset($_FILES['image']['error']))
{

$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );

	if ( !in_array($extension_upload,$extensions_valides) AND  $_FILES['image']['error']!= 4 ) 
	{
	$erreur ="L'extension est invalide";
	}

	if ($_FILES['image']['size'] > 1048576) 
	{
	$erreur = "Le fichier est trop gros";
	}	


if($erreur=="aucune")
{


$req = $bdd->prepare('INSERT INTO annonces (Prix, Quantite, Description, Auteur, Code_postal, Date_publication, Extension_upload) VALUES (:Prix, :Quantite, :Description, :Auteur, :Code_postal, NOW(), :Extension_upload)', 'INSERT INTO categorie (categorie) VALUES (:categorie)', 'INSERT INTO variete (variete) VALUES (:variete)');
$req->execute(array(
	
	'variete' => $_POST['variete'],
    'categorie' => $_POST['categorie'],
    'Prix' => $_POST['prix'],
    'Quantite' => $_POST['quantite'],
    'Titre' => $_POST['titre'],
    'Description' => $_POST['Description'],
  	'Auteur' => $_SESSION['pseudo'],
  	'Code_postal' => $_POST['code_postal'],
  	'Extension_upload' => $extension_upload
  	));

$req = $bdd -> query('SELECT MAX(id_annonce) FROM annonces');
$name = $req->fetch();

$nom = "Image/{$name[0]}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);

}
else
{
header('location:http://localhost/INEEDEAT/formulaires/annonce.php?erreur=' .$erreur);
}
}
else
{
$erreur = "le fichier que vous avez chargé pose problème";
header('location:http://localhost/INEEDEAT/formulaires/annonce.php?erreur=' .$erreur);
}
?>

<?php

$chemin  = "http://localhost/INEEDEAT/Image/{$name[0]}.{$extension_upload}";
$x_c     = 640; // Taille de l'image
$y_c     = 480;
$qualite = 80; // Qualite de l'image (0=pourrit/100=super)
$color   = "000000"; // Couleur de fond

$size = getimagesize($chemin);

if($size[0] >= $x_c AND $size[1] >= $y_c) {
    if(($size[0]/$x_c) > ($size[1]/$y_c)) {
        $x_t = $x_c;
        $y_t = floor(($size[1]*$x_c)/$size[0]);
        $x_p = 0;
        $y_p = ($y_c/2)-($y_t/2);
    } else {
        $x_t = floor(($size[0]*$y_c)/$size[1]);
        $y_t = $y_c;
        $x_p = ($x_c/2)-($x_t/2);
        $y_p = 0;
    }
} else {
    $x_t = $size[0];
    $y_t = $size[1];
    $x_p = ($x_c/2)-($x_t/2);
    $y_p = ($y_c/2)-($y_t/2);
}

$extension = strrchr($chemin,'.');
$extension = strtolower(substr($extension,1));

if($extension == 'jpg' OR $extension == 'jpeg') {
    $image_new = imagecreatefromjpeg($chemin);
} elseif($extension == 'gif') {
    $image_new = imagecreatefromgif($chemin);
} elseif($extension == 'png') {
    $image_new = imagecreatefrompng($chemin);
} elseif($extension == 'bmp') {
    $image_new = imagecreatefromwbmp($chemin);
} else {
    echo "Erreur !";
    exit;
}

Header("Content-type: image/jpeg");

$image = imagecreatetruecolor($x_c, $y_c);
$color = imagecolorallocate($image, hexdec($color[0].$color[1]), hexdec($color[2
].$color[3]), hexdec($color[4].$color[5]));
imagefilledrectangle($image,0,0,$x_c,$y_c,$color);
imagecopyresampled($image,$image_new,$x_p,$y_p,0,0,$x_t,$y_t,$size[0],$size[1]);
imagejpeg($image,NULL,$qualite);

?>
?>


