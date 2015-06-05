<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style_annonce.css" />
	<title> Gestion administrateur </title>
  
</head>
<body>
<?php include("../invariants/header.php"); ?>
    <form method="POST" action="gestion_administrateur.php" >
<p>
Rechercher utilisateur : <input type="texte" name="recherche" />
</p>
</form>
<?php 
include("../bdd/connexion.php");

if(isset($_POST['recherche'])){
	$req = $bdd->prepare('SELECT Nom, Prenom, Pseudo, Email, Region, Ville, id_utilisateur FROM utilisateurs WHERE Pseudo LIKE ? ');
	$req -> execute(array($_POST['recherche']));
	while($donnees = $req->fetch()){
		echo $donnees['Pseudo'].' '.$donnees['Nom'].' '.$donnees['Prenom'].' '.$donnees['Email'].' '.$donnees['Region'].' '.$donnees['Ville']; ?> <a href="gestion_administrateur.php?id_utilisateur=<?php echo $donnees['id_utilisateur'] ?>"> <input type="button" value="Supprimer" /></a><br/><br/> <?php
	}	
}
echo "Liste des moderateurs :"; ?> <br/><br/> <?php
$req = $bdd->query('SELECT Nom, Prenom, Pseudo, Email, Region, Ville, id_utilisateur, status_cma FROM utilisateurs WHERE Status_cma LIKE 1 ');
while($donnees = $req->fetch()){
echo $donnees['Pseudo'].' '.$donnees['Nom'].' '.$donnees['Prenom'].' '.$donnees['Email'].' '.$donnees['Region'].' '.$donnees['Ville']; ?><a href="gestion_administrateur.php?id_utilisateur=<?php echo $donnees['id_utilisateur'] ?>"> <input type="button" value="Rétrograder" /></a><br/><br/> <?php
}
if(isset($_GET['id_utilisateur']) ){
	
	$req = $bdd->prepare('SELECT status_cma FROM utilisateurs WHERE id_utilisateur LIKE ? ');
	$req -> execute(array($_GET['id_utilisateur']));
	$donnees=$req->fetch();

	if($donnees['status_cma']==NULL  )
	{
	$req=$bdd->prepare('DELETE from utilisateurs WHERE id_utilisateur=?');
	$req->execute(array($_GET['id_utilisateur']));
}
else
{
	$req=$bdd->prepare('UPDATE utilisateurs SET status_cma=0 WHERE id_utilisateur=?');
	$req->execute(array($_GET['id_utilisateur']));
	
}
header('location:../compte/gestion_administrateur.php');
}
?>
</body>
</html>