<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<title> I NEED EAT </title>
	</head>
<body class="page">	
	<?php include("../invariants/header.php"); ?>
<p>
	<a href="../annonces/fruits.php">
	<img src="../images/images_site/fruits.jpg" alt="fruits" title="fruits" id="fruits" />
	</a>
	<a href="../annonces/legumes.php">
	<img src="../images/images_site/legumes.jpg" alt="legumes" title="legumes" id="legumes" href="../annonces/legumes.php"/>
	</a>

</p>	
	<?php include("../invariants/footer.php"); ?>
<?php $heure= date("H");
 $time=$heure+1;
 ?>
  <img src="../images/images_site/soleil.png" alt="soleil" title="soleil" id="<?php echo 'soleil'.$time; ?>"/>
  <img src="../images/images_site/lune.psd" alt="lune" title="lune" id="<?php echo 'soleil'.$time; ?>"/>
</body>	
</html>