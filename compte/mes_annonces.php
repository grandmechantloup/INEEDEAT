<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mes Annonces</title>
	<meta charset = "utf-8"/>
</head>
<body>
	<?php 
	if(isset($_SESSION['pseudo']))
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
				$reponse=$bdd->prepare('SELECT * FROM annonces WHERE id_utilisateur = ? ORDER BY id_annonce DESC');
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
			<article class="vente_terminées">	
				<strong><h1>Vente terminées</h1></strong>
				<?php
				$reponse = $bdd->prepare('SELECT * FROM annonces WHERE id_utilisateur = ?');
				$reponse -> execute(array($_SESSION['id_utilisateur']));
				while ($donnees = $reponse->fetch())
				{
					if($donnees['Quantite']==0)
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
		</div>
	<?php
	}
else
{
	echo 'Vous devez être inscrit pour accéder à cette page';
	include("../formulaires/inscription.php");
}
	?>	
</body>
</html>
