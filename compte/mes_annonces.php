<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mes Annonces</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset = "utf-8"/>
</head>
<body class="page">
	<?php 
	if(isset($_SESSION['id_utilisateur']))
	{
		include("../invariants/header.php"); ?>	
		<nav class="nav_compte">
		<ul>
			<li><a href="../compte/mon_compte.php">Information du compte</a></li>
			<li><a href="../compte/modifier_info_compte.php">Modifier Pseudo, mot de passe, email</a></li>
			<li><a href="../compte/mes_annonces.php">Mes annonces</a></li>
			<li><a href="#">Mes achats</a></li>
		</ul>
		</nav>
		<div class="mes_annonces">
			<article class="ventes_en_cours">
				<strong><h1>Ventes en cours</h1></strong>
				<?php
				include("../bdd/connexion.php");
				$reponse=$bdd->prepare('SELECT a.Titre, c.Categorie, v.Variete, a.Prix, a.Quantite, a.Date_publication, a.id_annonce, a.Extension_upload
										FROM annonces a
										INNER JOIN categorie c
										ON c.id_categorie=a.id_categorie
										INNER JOIN varietes v
										ON v.id_variete=a.id_variete 
										WHERE a.id_utilisateur = ? 
										ORDER BY id_annonce DESC');
				$reponse->execute(array($_SESSION['id_utilisateur']));
				while ($donnees=$reponse->fetch())
				{
					if($donnees['Quantite']!=0)
					{
						include("../annonces/produit_simple.php");
						?>
						<a href="../suppression/supprimer.php?annonce=<?php echo $donnees['id_annonce']?>"><input type="button" value="Supprimer"/></a>
						<?php
					}
				}
				$reponse->closeCursor();
				?>
			</article>
			<article class="ventes_terminees">	
				<strong><h1>Vente terminées</h1></strong>
				<?php
				$reponse=$bdd->prepare('SELECT a.Titre, c.Categorie, v.Variete, a.Prix, a.Quantite, a.Date_publication, a.id_annonce, a.Extension_upload
										FROM annonces a
										INNER JOIN categorie c
										ON c.id_categorie=a.id_categorie
										INNER JOIN varietes v
										ON v.id_variete=a.id_variete
										WHERE a.id_utilisateur = ? 
										ORDER BY id_annonce DESC');
				$reponse->execute(array($_SESSION['id_utilisateur']));
				while ($donnees = $reponse->fetch())
				{
					if($donnees['Quantite']==0)
					{
						include("../annonces/produit_simple.php");
						?>
						<a href="../suppression/supprimer.php?annonce=<?php echo $donnees['id_annonce'];?>, variete=<?php echo $donnees['id_variete'];?>"><input type="button" value="Supprimer"/></a>
						<?php
					}
				}
				$reponse->closeCursor();
				?>
			</article>
		</div>
	<?php
	}
else
{
	echo 'Vous devez être inscrit pour accéder à cette page';
	include("../formulaires/inscription.php");
}

	include("../invariants/footer.php");
	?>	


</body>
</html>
