<?php session_start(); 
require("../bdd/connexion.php");
$req=$bdd->prepare('SELECT Mdp, Pseudo FROM utilisateurs WHERE id_utilisateur=?');
$req->execute(array($_SESSION['id_utilisateur']));
$donnees=$req->fetch();
if(isset($_POST['nouveau_pseudo']) AND isset($_POST['ancien_mdp']) AND $_POST['ancien_mdp']==$donnees['Mdp'])	
{
	if(isset($_POST['nouveau_mdp']) AND isset($_POST['confirmation_mdp']) AND $_POST['nouveau_mdp']==$_POST['confirmation_mdp'])
	{
		echo $_POST['confirmation_mdp'];	
		$reponse=$bdd->prepare('UPDATE utilisateurs SET Mdp=:nouveau_mdp, Pseudo=:nouveau_pseudo WHERE id_utilisateur=:id_utilisateur');
		$reponse->execute(array(
			'nouveau_mdp'=>$_POST['nouveau_mdp'],
			'nouveau_pseudo'=>$_POST['nouveau_pseudo'],
			'id_utilisateur'=>$_SESSION['id_utilisateur']
			));
		$reponse->closeCursor();
	}
}
?>