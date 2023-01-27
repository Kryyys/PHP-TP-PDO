<?php

include 'connexion.php';
include 'nav.php';

// Récupération du paramètre GET
$id = filter_input(INPUT_GET, "id");

$sql = "SELECT * FROM `mes_jeux` WHERE id = " . $id;
$statement = $pdo->prepare($sql);
$statement->execute();

// Récupère le résultat
$result = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $result['nom'] ?> </title>
</head>

<body>

    <br>
    <br>
    <p>Le jeu numéro : <?= $id ?> </p>
    <p>Nom : <?= $result['nom'] ?> </p>
    <p>Sur console : <?= $result['console'] ?></p>
    <br>
    <a href="index.php">Retour</a>

</body>

</html>

<!-- 
POUR QUE CELA MARCHE, IL FAUT MODIFIER L'URL DIRECTEMENT
http://localhost/exercices/TP%20PDO/showOne.php?id=3 -->