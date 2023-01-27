<?php
include 'connexion.php';

$id = filter_input(INPUT_GET, 'id');

$statement = $pdo->prepare("DELETE FROM `mes_jeux` WHERE id= $id;");

$result = $statement->execute();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression d'un jeu</title>
</head>
<body>

<p>Le jeu a été supprimé avec succès !</p>

<br>

<a href="index.php">Retour</a>
    
</body>
</html>
