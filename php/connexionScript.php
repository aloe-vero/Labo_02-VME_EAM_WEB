<?php

$conn = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
require "Controllers/UtilisateurController.php";

$uc = new UtilisateurController($conn);

$courriel = $_POST['email'];
$password = $_POST['mdp'];



$utilisateur = $uc->getUtilisateurByCourriel($courriel);

if(password_verify($password, $utilisateur['password'])){
header('Location: Views/espaceUtilisateur.php?id='.$utilisateur['id']);}
else{
    echo "You Are Not The Father";
}

