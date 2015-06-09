<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8"/>
</head>
<?php echo $_SESSION['pseudo']; if(isset($_SESSION['id_utilisateur']))
{ ?>
	<body class="page">
	<?php
	include("../invariants/header.php"); ?>
	<div class="page_offres">
		<h2 class="titre_panier">Panier</h2>
		<?php
		require("../bdd/connexion.php"); 
		$req=$bdd->prepare('SELECT a.Date_publication, a.Titre, v.Variete, c.Categorie, a.Prix, a.Quantite, a.id_annonce, p.id, a.Extension_upload
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
			?>
			<div>
				<?php
				include("../annonces/produit_simple.php");
				?>
			</div>
			<a href="../suppression/supprimer_panier.php?annonce=<?php echo $donnees['id']?>"><input type="button" value="Supprimer" class="bouton_suppr_annonce"/></a>
		<?php
		} ?>
		</div>
		<?php
	include("../invariants/footer.php");
}
else
{
	include("../formulaires/inscription.php");
}
	?>
</body>
</html>