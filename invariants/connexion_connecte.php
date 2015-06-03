<fieldset>
<article>
	<p>
		Bienvenu <?php echo $_SESSION['pseudo'];
	?>
	</p>
	<a href="../compte/mon_compte.php">Mon compte</a>
	
		<a href="../compte/panier.php"> 
			<img src="../images/images_site/panier.png" alt="image du panier" id="panier"/>
			<strong>Panier</strong>
		</a>
	
		<a href="../invariants/traitement_deconnexion.php" type="submit" class="myButton">Déconnexion</a>
	
</article>

</fieldset>
