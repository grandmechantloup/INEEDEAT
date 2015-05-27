<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Compte</title>
	<meta charset = "utf-8"/>
</head>
<body>
	<?php include("../invariants/header.php"); ?>
	<nav class="nav_compte">
		<ul>
			<li><a href="../compte/mon_compte.php">Information du compte</a></li>
			<li><a href="../compte/modifier_info_compte.php">Modifier Pseudo, mot de passe, email</a></li>
			<li><a href="../compte/mes_annonces.php">Mes annonces</a></li>
			<li><a href="#">Mes achats</a></li>
		</ul>
	</nav>
	<section>
		<h1>
			Récapitulatif de mes informations personnelles
		</h1>
		<?php 
		require("../bdd/connexion.php");
		$req=$bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=?');
		$req->execute(array($_SESSION['id_utilisateur']));
		$donnees=$req->fetch();
		echo 'civilité : '.$donnees['Civilite']; ?><input type="button" value="modifier"/></br>
		<?php echo 'Nom : '.$donnees['Nom']; ?><input type="button" value="modifier"/></br>
		<?php echo 'Prénom : '.$donnees['Prenom']; ?><input type="button" value="modifier"/></br>
		<?php echo 'Téléphone : '.$donnees['Tel']; ?><input type="button" value="modifier"/></br>
		<?php echo 'Date de naissance : '.$donnees['Naissance']; ?><input type="button" value="modifier"/>
		<p>
			<h3> Adresse : </h3> 
			<?php
			echo $donnees['Num_rue'].' '.$donnees['Adresse']; ?> </br>
			<?php echo $donnees['Ville']; ?> </br>
			<?php echo $donnees['Region']; ?> </br>
			<?php echo $donnees['Code_postal'];	?><input type="button" value="modifier"/>	
		</p>	
		<h1>
			Mon compte
		</h1>
		<p>
			Pseudo : <?php echo $donnees['Pseudo'] ?> </br>
			Email : <?php echo $donnees['Email'] ?> </br>
			Mot de passe : ****** </br>
		</p>
	</section>
</body>
</html>