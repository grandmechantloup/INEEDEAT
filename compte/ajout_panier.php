<?php session_start(); 
include("../bdd/connexion.php"); 
$req=$bdd->prepare('INSERT INTO panier (id_annonce, id_utilisateur) VALUES (:id_annonce, :id_utilisateur)');
$req->execute(array(
	'id_annonce'=>$_GET['id_annonce'],
	'id_utilisateur'=>$_SESSION['id_utilisateur']
	));
header('location:../compte/panier.php');
?>