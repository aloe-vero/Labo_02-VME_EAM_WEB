<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleInscription.css?version=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php include 'partials/header.php'; ?>
        <div class="connexion">
            <p id="titre">CRÉER UN COMPTE</p>
            <form action="../registrationCompte.php" id="connexionForm" method="POST">
                <input id="prenom" name="prenom" type="text" placeholder="PRENOM">
                <br>
                <input id="nomDeFamille" name="nomDeFamille" type="text" placeholder="NOM DE FAMILLE">
                <br>
                <input id="email" name="email" type="text" placeholder="COURRIEL">
                <br>
                <input id="mdp" name="mdp" type="password" placeholder="MOT DE PASSE">
                <br>
                <input id="buttonInscription" type="submit" value="S'INSCRIRE">
            </form>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
</body>
</html>