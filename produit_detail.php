<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="style_produit_detail.css">
</head>
<body>
	<header>
		<?php 
		include("../invariants/header.php");
		?>
	</header>
	<section>
		<aside>
			<p><img src="#" alt="#"/></p>
		</aside>
		<article class="info">
			<?php require("../bdd/connection.php"); ?>
			<h1> 
				<?php $reponse=$bdd->prepare('SELECT Titre, Region, Prix, Quantite, Texte, Pseudo, Categorie, Date_publication, id_annonce
											  FROM annonces AS a
											  INNER JOIN utilisateurs AS u
											  ON u.id_utilisateur=a.id_utilisateur
											  WHERE id_annonce=?');
				$reponse->execute(array($_GET['id_annonce']));
				$donnees=$reponse->fetch();
				echo $donnees['Titre']; ?>
			</h1>
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
		</article>
		<article>
			<p> 
				<strong>description</strong> : 
				<?php echo $donnees['Texte']; ?>
			</p>
		</article>
		<article>
			<p>
				détail du <strong>produit</strong> : 
				<?php echo $donnees['Categorie']; ?>
			</p>
		</article>
		<div class="reglement">
			<p> <a href="../compte/ajout_panier.php?id_annonce=<?php echo $donnees['id_annonce'];?>"> <input type="button" value="ajouter au panier"/> </a> </p>
			<p> <a href="#"> <input type="button" value="acheter"/> </a> </p>
			<p> <a href="#"> <input type="button" value="échanger"/> </a> </p>

		</div>
	</section>

	<include("../invariants/footer.php")
</body>
?>
</html>