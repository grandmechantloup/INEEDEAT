<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style_annonce.css" />
	<title> Ajouter une annonce </title>
</head>

<body>
    <form method="post" action="traitement_annonce.php" enctype="multipart/form-data" >
<fieldset class="informations_annonce">
<h3> Ajouter une nouvelle annonce </h3> 

<p>

Type : <select name="Type" required>
    <option value="Fruit">Fruit</option>
    <option value="Legume">Legume</option>
	</select> </br></br>
Catégorie : <input type="text" name="categorie" placeholder="Tomate,Banane,.." required/> </br></br>
Variété :   <input type="text" name="variété" placeholder="Coeur de boeuf,Cavendish,.." required/> </br></br> 
Region : <select name="Region" required>
    <option value="Alsace">Alsace</option>
    <option value="Aquitaine">Aquitaine</option>
    <option value="Auvergne">Auvergne</option>
    <option value="Basse Normandie">Basse Normandie</option>
    <option value="Bourgogne">Bourgogne</option>
    <option value="Bretagne">Bretagne</option>
    <option value="Centre">Centre</option>
    <option value="Champagne-Ardenne">Champagne-Ardenne</option>
    <option value="Corse">Corse</option>
    <option value="Franche-Comté">Franche-Comté</option>
    <option value="Haute Normandie">Haute Normandie</option>
    <option value="Ile-de-France">Ile-de-France</option>
    <option value="Languedoc-Roussillon">Languedoc-Roussillon</option>
    <option value="Limousin">Limousin</option>
    <option value="Lorraine">Lorraine</option>
    <option value="Midi-Pyrénées">Midi-Pyrénées</option>
    <option value="Nord-Pas-de-Calais">Nord-Pas-de-Calais</option>
    <option value="Pays de la Loire">Pays de la Loire</option>
    <option value="Picardie">Picardie</option>
    <option value="Poitou-Charentes">Poitou-Charentes</option>
    <option value="Provence-Alpes-Côte-d'Azur">Provence-Alpes-Côte-d'Azur</option>
    <option value=">Rhône-Alpes">Rhône-Alpes</option>
  
	</select> </br></br>
Prix/kg : <input type="text" name="Prix" size="4" required/> €/kg  Quantité : <input type="text" name="Quantite" size="4" required/> kg </br> </br>
Titre de l'annonce : <input type="text" name="Titre" size="30"  required/> </br> </br>
Texte de l'annonce :</br> <TEXTAREA rows="10" cols="50" name="Descriptif" required></TEXTAREA> </br></br>
	 <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label></br>
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /> 
Valider ma nouvelle annonce <input type="submit" name="valider"/> 
     </fieldset>


</p>
</form>

</body>

</html>
