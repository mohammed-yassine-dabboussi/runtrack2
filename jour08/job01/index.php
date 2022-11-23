<?php
session_start();
isset($_SESSION['nbvisites']) ? $_SESSION['nbvisites']++ : $_SESSION['nbvisites'] = 1;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job 01</title>
</head>
<body>
    <form action="" method="post">
        <label for="reset">Remettre le compteur à zéro :</label>
        <input type="submit" value="reset" name="reset">
    </form>
    <br>
    <br>
    <?php


    if (isset($_POST['reset'])) {
        $_SESSION['nbvisites'] = 1;
    }
    echo "Vous avez visité cette page ".$_SESSION['nbvisites']." fois";
    ?>