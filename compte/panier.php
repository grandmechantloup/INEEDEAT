<?php session_start(); 
require("../bdd/connexion.php"); 
$req=$bdd->prepare('SELECT Date_publication, Titre, Region, Categorie, Prix, Quantite,
					FROM panier AS p
					INNER JOIN annonces AS a
					ON a.id_annonce=p.id_annonce
					WHERE id_utilisateur=?');
$req->execute(array($_SESSION['id_utilisateur']));
while($donnees=$req->fetch())
{
	echo $donnees['Titre'];
	echo $_SESSION['id_utilisateur'];
}
?>