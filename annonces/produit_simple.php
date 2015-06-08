<a href="../annonces/produit_detail.php?id_annonce=<?php echo $donnees['id_annonce'];?>">
<article class="produit_simple">
	<p><?php echo $donnees['Date_publication']; ?></p>
	<p> 
		<?php
		if(isset($donnees['Extension_upload']) AND $donnees['Extension_upload']!=NULL)
		{
		?>
			<img src="../images/images_annonces/<?php echo $donnees['id_annonce'].'.'.$donnees['Extension_upload']; ?>" class="image_annonce"/> 
		<?php
		}
		?>
	</p>
	<p>
	<?php echo $donnees['Titre']; ?> <br/>
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