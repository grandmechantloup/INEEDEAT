<article class="connection_connecte">
	<fieldset class="cadre_connexion">
		<p class="bienvenu">
			Bienvenu <?php echo $_SESSION['pseudo'];?>
		</p>
		<p>
			<a href="../compte/panier.php"> 
				<img src="../images/images_site/panier.png" alt="image du panier" id="panier"/>
			</a>
		</p>
		<div class="compte">
			<a href="../compte/mon_compte.php">Mon compte</a>
		</div>
		<div class="deconnexion">
			<a href="../invariants/traitement_deconnexion.php" type="submit" class="myButton" >Déconnexion</a>
		</div>
		<?php require("../bdd/connexion.php");
		$req=$bdd->prepare('SELECT status_cma FROM utilisateurs WHERE id_utilisateur=?');
		$req->execute(array($_SESSION['id_utilisateur']));
		$donnees=$req->fetch();
		if($donnees['status_cma']==1 OR $donnees['status_cma']==2)
		{ 
			?>
			<div class="administration">
				<a href="../compte/gestion_administrateur.php" type="submit" class="myButton">Administration</a>
			</div>
			<?php
		}
		$req->closeCursor();
		?>
</fieldset>
	</article>