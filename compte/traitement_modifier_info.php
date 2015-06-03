<?php session_start();
include("../bdd/connexion.php");


if(isset($_POST['Civilite']) OR isset($_POST['nouveau_nom']) OR isset($_POST['nouveau_prenom']) OR isset($_POST['nouveau_tel']) OR isset($_POST['nouvel_naissance']))
{
	$req=$bdd->prepare('UPDATE utilisateurs SET Civilite=:civilite, Nom=:nom, Prenom=:prenom, Tel=:tel, Naissance=:naissance WHERE id_utilisateur=:id_utilisateur');
	$req->execute(array(
		'civilite'=>$_POST['Civilite'],
		'nom'=>$_POST['nouveau_nom'],
		'prenom'=>$_POST['nouveau_prenom'],
		'tel'=>$_POST['nouveau_tel'],
		'naissance'=>$_POST['nouvelle_naissance'],
		'id_utilisateur'=>$_SESSION['id_utilisateur']
		));
	$req->closeCursor();
}

if(isset($_POST['nouveau_num_rue']) OR isset($_POST['nouvelle_adresse']) OR isset($_POST['nouvelle_region']) OR isset($_POST['nouveau_code_postal']))
{
	$req=$bdd->prepare('UPDATE utilisateurs SET Num_rue=:num_rue, Adresse=:adresse, Ville=:ville, Region=:region, Code_postal=:code_postal WHERE id_utilisateur=:id_utilisateur');
	$req->execute(array(

		'num_rue'=>$_POST['nouveau_num_rue'],
		'adresse'=>$_POST['nouvelle_adresse'],
		'ville'=>$_POST['nouvelle_ville'],
		'region'=>$_POST['nouvelle_region'],
		'code_postal'=>$_POST['nouveau_code_postal'],
		'id_utilisateur'=>$_SESSION['id_utilisateur']
		));
	$req->closeCursor();
}



header('location:../compte/mon_compte.php');
?>