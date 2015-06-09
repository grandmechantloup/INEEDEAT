<?php session_start(); ?>
<!DOCTYPE>
<html>
<head>
	<title>confirmation achat</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="../css/style.css" />
</head>
<body class="page">
<?php include("../invariants/header.php");

if ($_POST['quantite_voulu']>$_POST['quantite_actuelle'])
	{
			header('location: ../achat/achat.php?id_annonce='.$_GET['id_annonce'].'&a=La quantite demande est superieur à la quantite actuelle');
	}
else
{
?>	
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
		</p>
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
				<strong>Quantité choisie</strong> : <span class="quantite"> <?php echo $_POST['quantite_voulu'];?>Kg </span><br/>
			</p>
			<p class="info_prod">
			<?php $Montant=$_POST['quantite_voulu']*$donnees['Prix'];?>
				<strong>Prix à payer</strong> : <span class="quantite"> <?php echo $Montant;?>€ </span><br/>
			</p>				
		</article>

			<p> <a href="../achat/traitement_achat.php?id_annonce=<?php echo $donnees['id_annonce'];?>&amp;Montant=<?php echo $Montant;?>&amp;Quantite=<?php echo $_POST['quantite_voulu'];?>"> <input type="button" value="Valider" class="bouton_valider"/> </a> </p>
		
		<?php $reponse->closeCursor();

	 include("../invariants/footer.php");
	}
	?>
</body>
</html>	
	