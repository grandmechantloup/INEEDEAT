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
			$donnees1=$req->fetch();
			?>

<form name="formulaire_achat" id="formulaire_achat"  method="post" action="../achat/confirmation_achat.php?id_annonce=<?php echo $donnees['id_annonce'];?>">
			<article class="achat_formulaire">
				<p>
				<label for="Quantite"> Choisissez la quantité désirée (kg) :</label> <input type="Int" name="quantite_voulu" id="Quantite" 
				required />
				</p>
				<input type="hidden" name="quantite_actuelle" value="<?php echo $donnees['Quantite']?>"/>
			<p> <input type="submit" value="Valider" class="bouton_valider"/> </p>
			<?php if(isset($_GET['a'])){
				echo $_GET['a'];
			} ?>
		    <article>
</form>		
		<?php $reponse->closeCursor();?>
	
	<?php include("../invariants/footer.php");?>


</body>	
</html>