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
		<?php 
		require("../bdd/connexion.php");
		if(isset($_GET['modifier_info']) AND $_GET['modifier_info']==1)
		{
		?>
			<section>
				<h1>
					Modification de mes informations personnelles
				</h1>
				<?php
				$req=$bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=?');
				$req->execute(array($_SESSION['id_utilisateur']));
				$donnees=$req->fetch();
				?>
				<form method="POST" action="">
					<?php
					echo 'civilité : '.$donnees['Civilite']; ?>	
					<select name="Civilite" id="Civilite">
						<option value="Monsieur">Monsieur</option>
						<option value="Madame">Madame</option>
					</select><br/>
					<?php echo 'Nom : '.$donnees['Nom']; ?>
					<input type="type" name="nouveau_nom"/><br/>
					<?php echo 'Prénom : '.$donnees['Prenom']; ?>
					<input type="text" name="nouveau_prenom"/><br/>
					<?php echo 'Téléphone : '.$donnees['Tel']; ?>
					<input type="text" name="nouveau_tel"/><br/>
					<?php echo 'Date de naissance : '.$donnees['Naissance']; ?>
					<input type="date" name="nouvelle_naissance"/><br/>
					<input type="submit" value="Valider"/>
				</form>	
		<?php
		}
		elseif(isset($_GET['modifier_info']) AND $_GET['modifier_info']==2)
		{
		?>
				<p>
					<h3> Adresse : </h3> 
					<?php
					$req=$bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=?');
					$req->execute(array($_SESSION['id_utilisateur']));
					$donnees=$req->fetch();
					?>
					<form method="POST" action="">
						<?php
						echo $donnees['Num_rue'].' '.$donnees['Adresse']; ?><input type="text" name="nouveau_num_rue" placeholder="Numéro" size="3"/> <input type="text" name="nouvelle_adresse" placeholder="Adresse"/> <br/>
						<?php echo $donnees['Ville']; ?> <input type="text" name="nouvelle_ville" placeholder="Ville"/><br/>
						<?php echo $donnees['Region']; ?> <input type="text" name="nouvelle_region" placeholder="Région"/><br/>
						<?php echo $donnees['Code_postal'];	?><input type="text" name="nouveau_code_postal" placeholder="Code postal"/> <br/>
						<input type="submit" value="Valider"/>
					</from>
				</p>	
		<?php
		}
		else
		{
			?>
			<section>
				<h1>
					Récapitulatif de mes informations personnelles
				</h1>
				<?php
				$req=$bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=?');
				$req->execute(array($_SESSION['id_utilisateur']));
				$donnees=$req->fetch();
				echo 'civilité : '.$donnees['Civilite']; ?><br/>
				<?php echo 'Nom : '.$donnees['Nom']; ?><br/>
				<?php echo 'Prénom : '.$donnees['Prenom']; ?><br/>
				<?php echo 'Téléphone : '.$donnees['Tel']; ?><br/>
				<?php echo 'Date de naissance : '.$donnees['Naissance']; ?><br/>
				<a href="mon_compte.php?modifier_info=1"><input type="button" value="modifier"/></a>
				<p>
					<h3> Adresse : </h3> 
					<?php
					echo $donnees['Num_rue'].' '.$donnees['Adresse']; ?> <br/>
					<?php echo $donnees['Ville']; ?> <br/>
					<?php echo $donnees['Region']; ?> <br/>
					<?php echo $donnees['Code_postal'];	?> <br/>
					<a href="mon_compte.php?modifier_info=2"><input type="button" value="modifier"/></a>
				</p>	
				<h1>
					Mon compte
				</h1>
				<p>
					Pseudo : <?php echo $donnees['Pseudo'] ?> <br/>
					Email : <?php echo $donnees['Email'] ?> <br/>
					Mot de passe : ****** <br/>
					<a href="../compte/Modifier_info_compte.php"><input type="button" value="modifier"/></a>
				</p>
			</section>
		<?php
		}
		?>
	
</body>
</html>