<?php function IsEmail($email)
    {
        $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
        return (($value === 0) || ($value === false)) ? false : true;
    }
?>    
<?php include("../bdd/connection.php"); ?>
<?php if(empty($_POST['Email']) OR empty($_POST['Pseudo']) OR empty($_POST['M_d_P']) OR empty($_POST['Verif_M_d_P'])){
header('location: ../formulaires/inscription.php');
}
else 
{
    $req = $bdd->prepare('INSERT INTO `Utilisateurs` (`Pseudo`, `Nom`, `Prenom`, `Civilite`, `D_d_N`, `M_d_P`, `N_d_T`, `Email`, `Region`, `Ville`, `C_P`, `Adresse`) VALUES (:Pseudo, :Nom, :Prenom, :Civilite, :D_d_N, :M_d_P, :N_d_T, :Email, :Region, :Ville, :C_P, :Adresse)');
$req->execute(array(
    'Nom' => $_POST['Nom'],
    'Prenom' => $_POST['Prenom'],
    'Email' => $_POST['Email'],
    'Region' => $_POST['Region'],
    'Ville' => $_POST['Ville'],
    'Adresse' => $_POST['Adresse'],
    'C_P' => $_POST['C_P'],
    'Pseudo' => $_POST['Pseudo'],
    'Civilite' => $_POST['Civilite'],
    'M_d_P' => $_POST['M_d_P'],
    'D_d_N' => $_POST ['D_d_N'],
    'N_d_T' => $_POST['N_d_T'],));
header('location: ../accueil/accueil.php');
}

?>		

