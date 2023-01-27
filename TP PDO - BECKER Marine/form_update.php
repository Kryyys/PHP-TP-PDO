<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un jeu</title>
</head>

<body>

    <?php

    include_once 'connexion.php';
    include 'nav.php';

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $sql = "SELECT * FROM mes_jeux WHERE id = :id";

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id', $id, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    
    $nom = $result['nom'];
    $console = $result['console'];

    ?>


    <main>
        <form action="update.php" method="post">
            <h1>Modification du jeu n°<?= $id ?> : <?= $nom ?> sur <?= $console ?></h1>
            <input type="hidden" name="id" value="<?= $id ?>">

            <label for="nom">Nouveau nom : </label>
            <input type="text" name="nom" id="nom" value="<?= $nom ?>">
            <br>
            <label for="console">Nouvelle console : </label>
            <input type="text" name="console" id="console" value="<?= $console ?>">
            <br>
            <input type="submit" value="Modifier" name="OK">
        </form>
    </main>
</body>

</html>