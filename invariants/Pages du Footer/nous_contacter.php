<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../css/style_nous_contacter.css" />
	<title>Nous contacter</title>
</head>
<body>
<<?php include("header.php") ?>>
<h1>Nous contacter</h1>
<p>Sur cette page vous pourrez si vous le désirez intéragir avec nous, vous pouvez nous faire parvenir vos impressions, vos remarques, vos suggestions ou encore de nous renseigner sur les problèmes que vous avez pu rencontrer au cours de votre navigation sur le site.</p>
<p>Toute remarque est la bienvenue, et nous nous engageons à lire vos messages, à corriger sous les plus brefs délais les problèmes du site, et nous sommes à l'écoute pour toute amélioration du site.</p>


<form method="post" action="traitement_nous_contacter.php">
   <p>
       <label for="contact">
       Nous sommes à votre écoute!
       </label>
       <br />
       
       <textarea name="contact" id="contact" rows="20" cols="100">
       
       </textarea>       
   </p>
</form>

<input type="submit" value="Envoyer" />
<<?php include("footer.php") ?>>
</body>
</html>