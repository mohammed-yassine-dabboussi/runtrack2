<?php 
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 2 Job 04
        
        for ($i = 1; $i <= 100; $i++) {//Parcourir les nombres entre 0 et 00 compris 
            
            if ($i %3 == 0 && $i % 5 == 0 ) {
                echo "FizzBuzz";
                echo "<br>" ;//retour à la lingne
            } else if ($i % 3 == 0 ) {
                echo "Fizz" ; 
                echo "<br>" ;
            } else if ($i % 5 == 0 ) {
                echo "Buzz" ; 
                echo "<br>" ;
            } else {
                echo $i ; 
                echo "<br>" ;
            }
            
        }
?>
