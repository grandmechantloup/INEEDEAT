<!DOCTYPE html>
<html>
	<head>

			<meta charset="utf-8" />
				<link rel="stylesheet" href="../css/style_formulaire.css" />
		<title>Formualire d'inscription</title>
		       
		
	</head>

	<body>
		
		<h1>
			Formulaire d'inscription
		<h1>

		<h2>Pour accéder à l'ensemble des fonctionnalités du site, veuillez remplir ce formulaire, aucune informations ne sera publiés sans votre accord.</h2>


			<form name="formulaire" id="formulaire"  method="post" action="../formulaires/traitement_inscription.php" onsubmit="return verif()">
		<fieldset class="compte_formulaire">

			<legend>Compte</legend>
			 
			<p>
			<label for="Email"> Votre adresse email(*)</label> : <input type="email" name="Email" id="Email" placeholder="Ex: mon_adresse_mail@ineedeat.fr" size="30" 
			value="<?php if(isset($_POST['Email'])) echo $_POST['Email'];?>" required /></p>
			<p>
                  
			<label for="Pseudo"> Votre pseudo(*)</label> : <input type="text" name="Pseudo" id="Pseudo" placeholder="Ex: user3432" size="30" 
			value="<?php if (isset($_POST['Pseudo'])) echo $_POST['Pseudo'];?>" required/></p>
			<p>
			
			<label for="M_d_P"> Votre mot de passe(*):<label>
			<input type="password" name="M_d_P" id="M_d_P" placeholder="upZcuMu9@"size="30" 
			value="<?php if (isset($_POST['M_d_P'])) echo $_POST['M_d_P'];?>" required/></p>
			<p>
			
			<label for="Verif_M_d_P"> Vérification de votre mot de passe(*):<label>
			<input type="password" name="Verif_M_d_P" id="Verif_M_d_P" placeholder="upZcuMu9@"size="30" 
			value="<?php if (isset($_POST['Verif_M_d_P'])) echo $_POST['Verif_M_d_P'];?>" required/></p>


		</fieldset>
		
		<fieldset class="informations_formulaire">
			
			<legend>Vos coordonees</legend>
			  
			<p>
				<label for="Civilite"> Civilite:</label><br />
				<select name="Civilite" id="Civilite">
					<option value="Monsieur">Monsieur</option>
					<option value="Madame">Madame</option>
				</select>
			</p>
			<p>
				<label for="Nom"> Votre nom</label> : <input type="text" name="Nom" id="Nom" placeholder="Ex: Dubois" size="30" value="<?php if (isset($_POST['Nom'])) echo $_POST['Nom'];?>"/></p>
			<p>
				<label for="Prenom"> Votre prenom</label> : <input type="text" name="Prenom" id="prenom" placeholder="Ex: Alexandre" size="30" value="<?php if (isset($_POST['Prenom'])) echo $_POST['Prenom'];?>"/></p>
			<p>
				<label for="Region"> Votre region</label> : <input type="text" name="Region" id="Region" placeholder="Ex: Bretagne" size="30" value="<?php if (isset($_POST['Region'])) echo $_POST['Region'];?>" /></p>
			<p>
				<label for="Adresse"> Votre adresse</label> : <input type="text" name="Adresse" id="Adresse" placeholder="Ex: 5 avenue du general de Gaulle" size="30" value="<?php if (isset($_POST['Adresse'])) echo $_POST['Adresse'];?>"/></p>
			<p>
				<label for="C_P"> Votre code postal</label> : <input type="number" name="C_P" id="C_P" placeholder="Ex: 84200" size="8" value="<?php if (isset($_POST['C_P'])) echo $_POST['C_P'];?>"/></p>
			<p>
				<label for="Ville"> Votre ville</label> : <input type="text" name="Ville" id="Ville" placeholder="Ex: Paris" size="30" value="<?php if (isset($_POST['Ville'])) echo $_POST['Ville'];?>"/></p>
			<p>
				<label for="N_d_T"> Votre telephone</label> : <input type="tel" name="N_d_T" id="N_d_T" placeholder="Ex: 06 18 75 79 26" size="17" value="<?php if (isset($_POST['N_d_T'])) echo $_POST['N_d_T'];?>"/></p>
			<p>
				<label for="D_d_N"> Votre date de naissance</label> : <input type="date" name="D_d_N" id="D_d_N" placeholder="Ex: 1978/10/23" size="15" value="<?php if (isset($_POST['D_d_N'])) echo $_POST['D_d_N'];?>"/></p>
		</fieldset>

	
		<h4>(*) Ces champs sont obligatoires pour valider l'inscription.</h4>
	
		  
   			<p class="J_accepte_les_CGU">
       			<br />
       				<input type="checkbox" name="CGU" id="CGU" required/> 	<label for="CGU">J'accepte les conditions généralles d'utilisation </label>
       			<br />
  			</p>
  			<input type="submit" value="Valider" href="../formulaires/traitement_inscription.php" />

		</form>
		</body>

</html>