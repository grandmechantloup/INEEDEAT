<fieldset>
<article>
	<p>
		Bienvenu <?php echo $_SESSION['pseudo'];
	?>
	</p>
	<a href="../compte/mon_compte.php"> 
		<p> Mon compte </p> 
	</a>
	<p>
		<a href="../compte/panier.php"> 
			<img src="../images/images_site/panier.png" alt="image du panier" id="panier"/>
			<strong>Panier</strong>
		</a>
	</p>
	<p>
		<a href="../invariants/traitement_deconnexion.php">Déconnexion</a>
	</p>
</article>

</fieldset>
