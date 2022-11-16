<?php
    //Mohammed Yassine Dabboussi Jour 3 Job 3// 

    $str= "I'm sorry Dave I'm afraid I can't do that.";
    $voyelles= ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];
    $i= 0;

    while ($str[$i] != '.'){
        for($j = 0; $j < 12; $j++){ //Parcourir le tableau des voyelles
            if ($str[$i] === $voyelles[$j] ){ //Comparer les éléments de la liste avec les éléments du tableau des voyelles
                echo $str[$i]; // afficher les voyelles 
            }
        }
        $i++;
    }
?>