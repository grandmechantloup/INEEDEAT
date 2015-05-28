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
$req = $bdd->prepare('INSERT INTO categorie (categorie) VALUES (:categorie)');
$req->execute(array(
	
	'categorie' => $_POST['categorie']));

$req = $bdd->prepare('INSERT INTO variete (variete) VALUES (:variete)');
$req->execute(array(
	
	'variete' => $_POST['variete']));

$req = $bdd->prepare('INSERT INTO annonces (Prix, Quantite, Description, Auteur, Code_postal, Date_publication, Extension_upload) VALUES (:Prix, :Quantite, :Description, :Auteur, :Code_postal, NOW(), :Extension_upload)');
$req->execute(array(
	
    
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

/*
{
$ImageNews = getimagesize($_FILES['image']['name']);
                              if($ImageNews['mime'] == $ListeExtension[$ExtensionPresumee]  || $ImageNews['mime'] == $ListeExtensionIE[$ExtensionPresumee])
{
$ImageChoisie = imagecreatefromjpeg($_FILES['image']['name']);
$TailleImageChoisie = getimagesize($_FILES['image']['name']);
$NouvelleLargeur = 350; 
$NouvelleHauteur = ( ($TailleImageChoisie[1] * (($NouvelleLargeur)/$TailleImageChoisie[0])) );
$NouvelleImage = imagecreatetruecolor($NouvelleLargeur , $NouvelleHauteur) or die ("Erreur");
imagecopyresampled($NouvelleImage , $ImageChoisie  , 0,0, 0,0, $NouvelleLargeur, $NouvelleHauteur, $TailleImageChoisie[0],$TailleImageChoisie[1]);
imagedestroy($ImageChoisie);
$NomImageChoisie = explode('.', $ImageNews);
$NomImageExploitable = time();
imagejpeg($NouvelleImage , 'image/'.$NomImageExploitable.'.'.$ExtensionPresumee, 100);
$LienImageNews = 'image/'.$NomImageExploitable.'.'.$ExtensionPresumee;
 
                                             
        }
}*/
?>


