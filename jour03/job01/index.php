<?php 
    $tableau= [ 200, 204, 173, 98, 171, 404, 459];
    //var_dump ($tableau) ;
    for($i = 0; $i < 7; $i++){
        if ($tableau[$i] % 2 == 0){
            echo $tableau[$i] .' est paire <br/>';
        } else if ($tableau[$i] % 2 != 0){
            echo $tableau[$i] .' est impaire <br/>';
        }
    }
        
?>