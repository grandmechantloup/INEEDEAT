<?php session_start();
	$_SESSION['pseudo']=NULL;
	$_SESSION['id_utilisateur']=NULL;
header('location: ../accueil/accueil.php'); 
?>