<?php
include("../bdd/connexion.php");
$pseudo = ($_GET['pseudo']);
$email = ($_POST['Email']);
$mdp = ($_GET['Mdp']);
$message_envoye = "Nous vous envoyons un message contenant votre mot de passe";
$message_non_envoye = "La récupération du mot de passe a échouée";
$ineedeat = "patate@gmail.com";


if (isset($_POST['envoi']))
     {
     		$req = $bdd->prepare('SELECT Mdp, Pseudo FROM Utilisateurs WHERE Email = :Email');
			$req->execute(array(
   			'Email' => $email));
		
		$objet = "I need eat mot de passe oublié";
		$message = "Votre pseudo : " . $pseudo ."\n" .
		                  "Votre mot de passe : " . $mdp . "\n";
		$adresse_exp = "From: patate@gmail.com";
		
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
?>