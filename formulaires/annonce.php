<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css" />
	<title> Ajouter une annonce </title>
  
</head>
<body class="page">	
<?php include("../invariants/header.php"); ?>
    <form method="POST" action="traitement_annonce.php" enctype="multipart/form-data" >
<fieldset class="informations_annonce">
<h3> Ajouter une nouvelle annonce </h3> 
<p>
<?php 
include("../bdd/connexion.php");
?>
Categorie : <select name="Categorie">
<?php
$req=$bdd->query('SELECT Categorie FROM categorie');
while ($donnees=$req->fetch())
{
?>
<<<<<<< HEAD
    <option value="<?php echo $donnees['Categorie'];?>"><?php echo $donnees['Categorie']; ?></option>
=======
    <option name="<?php echo $donnees['Categorie'];?>"> <?php echo $donnees['Categorie']; ?> </option>
>>>>>>> origin/master
<?php
}
?>
</select> <br/><br/> 
Variété :   <input type="text" name="Variete" placeholder="Coeur de boeuf,Cavendish,.." /> <br/><br/> 
Date de peremption : <input type="date" name="Date_peremption" required /> <br/><br/>
Prix/kg : <input type="text" name="Prix" size="4" required/> €/kg  Quantité : <input type="text" name="Quantite" size="4" required/> kg <br/> <br/>
Acceptez vous l'échange ? <input type="radio" name="Echange" value="1" /> <label for="oui" > oui </label>
						  <input type="radio" name="Echange" value="0" /> <label for="non"> non </label> <br/> <br/>
Titre de l'annonce : <input type="text" name="Titre" size="30"  required/> <br/> <br/>
Texte de l'annonce :<br/> <TEXTAREA rows="10" cols="50" name="Description"></TEXTAREA> <br/><br/>
	 <label for="mon_fichier"> Ajouter une image :</label><br/>
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /> 
	 <input type="submit" name="valider"/> 

</fieldset>
</p>
</form>
<?php include("../invariants/footer.php"); ?>
</body>
</html>