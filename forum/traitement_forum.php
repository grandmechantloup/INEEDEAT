<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
	<title>Forum</title>
	<link rel="stylesheet" href="../css/style_final.css" />
	<meta charset="utf-8"/>
</head>
<body>

<?php include("../bdd/connexion.php");

if(isset($_POST['titre_topic'])){
$req=$bdd->prepare('INSERT INTO forum (titre, description, date_publication ,categorie, id_utilisateur) VALUES (:titre, :description, NOW(),:categorie,:id_utilisateur)');
	$req->execute(array(
		'titre'=> $_POST['titre_topic'],
		'description'=> $_POST['texte_topic'],
		'categorie'=> $_POST['categorie'],
		'id_utilisateur'=> $_SESSION['id_utilisateur']
		));

header('location:http://localhost/INEEDEAT/forum/forum.php?categorie='.$_POST['categorie']);
}

?>
</body>
</html>
