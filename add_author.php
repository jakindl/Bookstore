<?php

if ( isset($_POST['add-author']) ) {

    require_once('connection.php');

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];

    $stmt = $pdo->prepare('INSERT INTO authors (first_name, last_name) VALUES (:first_name, :last_name)');
    $stmt->execute(['first_name' => $firstName, 'last_name' => $lastName]);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Autori lisamine</title>
</head>
<body>
    <h2>Lisa autor</h2>
    <form action="add_author.php" method="post">
        <input type="text" name="first-name" placeholder="Eesnimi">
        <br>
        <input type="text" name="last-name" placeholder="Perenimi">
        <br>
        <input type="submit" name="add-author" value="Lisa">
    </form>

</body>
</html>