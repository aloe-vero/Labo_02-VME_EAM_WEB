<?php
include "Database.php";
include "Controllers/UtilisateurController.php";
$db = Database::getInstance();
$conn = $db->getConnection();
$uc = new UtilisateurController($conn);

$prenom = $_POST['prenom'];
$nom = $_POST['nomDeFamille'];
$email = $_POST['email'];
$password = $_POST['mdp'];
$errors = [];


if(empty($prenom)){
    $errors['prenom'] = "Le prénom est obligatoire.";
}
if(empty($nom)){
    $errors['nom'] = "Le nom de famille est obligatoire.";
}
if(empty($email)){
    $errors['email'] = "L'adresse courriel est obligatoire.";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "L'adresse courriel n'est pas valide.";
} else if (count($uc->getUtilisateurByCourriel($email)) > 0){
    $errors['email'] = "L'adresse courriel existe déjà";
}
if(empty($password)){
    $errors['mdp'] = "Le mot de passe est obligatoire.";
}

if(!empty($errors)){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header("Location: /Labo_02-VME_EAM_WEB/inscription");
    exit();
}

//Si pas d'erreur on créer l'utilisateur
$uc ->createUtilisateur($nom, $prenom, $password, $email);

header("Location: /Labo_02-VME_EAM_WEB/connexion");
echo "toto";
