<?php


// var_dump($_POST)


$user_paragraph = $_POST['paragraph'];
$user_paragraph_lenght = strlen($user_paragraph);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Paragraph:</h4>
    <p>
        <?= $user_paragraph  ?>
    </p>

    <h4>Paragraph lenght:</h4>
    <p>
        <?= $user_paragraph_lenght  ?>
    </p>
</body>
</html>