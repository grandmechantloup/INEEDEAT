<a href="../annonces/produit_detail.php?id_annonce=<?php echo $donnees['id_annonce'];?>">
<article>
	<p><?php echo $donnees['Date_publication']; ?></p>
	<p> <img src="" class="image_annonce"/> <p>
	<p>
	<?php echo $donnees['Titre']; ?> <br/>
	 <?php echo $donnees['Code_postal']; ?>
	</p>
	<p>
	<?php echo $donnees['Categorie']; ?> > <?php echo $donnees['Variete']; ?>
	</p>
	<p>
		<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
		<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
	</p>
</article>
</a>

