<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
	<title>Forum</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<meta charset="utf-8"/>
</head>
<body class="page">
	<?php 
	include("../invariants/header.php");
	require("../bdd/connexion.php");
	if(!isset($_GET['categorie']))
	{
		?></br></br>
		<section class="categorie_forum">
			<a href="../forum/forum.php?categorie=recette_cuisine">
			<article class="Recette_cuisine">
				recette cuisine
			</article></br>
			</a>
			<a href="../forum/forum.php?categorie=caverne_astuce">
			<article class="caverne_astuce">
				Le caverne des astuces
			</article></br>
			</a>
			<a href="../forum/forum.php?categorie=sante_fitness">
			<article class="sante_fitness">
				Vivre en pleine santé
			</article></br>
			</a>
			<a href="../forum/forum.php?categorie=coin_blague">
			<article class="coin_blague">
				Le coin des blagues
			</article>
			</a>
		</section>
		<?php
	}
	if(isset($_GET['categorie']))
	{
		?>
		<section class="ajout_sujet">
			<p>
				<strong>Créer un nouveau topic :</strong>
			</p>
			<form method="POST" action="traitement_forum.php">
				<article class="titre_topic">
					<input type="texte" name="titre_topic" size="50" placeholder="titre" required />
				</article></br>
				<article class="texte_topic">
					<textarea rows="6" cols="52" name="texte_topic" placeholder="Taper votre texte" required></textarea> 
				</article></br>
				<aside class="topic_valider">
					<input type="submit" name="valider"/>
				</aside>
				<input type="hidden" name="categorie" value=<?php echo $_GET['categorie']; ?>>
			</form>
		</section>
		<?php
		$req=$bdd->prepare('SELECT titre, id_sujet, date_publication FROM forum WHERE categorie=?');
		$req->execute(array($_GET['categorie']));
		?>
		<section class="ensemble_sujet">
		
		<?php
		while($donnees=$req->fetch())
		{
			?>
			<section class="un_sujet">
			<a href="../forum/sujet.php?id_sujet=<?php echo $donnees['id_sujet']?>">
			<article  class="titre_sujet"> <?php
				echo $donnees['titre']; ?> </br>
			</article> 
			<aside class="date_publication_sujet"> <?php
				echo $donnees['date_publication']; ?> 
			</aside>
			</a>
			</section>
			</br>
			<?php
		} ?>
		</section>
		<?php 
	}
	include("../invariants/footer.php");
	?>
</body>
</html>
