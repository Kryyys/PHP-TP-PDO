<?php
include 'connexion.php';


$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nom = filter_input(INPUT_POST, 'nom');
$console = filter_input(INPUT_POST, 'console');

$sql = "UPDATE mes_jeux SET nom=:n, console=:c WHERE id= :id";

$statement = $pdo->prepare($sql);

$statement->bindParam(':id', $id, PDO::PARAM_STR);
$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console, PDO::PARAM_STR);

$statement->execute();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un jeu </title>
</head>
<body>

<p>Le jeu a été modifié avec succès !</p>
<br>
<a href="index.php">Retour</a> <br>

</body>
</html>
