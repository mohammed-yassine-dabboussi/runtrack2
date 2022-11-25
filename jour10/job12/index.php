<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$request = $mysqli -> query("SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-12-31'
");

// echo "afichage fetch all <br>";
// $result_fetch_all = $request -> fetch_all();
// var_dump($result_fetch_all);

//  echo "affichage fetch array <br>";
//  $result_fetch_array = $request -> fetch_array();
//  var_dump($result_fetch_array);

//   echo"affichage fetch assoc <br>";
//   $result_fetch_assoc = $request -> fetch_assoc();
//   var_dump($result_fetch_assoc);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jour 10 job 12</title>
        
</head>

<body>
    <h1> Jour 10 Job 12 </h1>
    <table border : solid>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while(($result = $request -> fetch_array()) != null)
                    {
                        echo "<tr>";
                        echo "<td>".$result['prenom']."</td>";
                        echo "<td>".$result['nom']."</td>";
                        echo "<td>".$result['naissance']."</td>";
                        echo "</tr>";
                    }
                ?>
    </table>
<?php $mysqli->close(); ?>
</body>

</html>