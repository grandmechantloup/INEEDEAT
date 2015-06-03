<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <title> cible annonce </title>
</head>
<?php
include("../bdd/connexion.php");
if(isset($_FILES['mon_fichier']['error']))
{
$erreur = "aucune";
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
$extension_upload = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
    if ( !in_array($extension_upload,$extensions_valides) AND  $_FILES['mon_fichier']['error']!= 4 ) 
    {
    $erreur ="L'extension est invalide";
    }
    if ($_FILES['mon_fichier']['size'] > 1048576) 
    {
    $erreur = "Le fichier est trop gros";
    }   
if($erreur=="aucune")
{
$req =$bdd->prepare('SELECT id_categorie FROM categorie WHERE Categorie = ?');
$req->execute(array($_POST['Categorie']));
$donnees=$req->fetch();
$id_categorie=$donnees['id_categorie'];

$req=$bdd->prepare('INSERT INTO varietes (variete,id_categorie) VALUES (:variete, :id_categorie)');
$req->execute(array(
'variete'=> $_POST['Variete'],
'id_categorie'=> $id_categorie
));
$req =$bdd->query('SELECT max(id_variete) FROM varietes ');
$donnees=$req->fetch();

$req = $bdd->prepare('INSERT INTO annonces ( id_categorie, id_variete, Prix, Quantite, Titre, Description, Date_publication, Date_peremption, id_utilisateur, Extension_upload) 
                                    VALUES ( :id_categorie, :id_variete, :Prix, :Quantite, :Titre, :Description, NOW(), :Date_peremption, :id_utilisateur, :extension_upload)');
$req->execute(array(
    'id_categorie' => $id_categorie,
    'id_variete' => $donnees[0],
    'Prix' => $_POST['Prix'],
    'Quantite' => $_POST['Quantite'],
    'Titre' => $_POST['Titre'],
    'Description' => $_POST['Description'],
    'Date_peremption' => $_POST['Date_peremption'],
    'id_utilisateur' => $_SESSION['id_utilisateur'],
    'extension_upload' => $extension_upload ));

$req = $bdd -> query('SELECT MAX(id_annonce) FROM annonces');
$name = $req->fetch();
$nom = "../images/images_annonces/{$name[0]}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$nom);
header('location:http://localhost/INEEDEAT/compte/mes_annonces.php?');
}

else{
    header('location:http://localhost/INEEDEAT/formulaires/annonce.php?erreur=' .$erreur);
}
}
else{
    header('location:http://localhost/INEEDEAT/formulaires/annonce.php?erreur=' );
}
?> 


