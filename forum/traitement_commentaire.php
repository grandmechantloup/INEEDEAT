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

$req=$bdd->prepare('INSERT INTO commentaires (commentaire, date_publication,id_sujet, id_utilisateur) VALUES (:commentaire,NOW(), :id_sujet, :id_utilisateur)');
	$req->execute(array(
		'commentaire'=> $_POST['commenter'],
		'id_sujet'=> $_POST['id_sujet'],
		'id_utilisateur'=> $_POST['id_utilisateur']
		));
header('location:http://localhost/INEEDEAT/forum/sujet.php?id_sujet='.$_POST['id_sujet']);
?>
</body>
</html>