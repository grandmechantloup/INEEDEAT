<?php include("../bdd/connexion.php"); ?>
<?php if(empty($_POST['Email']) OR empty($_POST['Pseudo']) OR empty($_POST['Mdp']) OR empty($_POST['Verif_Mdp'])){
header('location: ../formulaires/inscription.php');?>
<script type="text/javascript">
function changeBackgroundColor(elemnt)
{
   if (elemnt) {  
       elemnt.style.backgroundColor = "red";
   }
   return;
}
 
function verification()
{
 var mess = '';


 if(document.formulaire.Email.value == "") {
   mess+="Veuillez entrer votre email!\n";
   changeBackgroundColor(document.formulaire.email);
   document.formulaire.email.focus();
  }
  
 var model_email = /^[^@]+@[^\.]+\.[^\.]+$/;
 if( ! model_email.test(document.formulaire.Email.value) ) {
   mess+="Veuillez entrer une email correcte !\n";
   changeBackgroundColor(document.formulaire.Email);
   document.formulaire.Email.focus();
  }

 if(document.formulaire.Pseudo.value == "") {
   mess+="Veuillez entrer votre pseudo!\n";
   changeBackgroundColor(document.formulaire.pseudo);
   document.formulaire.pseudo.focus();
  }
 
 if(document.formulaire.Mdp.value == "") {
   mess+="Veuillez entrer votre mot de passe!\n";
   changeBackgroundColor(document.formulaire.Mdp);
   document.formulaire.Mdp.focus();
  }
 if(document.formulaire.Verif_Mdp.value == "") {
   mess+="Veuillez entrer votre confirmation de mot de passe!\n";
   changeBackgroundColor(document.formulaire.Verif_Mdp);
   document.formulaire.Verif_Mdp.focus();
  }
  if(document.formulaire.Mdp.value != document.formulaire.Verif_Mdp.value) {
    mess += "Le mot de passe et la confirmation ne sont pas identiques !";
   changeBackgroundColor(document.formulaire.Verif_Mdp);
   document.formulaire.Verif_Mdp.focus();
  }
 
    if(mess!='')
    {
        alert(mess);
        return false;
    }
}
</script>
<?php
}
else 
{
    $req = $bdd->prepare('INSERT INTO `Utilisateurs` (`Pseudo`, `Nom`, `Prenom`, `Civilite`, `Naissance`, `Mdp`, `Tel`, `Email`, `Region`, `Ville`, `Code_postal`, `Adresse`) VALUES (:Pseudo, :Nom, :Prenom, :Civilite, :Naissance, :Mdp, :Tel, :Email, :Region, :Ville, :Code_postal, :Adresse)');
$req->execute(array(
    
    'Pseudo' => $_POST['Pseudo'],
    'Nom' => $_POST['Nom'],
    'Prenom' => $_POST['Prenom'],
    'Civilite' => $_POST['Civilite'],
    'Naissance' => $_POST ['Naissance'],
    'Mdp' => md5($_POST['Mdp']),
    'Tel' => $_POST['Tel'],
    'Email' => $_POST['Email'],
    'Region' => $_POST['Region'],
    'Ville' => $_POST['Ville'],
    'Code_postal' => $_POST['Code_postal'],
    'Adresse' => $_POST['Adresse'],
    ));
header('location: ../accueil/accueil.php');
}

?>		


