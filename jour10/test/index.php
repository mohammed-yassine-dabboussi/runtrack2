<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$request = $mysqli -> query("select * from etudiants");

// echo "afichage fetch all <br>";
// $result_fetch_all = $request -> fetch_all();
// var_dump($result_fetch_all);

echo "affichage fetch array <br>";
$result_fetch_array = $request -> fetch_array();
var_dump($result_fetch_array);
//  echo"affichage fetch assoc <br>";
//  $result_fetch_assoc = $request -> fetch_assoc();
//  var_dump($result_fetch_assoc);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01 jour 10</title>
        
</head>

<body>

</body>

</html>