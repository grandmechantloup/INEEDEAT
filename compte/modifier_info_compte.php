<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier votre compte</title>
	<meta charset = "utf-8"/>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a class="../invariants/traitement_deconnexion.php" href="" > Se deconnecter</a>
	<fieldset class="cadre_principal">
		
		<a href="../accueil/accueil.php" ><img src="../images/images_site/logo_i_need_eat.png" border="0"></a>

		<h1>Modifier mes informations de compte</h1>
		<?php
		if(isset($_SESSION['pseudo']))
		{
			require("../bdd/connexion.php");
			$req=$bdd->prepare('SELECT Pseudo, Mdp, Email FROM utilisateurs WHERE id_utilisateur=?');
			$req->execute(array($_SESSION['id_utilisateur']));
			$donnees=$req->fetch();
			?>
			<form action="../compte/traitement_modifier_info_compte.php" method="POST">
				<strong>
					Pseudo : <?php echo $donnees['Pseudo']; ?><br/>
					Changer de pseudo : <input type="text" name="nouveau_pseudo" placeholder="Nouveau pseudo" size="40" /> <br/>
					Email : <?php echo $donnees['Email']; ?> <br/>
					Changer l'adresse email : <input type="email" name="nouvel_email" placeholder="Nouvel email" size="40" /><br/>
					Mot de passe : ****** <br/>
					Changer le mot de passe : <br/>
					<input type="password" name="ancien_mdp" placeholder="Ancien mot de passe" size="40" /> <br/>
					<input type="password" name="nouveau_mdp" placeholder="Nouveau mot de passe" size="40" /> <br/>
					<input type="password" name="confirmation_mdp" placeholder="Confirmer le mot de passe" size="40" /><br/>
					<input class"valider" type="submit" value="Valider"/>
				</strong>
				

			</form>
			<?php
		}
		else
		{
			header('location:../accueil/accueil.php');
		}
		?>
	</fieldset>
</body>
</html>