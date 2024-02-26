<?php


// var_dump($_POST)

// PARAGRAFO UTENTE
$user_paragraph = $_POST['paragraph'];

// LUNGHEZZA PARAGRAFO
$user_paragraph_lenght = strlen($user_paragraph);

// CENSURA BADWORD
$user_badword = $_POST ['badword'];

// SOSTITUZIONE PAROLA CENSURATA
$censored_paragraph = str_replace('$user_badword','***',$user_paragraph);

$censored_paragraph_lenght = strlen($censored_paragraph)

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

    <hr>

    <h4>Censored Paragraph:</h4>
    <p>
        <?= $censored_paragraph ?>
    </p>

    <h4>Censored Paragraph lenght:</h4>
    <p>
        <?= strlen($censored_paragraph_lenght)  ?>
    </p>
</body>
</html>