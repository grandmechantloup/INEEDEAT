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