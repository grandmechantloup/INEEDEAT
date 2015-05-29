<?php
$destinataire = 'simongatty3@gmail.com';
$message_envoye = "Votre message à bien été envoyé !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer.";
$message_erreur_formulaire = "Vous devez d'abord <a href=\"nous_contacter.php\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
$nom=$_SESSION['Pseudo']
if (!isset($_POST['envoi']))
{
	// formulaire non envoyé
	echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
}
else
{
	/*
	 * cette fonction sert à nettoyer et enregistrer un texte
	 */
	function Rec($text)
	{
		$text = htmlspecialchars(trim($text), ENT_QUOTES);
		if (1 === get_magic_quotes_gpc())
		{
			$text = stripslashes($text);
		}
 
		$text = nl2br($text);
		return $text;
	};
 
	/*
	 * Cette fonction sert à vérifier la syntaxe d'un email
	 */
	function IsEmail($email)
	{
		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
		return (($value === 0) || ($value === false)) ? false : true;
	}
 
	// formulaire envoyé, on récupère tous les champs.
	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
	$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
	$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
 
	// On va vérifier les variables et l'email ...
	$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
 
	if (($email != '') && ($objet != '') && ($message != ''))
	{
		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();
	
		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.','.$email;
		}
		else
		{
			$cible = $destinataire;
		};
 
		// Envoi du mail
		if (mail($cible, $objet, $message, $headers))
		{
			echo '<p>'.$message_envoye.'</p>'."\n";
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>'."\n";
		};
	}
	else
	{
		// une des 3 variables (ou plus) est vide ...
		echo '<p>'.$message_formulaire_invalide.' <a href="nous_contacter.php">Retour au formulaire</a></p>'."\n";
	};
}; // fin du if (!isset($_POST['envoi']))
?>