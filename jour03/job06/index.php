<?php
    //Mohammed Yassine Dabboussi Runtrack 2 jour 03 job 06
    $str = "Les choses que l'on possède finissent par nous posséder";
    $str2 = "";

    $xa = 0 ;

    for ( $i = 0 ; isset($str[$i]); $i++){
        $xa++;
    }

    for ($i = $xa-1 ; $i >= 0 ; $i--){
        $str2 = $str2 . $str[$i];
    }

    echo $str2;
?>