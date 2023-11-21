<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once "nav.php";
    ?>

    <form method="post" action="trait_insert.php">
        <label>Saisir votre nom:</label><br>
        <input id="nom" type="text" name="nom" required><br>
        <label>Saisir votre prénom:</label><br>
        <input id="prenom" type="text" name="prenom" required><br>
        <label>Saisir votre age:</label><br>
        <input id="age" type="number" name="age" required><br>
        <label>Taper votre sexe:</label><br>
        <input type="radio" id="femme" name="sexe" value="Femme" checked>
        <label for="femme">Femme</label><br>
        <input type="radio" id="homme" name="sexe" value="Homme">
        <label for="homme">Homme</label><br>
        <label>Saisir votre tel:</label><br>
        <input id="tel" type="text" name="tel" required><br>
        <label>Saisir votre e-mail:</label><br>
        <input id="email" type="text" name="email" required><br>
        <input type="submit" name="submit" value="Enregistrer">
    </form>
    
</body>
</html>