<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="page">
	<?php include("../invariants/header.php");?>
	<?php require("../bdd/connexion.php"); ?>
	<?php $reponse=$bdd->prepare('SELECT c.Categorie, v.Variete, a.Titre, u.Region, a.Prix, a.Quantite, a.Description, u.Pseudo, a.Date_publication, a.id_annonce, a.Extension_upload	
								  FROM annonces a
								  INNER JOIN utilisateurs u
								  ON u.id_utilisateur=a.id_utilisateur
								  INNER JOIN categorie c
								  ON c.id_categorie=a.id_categorie
								  INNER JOIN varietes v
								  ON v.id_categorie=c.id_categorie
								  WHERE id_annonce=?');
	$reponse->execute(array($_GET['id_annonce']));
	$donnees=$reponse->fetch();
	?>
	<section class="produit_detail">
		<h1 class="titre_annonce"> 
				<?php echo $donnees['Titre']; ?>
		</h1>
		<aside class="image_annonce">
			<p class="image_produit"><img src="../images/images_annonces/<?php echo $donnees['id_annonce'].'.'.$donnees['Extension_upload']; ?>" alt="image_produit" id="image_produit"/></p>
		</aside>
		<article class="info_produit_detail">
			<p>
				<?php echo $donnees['Region'];?>
			</p>
			<p class="vendeur">
				<?php echo $donnees['Pseudo']; ?>
			</p>
			<p>
				<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
				<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
				Date de mise en vente : <?php echo $donnees['Date_publication']; ?>
			</p>
			<p> 
				<strong>description</strong> : 
				<?php echo $donnees['Description']; ?>
			</p>
			<p>
				détail du <strong>produit</strong> : 
				<?php echo $donnees['Categorie']; ?> > <?php echo $donnees['Variete']; ?>
			</p>
		</article>
		<div class="reglement">
			<p> <a href="../compte/ajout_panier.php?id_annonce=<?php echo $donnees['id_annonce'];?>"> <input type="button" value="ajouter au panier"/> </a> </p>
			<p> <a href="#"> <input type="button" value="acheter"/> </a> </p>
			<?php
			$req=$bdd->prepare('SELECT Echange FROM annonces WHERE id_annonce=?');
			$req->execute(array($_GET['id_annonce']));
			$donnees=$req->fetch();
		
			if($donnees[0]==1){
				?>
				<p> <a href="#"> <input type="button" value="Echanger"/> </a> </p><?php

			}
			?>
		</div>
		<?php $reponse->closeCursor(); ?>
	</section>
	<?php
	include("../invariants/footer.php");
	?>
</body>
</html>