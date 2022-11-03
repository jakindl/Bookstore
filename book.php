<?php

require_once('connection.php');

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id=:id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

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

    <form action="delete.php" method="post">
        <input type="hidden" name="book-id" value="<?=$id;?>">
        <input type="submit" name="delete" value="Kustuta">
    </form>

</body>
</html>
