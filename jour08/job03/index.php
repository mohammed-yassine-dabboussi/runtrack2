<?php

session_start();


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 8 job 03</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prenom" />
        <input type="submit" value="ENVOYER"><br><br>
        <label for="reset">Remettre le compteur à zéro :</label>
        <input type="submit" value="reset" name="reset">
    </form>
        
        <?php
        if (isset($_POST['prenom'])) {
            $_SESSION['user'][]= $_POST['prenom'];
        }
        var_dump($_SESSION);
        foreach ($_SESSION as $key => $value) {
            echo $value;
        }
          
        if (isset($_POST['reset'])) {
        $_SESSION['user'] = "";
        }

        ?>


</body>
</html>
    