<?php

// Instancie l'objet PDO
include 'connexion.php';

session_start();

// Stocke des informations dans la session
$_SESSION['user_id'] = 123;
$_SESSION['user_name'] = 'John Doe';
// CORRECTION DE L'ERREUR EN DEBUT DE TP : le try catch nous a permis d'avoir plus d'infos sur l'erreur (ici aucune database sélectionnée)
// try {
//     $statement = $pdo->query("SELECT * FROM `mes_jeux`");
//     $result = $statement->fetch();
//     $nom = $result[1];
//     var_dump($nom);
// } catch (PDOException $Exception) {
//     // Note The Typecast To An Integer!
//     var_dump($Exception);
// }


// Pour obtenir le nom du premier jeu (var_dump($nom))
// $nom = $result[1];

$statement = $pdo->query("SELECT * FROM `mes_jeux`");
$result = $statement->fetchAll(PDO::FETCH_ASSOC);


// var_dump($result);

// *** Quel mode permet d’obtenir un objet ?
// Le mode PDO::FETCH_OBJ permet a la méthode fetch de retourner une ligne du résultat de la requête SQL renvoyé par query().
// *** Quelle est la classe de cet objet ?
// La ligne de résultat de la requête sera renvoyé par query() en une instance de la classe stdClass.

// fetchAll() = fetch créera un tableau à une ligne seulement, alors que fetchAll créera un tableau contenant autant de lignes qu'il y a de réponses. 
// gettype($result) = c'est un array (tableau)
// Je pense qu'ici, il faut faire un fecthAll avec un FETCH_ASSOC pour avoir un tableau clair (avec toutes les lignes), et donc plus lisible.
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PDO</title>
</head>

<body>
    <main>
    <?php
    include 'nav.php';
    ?>


        <h1>Ma liste de jeux </h1>

        <?php
        foreach ($result as $element) {
            echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
            echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br>';
            echo '- <a href="form_update?id='.$element['id'].'">Modifier ce jeu</a> <br>';
            echo '- <a href="delete.php?id='.$element['id'].'">Supprimer ce jeu</a> <br>';
            echo '<br>';
        }; ?>

    </main>
</body>