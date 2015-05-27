<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Compte</title>
	<meta charset = "utf-8"/>
</head>
<body>
	<?php
	if(isset($_SESSION['pseudo']))
	{
		require("../bdd/connexion.php");
		$req=$bdd->prepare('SELECT Pseudo, Mdp, Email FROM utilisateur WHERE id_utilisateur=?');
		$req->execute(array($_SESSION['id_utilisateur']));
		$donnees=$req->fetch();
		?>
		<form action="../compte/traitement_modifier_info_compte.php" method="POST">
			Pseudo : <?php echo $donnees['Pseudo'] ?> </br>
			changer le pseudo : <input type="text" name="nouveau_pseudo" placeholder="Nouveau pseudo"/> </br>
			Mot de passe : ****** </br>
			changer le mot de passe : </br>
			<input type="password" name="ancien_mdp" placeholder="ancien mot de passe"/> </br>
			<input type="password" name="nouveau_mdp" placeholder="Nouveau mot de passe"/> </br>
			<input type="password" name="confirmation_mdp" placeholder="Confirmer le mot de passe"/>
			<input type="submit" value="valider"/>
		</from>
		<?php
	}
	else
	{
		header('location:../accueil/accueil.php');
	}
	?>
</body>
</html>