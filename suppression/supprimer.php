<?php 
require("../bdd/connexion.php");
$req = $bdd -> prepare('DELETE FROM annonces WHERE id_annonce = ?');
$req ->execute(array($_GET['annonce']));
		$req->closeCursor();
$req1=$bdd->prepare('DELETE FROM variete WHERE id_variete=?');
$req1->execute(array($_GET['variete']));
		$req1->closeCursor();
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
?>