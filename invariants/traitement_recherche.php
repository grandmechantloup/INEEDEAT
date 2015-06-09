<?php
session_start();
?>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
	<title> traitement barre de recherche </title>
</head>
<body>
<?php
include("../bdd/connexion.php");
$req = $bdd->prepare('SELECT a.Date_publication, a.Titre, c.Categorie, v.variete, a.Prix, a.Quantite, a.id_annonce, a.Extension_upload
					  FROM annonces a
					  INNER JOIN categorie c
					  ON c.id_categorie=a.id_categorie
					  INNER JOIN varietes v
					  ON v.id_variete=a.id_variete  
					  WHERE a.Titre LIKE ? OR a.Texte LIKE ? OR c.Categorie LIKE ?');
$req -> execute(array('%'.$_POST['recherche'].'%','%'.$_POST['recherche'].'%','%'.$_POST['recherche'].'%'));
while($donnees = $req->fetch()){


$nom_image = "../images/images_annonces".$donnees['id_annonce'].".".$donnees['Extension_upload'];

include("produit_simple.php");
} ?>

