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
    $pdo->exec($query);
}

// Recupération
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();

// Impression en html 
echo "<ul>";
foreach ($friends AS $friend) 
{
    echo '<li>';
    echo $friend['firstname'] . ' ' . $friend['lastname'];
    echo '</li>';
}
echo "</ul>";

// Security
$statement->bindValue(':firstname', '$firstname', \PDO::PARAM_STR);
$statement->bindValue(':lastname', '$lastname', \PDO::PARAM_STR);

// Redirection 


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
