<?php 
    //Parcourir les nombres entre 0 et 00 compris 
    for ($i = 0; $i <= 100; $i++) {    
        if ($i === 42) {
            echo "LaPlateforme_";
            echo "<br>" ;//retour à la lingne
        } else if ($i >= 0 && $i <= 20) {
            echo "<i> $i </i>" ; 
            echo "<br>" ;
        } else if ($i >= 25 && $i <= 50) {
            echo "<u> $i </u>" ; 
            echo "<br>" ;
        } else {
            echo $i ; 
            echo "<br>" ;
        }      
    }
?>