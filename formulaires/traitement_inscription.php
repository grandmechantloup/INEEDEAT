<?php 
include("../bdd/connexion.php"); 
$email = $_POST['Email'];
$pseudo = $_POST['Pseudo'];

if(empty($_POST['Email']) OR empty($_POST['Pseudo']) OR empty($_POST['Mdp']) OR empty($_POST['Verif_Mdp']))
{
    header('location: ../formulaires/inscription.php');
}
else
{
    if(isset($_POST['Verif_Mdp']) AND isset($_POST['Mdp']) AND $_POST['Verif_Mdp'] == $_POST['Mdp'])
    {
        if(preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
        {
             $query = $bdd->query("SELECT * FROM Utilisateurs WHERE Email='$email'");
             $num_row = $query->rowCount();
 
                if ($num_row == 1)
                {
                    header('location: ../formulaires/inscription.php');
                }
                else
                {    
                             $query = $bdd->query("SELECT * FROM Utilisateurs WHERE Pseudo='$pseudo'");
                             $num_row = $query->rowCount();
     
                    if ($num_row == 1)
                    {
                        header('location: ../formulaires/inscription.php');
                    }
                    else
                    {    


                         $req = $bdd->prepare('INSERT INTO `Utilisateurs` (`Pseudo`, `Nom`, `Prenom`, `Civilite`, `Naissance`, `Mdp`, `Tel`, `Email`, `Region`, `Ville`, `Code_postal`, `Adresse`) 
                                              VALUES (:Pseudo, :Nom, :Prenom, :Civilite, :Naissance, :Mdp, :Tel, :Email, :Region, :Ville, :Code_postal, :Adresse)');
                        $req->execute(array(
                        'Pseudo' => $_POST['Pseudo'],
                        'Nom' => $_POST['Nom'],
                        'Prenom' => $_POST['Prenom'],
                        'Civilite' => $_POST['Civilite'],
                        'Naissance' => $_POST ['Naissance'],
                        'Mdp' => $_POST['Mdp'],
                        'Tel' => $_POST['Tel'],
                        'Email' => $_POST['Email'],
                        'Region' => $_POST['Region'],
                        'Ville' => $_POST['Ville'],
                        'Code_postal' => $_POST['Code_postal'],
                        'Adresse' => $_POST['Adresse']));
                        header('location: ../accueil/accueil.php');
        }       }   }
        else
            {
                header('location: ../formulaires/inscription.php');
            }
    }
    else
        {
            header('location: ../formulaires/inscription.php');
        }
}
?>