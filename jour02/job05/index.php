<?php 
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 2 Job 05
        for($i=1; $i<=1000; $i++){
            for($j=2; $j<$i; $j++){
                if ($i % $j === 0){
                    break;
                }
                else if($j === $i-1){
                    echo "$i<br>";
                }
            }
        }
?>
