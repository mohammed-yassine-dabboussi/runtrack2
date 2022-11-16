<?php
    //Mohammed Yassine Dabboussi Jour 3 Job 3// 

    $str= "I'm sorry Dave I'm afraid I can't do that.";
    $voyelles= ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];
    $i= 0;// initialiser le compteur
    while ($str[$i] != '.'){// arrêter la boucle quand il y'a un point à la fin de la phrase
        for($j = 0; isset($voyelles[$j]); $j++){ //Parcourir le tableau des voyelles
            if ($str[$i] === $voyelles[$j] ){ //Comparer les éléments de la liste avec les éléments du tableau des voyelles
                echo $str[$i]; // afficher les voyelles 
            }
        }
        $i++;
    }
?>