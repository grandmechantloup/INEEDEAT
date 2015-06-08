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
		<a href="../offres/fruits.php"><img src="../images/images_site/fruits.jpg" alt="fruits" title="fruits" id="fruits"/>	</a>	 
		<a href="../offres/legumes.php"><img src="../images/images_site/legumes.jpg" alt="legumes" title="legumes" id="legumes"/> </a>
	</p>
	<?php include("../invariants/footer.php"); ?>
	<?php $heure= date("H");
	$time=$heure+10;
	if($heure>=9 AND $heure<=20)
	{
		?>
		<img src="../images/images_site/soleil.png" alt="soleil" title="soleil" id="<?php echo 'soleil'.$time; ?>"/>
		<?php
	}
	else
	{
		?>
		<img src="../images/images_site/lune.png" alt="lune" title="lune" id="<?php echo 'lune'.$time; ?>"/>
		<?php
	}
	?>
</body>	
</html>