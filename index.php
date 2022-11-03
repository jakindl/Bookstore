<?php

require_once('connection.php');

$stmt = $pdo->query('SELECT * FROM books WHERE is_deleted = 0');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raamatupood</title>
</head>
<body>

    <nav>
        <a href="add_author.php">Lisa autor</a>
    </nav>

    <main>
    <?php
    while ($row = $stmt->fetch())
    {
        $id = $row['id'];
        $title = $row['title'];

        echo "<a href='book.php?id={$id}'>{$title}</a><br>";
    }
    ?>
    </main>

</body>
</html>