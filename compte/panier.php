<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8"/>
</head>
<body class="page">
<?php
include("../invariants/header.php");
require("../bdd/connexion.php"); 
$req=$bdd->prepare('SELECT a.Date_publication, a.Titre, v.Variete, c.Categorie, a.Prix, a.Quantite, a.id_annonce
					FROM panier p
					INNER JOIN annonces a
					ON a.id_annonce=p.id_annonce
					INNER JOIN categorie c
				    ON c.id_categorie=a.id_categorie
				    INNER JOIN varietes v
				    ON v.id_categorie=c.id_categorie
					WHERE p.id_utilisateur=?');
$req->execute(array($_SESSION['id_utilisateur']));
while($donnees=$req->fetch())
{
	include("../annonces/produit_simple.php");
	?>
	<a href="../suppression/supprimer.php?annonce=<?php echo $donnees['id_annonce']?>"><input type="button" value="Supprimer"/></a>
<?php
}
include("../invariants/footer.php");
?>
</body>
</html>