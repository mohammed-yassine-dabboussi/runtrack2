<?php
    if (isset($_COOKIE['nbvisites'])) {
        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, time() + 180*24*3600);
    }
    else {
        setcookie('nbvisites', '1', time() + 365*24*3600);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job 2</title>
</head>
<body>

    <form action="" method="post">
        <br>
        <br>
        <label for="reset">Remettre le compteur à zéro :</label><br>
        <input type='submit' value='reset' name='reset'>
        <br>
        <br>
    </form>

    <?php
    if (isset($_POST['reset'])) {
        setcookie('nbvisites', '1', time() -3600);
        setcookie('nbvisites', '1', time() + 180*24*3600);
        $_COOKIE['nbvisites'] = 1;
    }
    echo "Vous avez visité cette page " . $_COOKIE['nbvisites'] . " fois";
    ?>
</body>
</html>