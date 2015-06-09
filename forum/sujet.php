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
	require("../bdd/connexion.php");
	include("../invariants/header.php");

	$req=$bdd->prepare('SELECT titre, description, date_publication FROM forum WHERE id_sujet=?');
	$req->execute(array($_GET['id_sujet']));
	$donnees=$req->fetch(); ?>
	<section class"recapitulatif_forum">
		<article class="titre_sujet_detaile">

			<?php
			echo $donnees['titre']; ?></br>
		</article>
		<article class="description_sujet_detaille">
			<?php
			echo $donnees['description']; ?></br>
		</article>
	</section>
	<section class="ajout_commentaire">
		<form method="POST" action="traitement_commentaire.php">
			<textarea class="commenter" name="commenter"  ></textarea>
			<input type="submit" name="valider" value="Commenter">
			<input type="hidden" name="id_sujet" value=<?php echo $_GET['id_sujet']?>>
			<input type="hidden" name="id_utilisateur" value=<?php echo $_SESSION['id_utilisateur']?>>
		</form>
	</section>

	<section class="ensemble_commentaire">
		<?php
		$req=$bdd->prepare('SELECT commentaire, date_publication FROM commentaires WHERE id_sujet=?');
		$req->execute(array($_GET['id_sujet']));
		$reponse=$bdd->query('SELECT Pseudo FROM commentaires c INNER JOIN utilisateurs u WHERE c.id_utilisateur=u.id_utilisateur');

		while($donnees=$req->fetch())
		{ 
				?>
			<section class="un_commentaire">
				<?php $pseudo=$reponse->fetch();?> 
				<aside class="pseudo"> <?php
					echo $pseudo['Pseudo'];?> 
				</aside>
				<article class="commentaires"> 
					<?php echo $donnees['commentaire'];?> 
				</article> 
				<aside class="date_publication"> 
					<?php echo $donnees['date_publication'];?> 
				</aside> </br> 
			</section>
			<?php 
		} ?>
	</section>
	<?php 	include("../invariants/footer.php"); ?>
</body>
</html>
