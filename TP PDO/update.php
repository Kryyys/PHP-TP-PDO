<?php
include 'connexion.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$console = $_POST['console'];

$statement = $pdo->prepare(
"UPDATE `mes_jeux` SET `nom`=:n, `console`=:c WHERE id= $id;");

$statement->bindParam(':n', $nom, PDO::PARAM_STR);
$statement->bindParam(':c', $console, PDO::PARAM_STR);
$result = $statement->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un jeu </title>
</head>
<body>

<p>Le jeu a été modifié avec succès !</p>
<br>
<a href="form_update.php">Retour</a> <br>';

</body>
</html>
