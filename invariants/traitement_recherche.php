<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css" />
	<title> traitement barre de recherche </title>
</head>
<body class="page">
<?php
include("../invariants/header.php");
include("../bdd/connexion.php");
$req = $bdd->prepare('SELECT v.Variete, a.Date_publication,a.Titre, a.Prix, a.Quantite,a.id_annonce, a.Extension_upload, c.Categorie FROM annonces a
					  INNER JOIN categorie c
					  ON c.id_categorie=a.id_categorie
					  INNER JOIN varietes v
					  ON v.id_variete=a.id_variete  WHERE a.Titre LIKE ? OR v.variete LIKE ? OR c.categorie LIKE ?');
$req -> execute(array('%'.$_POST['recherche'].'%','%'.$_POST['recherche'].'%','%'.$_POST['recherche'].'%'));


while($donnees = $req->fetch()){

include("../annonces/produit_simple.php");

} 
 ?>
 </body>
</html>

