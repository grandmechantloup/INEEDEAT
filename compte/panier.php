<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8"/>
</head>
<?php if(isset($_SESSION['id_utilisateur']))
{ ?>
	<body class="page">
	<?php
	include("../invariants/header.php");
	require("../bdd/connexion.php"); 
	$req=$bdd->prepare('SELECT a.Date_publication, a.Titre, v.Variete, c.Categorie, a.Prix, a.Quantite, a.id_annonce, p.id
						FROM panier p
						INNER JOIN annonces a
						ON a.id_annonce=p.id_annonce
						INNER JOIN categorie c
					    ON c.id_categorie=a.id_categorie
					    INNER JOIN varietes v
					    ON v.id_variete=a.id_variete
						WHERE p.id_utilisateur=?');
	$req->execute(array($_SESSION['id_utilisateur']));
	while($donnees=$req->fetch())
	{
		include("../annonces/produit_simple.php");
		?>
		<a href="../suppression/supprimer_panier.php?annonce=<?php echo $donnees['id']?>"><input type="button" value="Supprimer"/></a>
	<?php
	}
	include("../invariants/footer.php");
}
else
{
	include("../formulaires/inscription.php");
}
	?>
</body>
</html>