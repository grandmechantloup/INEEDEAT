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

<?php include("../bdd/connection.php"); ?>

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
$req = $bdd->prepare('INSERT INTO annonces (Categorie, Article, Region, Prix, Quantite, Titre, Texte, Auteur,Code_postal, Date_publication, Extension_upload) VALUES (:Categorie, :Article, :Region, :Prix, :Quantite, :Titre, :Texte, :Auteur, :Code_postal, NOW(), :Extension_upload)');
$req->execute(array(
	
	'Categorie' => $_POST['categorie'],
    'Article' => $_POST['article'],
    'Region' => $_POST['region'],
    'Prix' => $_POST['prix'],
    'Quantite' => $_POST['quantite'],
    'Titre' => $_POST['titre'],
    'Texte' => $_POST['texte'],
  	'Auteur' => $_SESSION['pseudo'],
  	'Code_postal' => $_POST['code_postal'],
  	'Extension_upload' => $extension_upload
  	));

$req = $bdd -> query('SELECT MAX(id_annonce) FROM annonces');
$name = $req->fetch();

$nom = "image/{$name[0]}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);

}
else
{
header('location:http://localhost/APP-informatique/formulaires/annonce.php?erreur=' .$erreur);
}
}
else
{
$erreur = "le fichier que vous avez chargé pose problème";
header('location:http://localhost/APP-informatique/formulaires/annonce.php?erreur=' .$erreur);
}
?>
<?php
$Imagebase = "C:/Applications/MAMP/htdocs/APP-informatique/formulaires/image/{$name[0]}.{$extension_upload}"
$NouvelleImage = imagecreatefromjpeg ($Imagebase);
$TailleImage = getimagesize ($Imagebase$Imagebase);
$TailleImage = getimagesize ($Imagebase);
$ImageEnCouleurs = imagecreatetruecolor(800, 600);
imagecopyresampled($NouvelleImage, $ImageDepart, $CoordonneeXduPointdeDestination, $CoordonneeYduPointdeDestination, $CoordonneeXduPointSource, $CoordonneeYduPointSource, $NouvelleLargeur, $NouvelleHauteur, $LargeurImageDepart, $HauteurImageDepart);

?>



