<?php
    //Mohammed Yassine Dabboussi Runtrack 2 jour 03 job 07

    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    
    // Méthode 1
    echo "Methode 1 <br/>";
    for ($i = 1 ; isset($str[$i]); $i++){
        echo $str [$i];
    }
    echo $str[0];

    // Méthode 2 
    echo "<br/> Methode 2 <br/>";
    $str2 = "";
    $x = 0;
    for ($i = 1 ; isset($str[$i]); $i++){
        $x ++ ;
    }

    for ($i = 1 ; isset($str[$i]); $i++){
        $str2 = $str2 . $str[$i];
    }
    $str2 = $str2 . $str[0];
    echo $str2;
?>