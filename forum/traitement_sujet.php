<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
	<title>Forum</title>
	<link rel="stylesheet" href="../css/style_final.css" />
	<meta charset="utf-8"/>
</head>
<body>
<?php echo $_POST['id_sujet'];
echo $_SESSION['id_utilisateur'];
?>
</body>
</html>