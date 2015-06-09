<?php
include("../bdd/connexion.php");
$email = ($_POST['Email']);
$message_envoye = "Nous vous envoyons un message contenant votre mot de passe";
$message_non_envoye = "La récupération du mot de passe a échouée";
$email_eronne = "L'adresse entrèe n'est pas valide";
$ineedeat = "simongatty3@gmail.com";
function Generer_mdp()
{
	$mdp="";
	$possible="123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
	$taille_mdp=61;
	for($i=0; $i<=7; $i++)
	{
		$caractere = substr($possible, mt_rand(0, $taille_mdp-1), 1);
		$mdp .= $caractere;
	}
	echo $mdp;
}

if (isset($_POST['envoi']))
     { 
     	if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
        {
     		$req = $bdd->prepare('SELECT Mdp, Pseudo FROM Utilisateurs WHERE Email = :Email');
     		$req->bindParam(":Email",$email,PDO::PARAM_STR);
   			$req->execute();
   			$donnees=$req->fetch();

		$objet = "I need eat mot de passe oublié";
		$message = "Bonjour cher membre voici vos informations :\n";
				   "Votre pseudo :" .$donnees['Pseudo']."\n" .
		           "Votre mot de passe :"Generer_mdp()"\n";
		$headers  = 'From:'.$ineedeat. "\r\n"; 
		
		 
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
	 }
?>