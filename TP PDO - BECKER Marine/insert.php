<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion d'un jeu</title>
</head>

<body>

    <?php

    // --- Pour ajouter un jeu dans la bdd
    // $nom = 'Hyrule Warriors';
    // $console = 'switch';
    // $sql = "INSERT INTO `mes_jeux` ( `nom`, `console` )
    // VALUES (' ". $nom . " ', ' ". $console . "' );";
    // //echo $sql . "<br>";
    // $statement = $pdo->query($sql);


    // --- REQUETE PREPAREE
    // $nom = 'Skyrim';
    // $console = 'ps4';
    // // Préparation
    // $statement = $pdo->prepare(
    // "INSERT INTO `mes_jeux`(nom, console)
    // VALUES (:n, :c);");
    // // Correspondre les valeurs
    // $statement->bindParam(':n', $nom, PDO::PARAM_STR);
    // $statement->bindParam(':c', $console, PDO::PARAM_STR);
    // $result = $statement->execute();
    // var_dump($result);


    // Recupérer  l'id du dernier insert dans la table (attention où le placer dans le code)
    // echo $pdo->lastInsertId();


    include_once 'connexion.php';

    $nom = filter_input(INPUT_POST, 'nom');
    $console = filter_input(INPUT_POST, 'console');


    $sql = " INSERT INTO mes_jeux ( nom, console ) VALUES ( :nom, :console )";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
    $statement->bindParam(':console', $console, PDO::PARAM_STR);
    $statement->execute();

    echo "Le jeu n°" . $pdo->lastInsertId() . " a été enregistré avec succès.<br/>";

    ?>

    <br>

    <a href="index.php">Retour à l'accueil</a>


</body>

</html>