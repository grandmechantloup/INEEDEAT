<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
	<title>confirmation achat</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../css/style.css" />
</head>
<body class="page">
<?php include("../invariants/header.php");?>
<?php require("../bdd/connexion.php"); ?>
<?php $reponse=$bdd->prepare('SELECT a.Titre, a.Prix, a.Quantite, u.Pseudo, a.id_annonce	
								  FROM annonces a
								  INNER JOIN utilisateurs u
								  ON u.id_utilisateur=a.id_utilisateur
								  WHERE id_annonce=?');
	$reponse->execute(array($_GET['id_annonce']));
	$donnees=$reponse->fetch();
	?>
	<section class="produit_detail">
		</p>
		<h1 class="titre_annonce"> 
				<?php echo $donnees['Titre']; ?>
		</h1>
		<article class="info_produit_detail">

			<p class="info_prod">
				<strong>Vendeur</strong> : <span class="vendeur"><?php echo $donnees['Pseudo']; ?></span>
			</p>
			<p class="info_prod">
				<strong>prix</strong> : <span class="prix"><?php echo $donnees['Prix']; ?> €/Kg </span><br/>
			</p>
			<p class="info_prod">
				<strong>Quantité restante</strong> : <span class="quantite"> <?php echo $donnees['Quantite'];?>Kg </span><br/>
			</p>
			<p class="info_prod">
				<strong>Quantité choisie</strong> : <span class="quantite"> <?php echo $_GET['Quantite'];?>Kg </span><br/>
			</p>
			<p class="info_prod">
				<strong>Prix à payer</strong> : <span class="quantite"> <?php echo $_GET['Quantite']*=$donnees['Prix'];?>€ </span><br/>
			</p>				
		</article>

		

			<p> <a href="../achat/traitement_achat.php?id_annonce=<?php echo $donnees['id_annonce'];?>"> <input type="button" value="Valider" class="bouton_valider"/> </a> </p>
		
		<?php $reponse->closeCursor();?>
	
	<?php include("../invariants/footer.php");?>
</body>
</html>	
	