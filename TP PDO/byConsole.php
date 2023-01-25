<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PDO</title>
</head>
<body>
    
<?php include_once 'nav.php'; ?>

<br><br>

<h1><?php 

$page = $_GET['console'];
if ($page =='all') {
    echo "Tous les jeux";
} if ($page  == "ps4") {
    echo "Tous les jeux PS4";
} if ($page == "xbox_serie") {
    echo "Tous les jeux Xbox";
} if ($page == "switch") {
    echo "Tous les jeux Switch";
};
?></h1>

<br><br>


<?php

include 'connexion.php';

session_start();

// Affiche les informations stockées dans la session
echo 'Utilisateur : ' . $_SESSION['user_name'];

$statementAll = $pdo->query("SELECT * FROM mes_jeux ORDER BY nom ASC");
$resultAll = $statementAll->fetchAll(PDO::FETCH_ASSOC);

$statementPs = $pdo->query("SELECT * FROM mes_jeux WHERE console = 'ps4' ORDER BY nom ASC");
$resultPs = $statementPs->fetchAll(PDO::FETCH_ASSOC);

$statementXbox = $pdo->query("SELECT * FROM mes_jeux WHERE console = 'xbox serie' ORDER BY nom ASC");
$resultXbox = $statementXbox->fetchAll(PDO::FETCH_ASSOC);

$statementSwitch = $pdo->query("SELECT * FROM mes_jeux WHERE console = 'switch' ORDER BY nom ASC");
$resultSwitch = $statementSwitch->fetchAll(PDO::FETCH_ASSOC);


// FAIRE UNE BOUCLE

if ($page =='all') {
    foreach ($resultAll as $element) {
        echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
        echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br> <br>';
    };
} if ($page  == "ps4") {
    foreach ($resultPs as $element) {
        echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
        echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br> <br>';
    };;
} if ($page == "xbox_serie") {
    foreach ($resultXbox as $element) {
        echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
        echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br> <br>';
    };;
} if ($page == "switch") {
    foreach ($resultSwitch as $element) {
        echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
        echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br> <br>';
    };;
};


// foreach ($resultPS as $element) {
//     echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
//     echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br> <br>';
// };

// foreach ($resultXbox as $element) {
//     echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
//     echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br> <br>';
// };

// foreach ($resultSwitch as $element) {
//     echo $element['nom'] . " jouable sur la console " . $element['console'] . "<br>";
//     echo '- <a href="showOne.php?id=' . $element['id'] . '">Voir ce jeu en détail</a> <br> <br>';
// };
