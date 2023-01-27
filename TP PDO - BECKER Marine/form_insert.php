<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire insertion de jeux</title>
</head>

<body>
    <?php
    include 'nav.php';
    ?>
    <br>
    <h1>Insertion d'un nouveau jeu</h1>
    <br><br>

    <form action="insert.php" method="POST">
        <label for="nom">Nom : </label>
        <input type="text" name="nom">
        <br>
        <label for="console">Nom de la console : </label>
        <input type="text" name="console">
        <br>
        <input type="submit" value="OK" name="OK">
    </form>

</body>

</html>