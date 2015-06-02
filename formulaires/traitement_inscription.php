<?php include("../bdd/connexion.php"); ?>
<?php if(empty($_POST['Email']) OR empty($_POST['Pseudo']) OR empty($_POST['Mdp']) OR empty($_POST['Verif_Mdp'])){
header('location: ../formulaires/inscription.php');
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


