<?php session_start(); 
	include("../bdd/connexion.php");
	$reponse = $bdd -> prepare('SELECT Mdp,id_utilisateur FROM utilisateurs WHERE Pseudo = ? ');
	$reponse -> execute(array($_POST['pseudo']));
	$donnees = $reponse-> fetch();
	if(isset($donnees['Mdp']) AND $donnees['Mdp'] == $_POST['mdp'])
		{
			$_SESSION['pseudo']= $_POST['pseudo'];
			$_SESSION['id_utilisateur']=$donnees['id_utilisateur'];
			$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
			header('Location: ' . $referer);	
		}
	else
	{
		$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
		header('Location: ' . $referer);
	}
$reponse->closeCursor();
?>
