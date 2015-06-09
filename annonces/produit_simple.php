<a href="../annonces/produit_detail.php?id_annonce=<?php echo $donnees['id_annonce'];?>">
<article class="produit_simple">
	<div class="date_produit_simple">
		<?php echo $donnees['Date_publication']; ?>
	</div>
	<div class="image_produit_simple"> 
		<?php
		if(isset($donnees['Extension_upload']) AND $donnees['Extension_upload']!=NULL)
		{
		?>
			<div class="image" style="background-image:url('../images/images_annonces/<?php echo $donnees['id_annonce'].'.'.$donnees['Extension_upload']; ?>');"></div>
		<?php
		}
		?>
	</div>
	<div class="info_produit_simple">
		<div class="titre_categorie">
			<h2><?php echo $donnees['Titre']; ?></h2>
			<?php echo $donnees['Categorie']; ?> > <?php echo $donnees['Variete']; ?>
		</div>
		<div class="prix_quantite">	
			<div> <strong>prix</strong> : <span class="prix"><?php echo $donnees['Prix']; ?> €/Kg</span></div></br>
			<div> <strong>Quantité restante</strong> : <span class="quantite"><?php echo $donnees['Quantite']; ?> Kg</span> </div>
		</div>
	</div>
</article>
</a>