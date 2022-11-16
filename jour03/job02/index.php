<?php
    //Mohammed Yassine Dabboussi Jour 3 Job 2// 

    $str= 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
    $i= 0; // initialiser le compteur à 0
    while ($str[$i] != '.'){ // arrêter la boucle quand il y'a un point à la fin de la phrase
        echo $str[$i]; 
        $i +=2 ; // incrémenter avec +2 pour afficher un caractère sur deux
    }
?>