<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <style rel="stylesheet" type="text/css" href="css/css_footer/style_nous_contacter.css"></style>
	<title>Nous contacter</title>
</head>
<body>

  <fieldset class="cadre_nous_contacter">

    <h1>Nous contacter</h1>
    <p>Sur cette page vous pouvez si vous le désirez intéragir avec nous, vous pouvez également nous faire parvenir vos impressions, vos remarques, vos suggestions ou encore nous renseigner sur les problèmes que vous avez pu rencontrer au cours de votre navigation sur le site.</p>
    <p>Toute remarque est la bienvenue, et nous nous engageons à lire vos messages, à corriger sous les plus brefs délais les problèmes du site, et nous sommes à l'écoute pour toute amélioration du site.</p>

    Nous sommes à votre écoute!
      <form id="contact" method="post" action="traitement_nous_contacter.php">
        <fieldset><legend>Vos coordonnées</legend>
          <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" required/></p>
          <p><label for="email">Email :</label><input type="text" id="email" name="email" size='30'required/></p>
        </fieldset>
       
        <fieldset><legend>Votre message :</legend>
          <p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" required/></p>
          <p><label for="message">Message :</label></br><textarea id="message" name="message" tabindex="4" cols="50" rows="10" required></textarea></p>
        </fieldset>
      <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le message !" /></div>
    </form>
  </fieldset>
      

</body>
</html>