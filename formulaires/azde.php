<?php 
require("../bdd/connexion.php");
$req =$bdd->query('SELECT max(id_variete) FROM varietes ');
$donnees=$req->fetch();
$id_variete=$donnees['max(id_variete)'];
echo $id_variete;
?>