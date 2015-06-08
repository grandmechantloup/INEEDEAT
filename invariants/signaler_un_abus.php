<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../css/style_signaler_un_abus.css" />
	<title>Signaler un abus</title>
</head>
<body>
<<?php include("header.php") ?>

<h2>Signaler un abus</h2>
<h1>Sur cette page vous pouvez signaler un abus, il s'agit de rapporter à l'administration du site, un comportement maladroit et/ou innapropprié.</h1>


<p>Cette démarche vous permet de garder votre identité secrête.</p>



<form method="post" action="traitement_signaler_un_abus.php">
    <p>
        <label>Pseudo de la personne </label> : <input type="text" name="pseudo" />
    </p>
</form>


<form method="post" action="traitement_signaler_un_abus.php">
   <p>
       <label for="abus">
       Ecrire içi, le comportement qui vous paraît inadéquate de cet utilisateur, le Webmaster traitera rapidement votre demande. 
       </label>
       <br />
       
       <textarea name="abus" id="abus" rows="20" cols="70">
       
       </textarea>       
   </p>
</form>


<input type="submit" value="Envoyer" />

<<?php include ("footer.php") ?>
</body>
</html>