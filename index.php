<?php
// Connection
require_once('connect.php');
$pdo = new \PDO(DSN, USER, PASS);

// Injection SQL
if (isset($_POST['valide']))
{
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $query = "INSERT INTO friend (firstname, lastname) VALUES ('" . $firstname . "', '" . $lastname . "')";
    echo $query;
    $pdo->exec($query);
}

// Recupération
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();
$statement->bindValue(':lastname', $lastName, \PDO::PARAM_STR);
$statement->bindValue(':firstname', $firstName, \PDO::PARAM_STR);

// Redirection 
header('Location:succes.php');

// Test 
// var_dump($friends);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <label for="firstname">FirstName</label>
    <input type="text" id="firstname" name="firstname" require>
    <label for="lastname">LastName</label>
    <input type="text" id="lastname" name="lastname" require>
    <button type="submit" name="valide">Valide ici !</button>
</form>
</body>
</html>
