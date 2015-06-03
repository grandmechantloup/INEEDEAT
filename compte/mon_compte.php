<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mon Compte</title>
	<meta charset = "utf-8"/>
	<link rel="stylesheet" type="text/css" href="../css/style_mon_compte.css">
</head>
<body>
	
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
				<a class="deco" href="deconnection" <p>Se déconnecter</p> </a>

				<fieldset class="grand_cadre3">
				<a href="../accueil/accueil.php" ><img src="../images/images_site/logo_i_need_eat.png" border="0"></a>
					<h1>
						Modification de mes informations personnelles
					</h1>
					<?php
					$req=$bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=?');
					$req->execute(array($_SESSION['id_utilisateur']));
					$donnees=$req->fetch();
					?>
					<form method="POST" action="../compte/traitement_modifier_info.php">
						civilité : <select name="Civilite" id="Civilite">
							<option value="Monsieur">Monsieur</option>
							<option value="Madame">Madame</option>
						</select><br/>
						Nom : <input type="type" name="nouveau_nom" value="<?=$donnees['Nom']?>"/><br/>
						Prénom : <input type="text" name="nouveau_prenom" value="<?=$donnees['Prenom']?>"/><br/>
						Téléphone :	<input type="text" name="nouveau_tel" value="0<?=$donnees['Tel']?>"/><br/>
						Date de naissance : <input type="date" name="nouvelle_naissance" value="<?=$donnees['Naissance']?>"/><br/>
						<input type="submit" value="Valider"/>
					</form>	
				</fieldset>
		<?php
		}
		elseif(isset($_GET['modifier_info']) AND $_GET['modifier_info']==2)
		{
		?>
				<a class="deco" href="deconnection" <p>Se déconnecter</p> </a>

				<fieldset class="grand_cadre2">
				<a href="../accueil/accueil.php" ><img src="../images/images_site/logo_i_need_eat.png" border="0"></a>
					<h3> Adresse : </h3> 
					<?php
					$req=$bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=?');
					$req->execute(array($_SESSION['id_utilisateur']));
					$donnees=$req->fetch();
					?>
					<form method="POST" action="../compte/traitement_modifier_info.php">
						Adresse : <input type="text" name="nouveau_num_rue" value="<?=$donnees['Num_rue']?>" size="3"/> <input type="text" name="nouvelle_adresse" value="<?=$donnees['Adresse']?>" size="40"/> <br/>
						Ville : <input type="text" name="nouvelle_ville" value="<?=$donnees['Ville']?>" size="40"/><br/>
						Region : <input type="text" name="nouvelle_region" value="<?=$donnees['Region']?>" size="40"/><br/>
						Code postal : <input type="text" name="nouveau_code_postal" value="<?=$donnees['Code_postal']?>" size="10"/> <br/>
						<input type="submit" value="Valider"/>
					</from>
				</fieldset>	
		<?php
		}
		else
		{
			?>
			<a class="deco" href="deconnection" <p>Se déconnecter</p> </a>
			<fieldset class ="grand_cadre">

			<a href="../accueil/accueil.php" ><img src="../images/images_site/logo_i_need_eat.png" border="0"></a>
			<section>
				
				<h1>
					--------------------- Récapitulatif de mes informations personnelles ----------------------
				</h1>

				<fieldset class="recap_info_personelles">
				<?php
				$req=$bdd->prepare('SELECT * FROM utilisateurs WHERE id_utilisateur=?');
				$req->execute(array($_SESSION['id_utilisateur']));
				$donnees=$req->fetch();
				echo 'Civilité : '.$donnees['Civilite']; ?><br/>
				<?php echo 'Nom : '.$donnees['Nom']; ?><br/>
				<?php echo 'Prénom : '.$donnees['Prenom']; ?><br/>
				<?php echo 'Téléphone : 0'.$donnees['Tel']; ?><br/>
				<?php echo 'Date de naissance : '.$donnees['Naissance']; ?><br/>
				
				</fieldset>
				<a id="b1" href="mon_compte.php?modifier_info=1"><input type="button" value="Modifier"/></a>


					<h1> ----------------------------------------------- Adresse ---------------------------------------------- </h1> 
					<fieldset class="adresse">
					<p>
					<?php echo $donnees['Num_rue'].' '.$donnees['Adresse']; ?> <br/>
					<?php echo $donnees['Code_postal'];	?> 
					<?php echo $donnees['Ville']; ?> <br/>
					<?php echo $donnees['Region']; ?> <br/>
					
					
				</p>	
				</fieldset>
				<a id="b2" href="mon_compte.php?modifier_info=2"><input type="button" value="Modifier"/></a>


				
				<h1> ------------------------------------------- Mon compte --------------------------------------------	</h1>
				
				<fieldset class"mc">
				<p>
					Pseudo : <?php echo $donnees['Pseudo'] ?> <br/>
					Email : <?php echo $donnees['Email'] ?> <br/>
					Mot de passe : ****** <br/>
					
				</p>
				</fieldset>
				<a id="b3" href="../compte/Modifier_info_compte.php"><input type="button" value="Modifier"/></a>
			</section>
			</fieldset>
		<?php
		}
		?>
	
</body>
</html>