<?php session_start();
include("../bdd/connexion.php");
$reponse=$bdd->prepare('SELECT a.Titre, a.Prix, a.Quantite, u.Pseudo, a.id_annonce	
								  FROM annonces a
								  INNER JOIN utilisateurs u
								  ON u.id_utilisateur=a.id_utilisateur
								  WHERE id_annonce=?');
	$reponse->execute(array($_GET['id_annonce']));
	$donnees=$reponse->fetch();

$reponse->closeCursor();


if (isset($_POST['valider']))
     { 
     		$req = $bdd->prepare('SELECT Email FROM Utilisateurs WHERE id_utilisateur = '.$donnees['id_utilisateur'].'');
     		$req->bindParam(":Pseudo",$pseudo,PDO::PARAM_STR);
   			$req->execute();
   			$donnees1=$req->fetch();

$reponse->closeCursor(); 
			
			$req = $bdd->prepare('SELECT Email, Pseudo FROM Utilisateurs WHERE id_utilisateur = '.$_SESSION['id_utilisateur'].'');
     		$req->bindParam($_SESSION['id_utilisateur'],$id_utilisateur,PDO::PARAM_STR);
   			$req->execute();
   			$donnees2=$req->fetch();

$reponse->closeCursor();
 			

$email = $donnees1['Email'];
$message_envoye = "Un mail a été envoyé à".$donnees['Pseudo']."\n";
$email_expediteur = $donnees2['Email'];
$message_non_envoye = "Il y a eu un problème lors de la validation de l'achat";

		$objet = "Commande I need eat";
		$message = "Bonjour cher membre, merci pour votre confiance, vous avez un client pour votre annonce" .$donnees['Titre'].", voici les informations concernant l'acheteur :\n";
				   "Pseudo :" .$donnees2['Pseudo']."\n";
		           "Quantité désirée :".$donnees['Mdp']."\n";
		           "Prix a payer par l'acheteur :".$donnees['Mdp']."\n";

		$headers  = 'From:'.$email_expediteur. "\r\n"; 
		
		 
				$message = str_replace("&#039;","'",$message);
				$message = str_replace("&#8217;","'",$message);
				$message = str_replace("&quot;",'"',$message);
				$message = str_replace('&lt;br&gt;','',$message);
				$message = str_replace('&lt;br /&gt;','',$message);
				$message = str_replace("&lt;","&lt;",$message);
				$message = str_replace("&gt;","&gt;",$message);
				$message = str_replace("&amp;","&",$message);
		
		
	    		if(mail($email, $objet, $message, $headers))
				   {
				   echo '<p>'.$message_envoye.'</p>';
				   }
				else
				   {
				   echo '<p>'.$message_non_envoye.'</p>';
				   }
		}		
		else
		{
          echo '<p>'.$email_eronne.'</p>';
		}		   
	 