<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
	<title>achat</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../css/style.css" />
</head>
<body class="page">
<?php include("../invariants/header.php");?>
<?php require("../bdd/connexion.php"); ?>
<?php $reponse=$bdd->prepare('SELECT a.Titre, a.Prix, a.Quantite, u.Pseudo, a.id_annonce	
								  FROM annonces a
								  INNER JOIN utilisateurs u
								  ON u.id_utilisateur=a.id_utilisateur
								  WHERE id_annonce=?');
	$reponse->execute(array($_GET['id_annonce']));
	$donnees=$reponse->fetch();
	?>
	<section class="produit_detail">
		<h1 class="titre_annonce"> 
				<?php echo $donnees['Titre']; ?>
		</h1>
		<article class="info_produit_detail">

			<p class="info_prod">
				<strong>Vendeur</strong> : <span class="vendeur"><?php echo $donnees['Pseudo']; ?></span>
			</p>
			<p class="info_prod">
				<strong>prix</strong> : <span class="prix"><?php echo $donnees['Prix']; ?> €/Kg </span><br/>
			</p>
			<p class="info_prod">
				<strong>Quantité restante</strong> : <span class="quantite"> <?php echo $donnees['Quantite']; ?>Kg </span><br/>
			</p>
						
		</article>

		
			
			<?php
			$req=$bdd->prepare('SELECT Echange FROM annonces WHERE id_annonce=?');
			$req->execute(array($_GET['id_annonce']));
			$donnees=$req->fetch();
		
			if($donnees1['Echange']==1){
				
			}
			?>
<form name="formulaire_achat" id="formulaire_achat"  method="post" action="../achat/confirmation_achat.php?id_annonce=<?php echo $donnees['id_annonce'];?>">
			<article class="achat_formulaire">
				<p>
				<label for="Quantite"> Choisissez la quantité désirée (kg) :</label> <input type="Int" name="Quantite" id="Quantite" 
				required />
				</p>
			<p> <input type="submit" value="Valider" class="bouton_valider"/> </p>
		    <article>
</form>		
		<?php $reponse->closeCursor();?>
	
	<?php include("../invariants/footer.php");?>

<?if(empty($_POST['Quantite']))
{
    header('location: ../achat/achat.php');
}
	else
	{
		max ($donnees['Quantite'],$_POST['Quantite']);
		if ($_POST['Quantite']>$donnees['Quantite'])
		{
			echo "La quantité choisie est supérieur à la quantité proposée";
		}
			else
			{
				header('location: ../achat/achat.php');
			}	
	}

?>	
</body>	
</html>