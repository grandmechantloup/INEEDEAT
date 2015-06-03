<?php session_start(); 
require("../bdd/connexion.php");
$req=$bdd->prepare('SELECT Mdp FROM utilisateurs WHERE id_utilisateur=?');
$req->execute(array($_SESSION['id_utilisateur']));
$donnees=$req->fetch();
if(isset($_POST['nouveau_pseudo']) AND $_POST['nouveau_pseudo']!=NULL)
{
	$reponse1=$bdd->prepare('UPDATE utilisateurs SET Pseudo=:nouveau_pseudo WHERE id_utilisateur=:id_utilisateur');
	$reponse1->execute(array(
		'nouveau_pseudo'=>$_POST['nouveau_pseudo'],
		'id_utilisateur'=>$_SESSION['id_utilisateur']
	));
	$reponse1->closeCursor();
	$_SESSION['pseudo']=$_POST['nouveau_pseudo'];
}
if(isset($_POST['ancien_mdp']) AND $_POST['ancien_mdp']==$donnees['Mdp'])
{
	if(isset($_POST['nouveau_mdp']) AND $_POST['nouveau_mdp']!=NULL AND $_POST['nouveau_mdp']===$_POST['confirmation_mdp'])
	{
		$reponse=$bdd->prepare('UPDATE utilisateurs SET Mdp=:nouveau_mdp WHERE id_utilisateur=:id_utilisateur');
		$reponse->execute(array(
			'nouveau_mdp'=>$_POST['nouveau_mdp'],
			'id_utilisateur'=>$_SESSION['id_utilisateur']
			));
		$reponse->closeCursor();
	}
}
if(isset($_POST['nouvel_email']) AND $_POST['nouvel_email']!=NULL)
{
		$reponse1=$bdd->prepare('UPDATE utilisateurs SET Email=:nouvel_email WHERE id_utilisateur=:id_utilisateur');
		$reponse1->execute(array(
			'nouvel_email'=>$_POST['nouvel_email'],
			'id_utilisateur'=>$_SESSION['id_utilisateur']
		));
		$reponse1->closeCursor();
}
header('location:../compte/mon_compte.php');
?>