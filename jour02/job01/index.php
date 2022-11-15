<?php 
    //Parcourir les nombres compris entre 0 et 1337
    for ($i = 1; $i <= 1336; $i++) {
        
        //condition sur le nombre 42
        if ($i === 42) {
            echo "<b><u> $i </u></b>";//affichage en gras et souligné du nombre
            echo "<br>" ;//retour à la lingne
        } else {
            echo $i ; 
            echo "<br>" ;
        }
    }
?>