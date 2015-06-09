<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../css/style.css" />
	<title>Signaler un abus</title>
</head>
<body>
<?php include("../invariants/header.php") ?>
<div class="signaler_abus">
<h1>Signaler un abus</h1>
<h2>Sur cette page vous pouvez signaler un abus, il s'agit de rapporter à l'administration du site, un comportement maladroit et/ou innapropprié.</h2>


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
</div>
<?php include ("footer.php") ?>
</body>
</html>