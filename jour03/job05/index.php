<?php
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 3 Job 5// 

    $str= "On n'est pas le meilleur quand on le croit mais quand on le sait.";
    $voyelles= ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y']; // tableau contient toutes les voyelles en majuscules et en miniscules 
    $dic = [
        "consonnes" => 0,
        "voyelles" => 0,
    ];
    $i=0; // initialiser le compteur
    while ($str[$i] != '.'){ // arrêter la boucle quand il y'a un point à la fin de la phrase
            for($j = 0; isset($voyelles[$j]); $j++){ // parcourir le tableau des voyelles pour comparer avec la chaine de caractère str
                if ($str[$i] === $voyelles[$j] ){  
                    $dic["voyelles"]++; //incrémenter le nombre de voyelles
                    break;
                } else if ($j==11 AND $str[$i]!=" " AND $str[$i]!="." AND $str[$i]!="'" AND $str[$i]!=","){
                    $dic["consonnes"]++;//incrémenter le nombre des consonnes
                }
            }
        $i++;
    }

?>

<!--html-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>jour 3 job05</title>
</head>
<body>
    
    <table border : 1px >
        <tr><th>Consonnes</th><th>Voyelles</th></tr>
        <tr>
            <td>
                <?php 
                    echo $dic["consonnes"];
                ?>
            </td>
            
            <td>
                <?php 
                    echo $dic["voyelles"];
                ?>
            </td>
        </tr>
    </table>


</body>
</html>