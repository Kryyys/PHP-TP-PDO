<?php

include 'connexion.php';
include 'nav.php';

// Récupération du paramètre GET
$id = $_GET['id'];

$statement = $pdo->query("SELECT * FROM `mes_jeux` WHERE id = " . $id);

// Récupère le résultat
$result = $statement->fetch(PDO::FETCH_ASSOC);

// Affichage
echo 'Mon jeu numéro : '. $result['id'] . "<br>";
echo 'Nom : ' . $result['nom'] . "<br>";
echo 'Sur console : '. $result['console'] . "<br>";

// POUR QUE CELA MARCHE, IL FAUT MODIFIER L'URL DIRECTEMENT
// http://localhost/exercices/TP%20PDO/showOne.php?id=3
