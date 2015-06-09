<?php 
require("../bdd/connexion.php");
$req = $bdd -> prepare('DELETE FROM panier WHERE id = ?');
$req ->execute(array($_GET['annonce']));
		$req->closeCursor();
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
?>