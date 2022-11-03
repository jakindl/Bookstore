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
    <title><?=$book['title'];?></title>
</head>
<body>
    
    <h1><?=$book['title'];?></h1>

    <form action="edit.php" method="post">
        <input type="hidden" name="book-id" value="<?=$id;?>">
        <input type="submit" name="delete" value="Muuda">
    </form>

</body>
</html>