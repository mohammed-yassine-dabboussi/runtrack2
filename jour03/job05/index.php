<?php
$str= "On n'est pas le meilleur quand on le croit mais quand on le sait.";
$voyelles= ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];
$dic = [
    "consonnes" => 0,
    "voyelles" => 0,
];
$i=0;
while ($str[$i] != '.'){
        for($j = 0; $j < 12; $j++){
            if ($str[$i] === $voyelles[$j] ){ 
                $dic["voyelles"]++;
                break;
            } else if ($j==11 AND $str[$i]!=" " AND $str[$i]!="." AND $str[$i]!="'" AND $str[$i]!=","){
                $dic["consonnes"]++;
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