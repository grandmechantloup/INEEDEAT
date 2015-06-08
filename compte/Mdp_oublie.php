<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css"></link>
	<title>Mot de passe oublié</title>
	</head>
		<body class="page">	
			<?php include("../invariants/header.php"); ?>
			<fieldset class="mdp_oublie">
 <form id="mdp_oublie" method="post" action="traitement_mdp_oublie.php">
        
<p><label for="Email">Votre Email :</label><input type="text" id="Email" name="Email" size='30'required/></p>
<div style="text-align:center;"><input type="submit" name="envoi" value="Récupération du mot de passe" /></div>
</form>
  			</fieldset>
  			<?php include("../invariants/footer.php"); ?>
  		</body>
</html>