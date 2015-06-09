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
		<p class="categorie">
					<?php echo $donnees['Categorie']; ?> > <?php echo $donnees['Variete']; ?>
		</p>
		<h1 class="titre_annonce"> 
				<?php echo $donnees['Titre']; ?>
		</h1>
	
		<aside class="image_annonce">
			<p class="image_produit"><img src="../images/images_annonces/<?php echo $donnees['id_annonce'].'.'.$donnees['Extension_upload']; ?>" alt="image_produit" id="image_produit"/></p>
		</aside>

		<article class="info_produit_detail">

			<p class="info_prod">
				<strong>Localisation</strong> : <span class="localisation"><?php echo $donnees['Region'];?></span>
			</p>
			<p class="info_prod">
				<strong>Vendeur</strong> : <span class="vendeur"><?php echo $donnees['Pseudo']; ?></span>
			</p>
			<p class="info_prod">
				<strong>prix</strong> : <span class="prix"><?php echo $donnees['Prix']; ?> €/Kg </span><br/>
			</p>
			<p class="info_prod">
				<strong>Quantité restante</strong> : <span class="quantite"> <?php echo $donnees['Quantite']; ?> Kg </span><br/>
			</p>
			<p class="info_prod">
				<strong>Date de mise en vente</strong> : <span class="date_publication"><?php echo $donnees['Date_publication']; ?></span>
			</p>
			
			
		</article>
		<article class="description_annonce">
			<h2> 
				<strong>description</strong> : <br/>
			</h2>
			<p>
				<?php echo $donnees['Description']; ?>
			</p>
		</article>
		<div class="reglement">
			<p> <a href="../compte/ajout_panier.php?id_annonce=<?php echo $donnees['id_annonce'];?>"> <input type="button" value="ajouter au panier" class="bouton_reglement"/> </a> </p>
			<p> <a href="../achat/achat.php?id_annonce=<?php echo $donnees['id_annonce'];?>"> <input type="button" value="acheter" class="bouton_reglement"/> </a> </p>
			<?php
			$req=$bdd->prepare('SELECT Echange FROM annonces WHERE id_annonce=?');
			$req->execute(array($_GET['id_annonce']));
			$donnees=$req->fetch();
		
			if($donnees[0]==1){
				?>
				<p> <a href="#"> <input type="button" value="Echanger" class="bouton_reglement"/> </a> </p><?php

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