<?php
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 4 Job 6//   
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>jour 4 job 1</title>
    </head>
<body>
    
    <form action="" method="get">
        <table >
            <tr>
                <td>Largeur</td>
                <td><input type="largeur" name="largeur" /></td>
            </tr>
            <tr>
                <td>Hauteur</td>
                <td><input type="hauteur" name="hauteur" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="OK"></td>
            </tr>
            
    </table>
    </form>
    <pre><?php // pre  pour que tout les caractères aient la même taille 
        if (isset($_GET['hauteur']) != "" && isset($_GET['largeur'])){ 
            $hauteur = intval($_GET['hauteur']);
            $largeur = intval($_GET['largeur']);
            $hauteurToit = $hauteur ; 
            $droite = intval ($largeur / 2) + 1;
            $gauche = intval ($largeur / 2)  ;
            

            // // Toit du maison
            // for ($i=0; $i < $hauteur ; $i++){
            //     for ($j=0; $j <$largeur +1; $j++){
            //         if ($j === $gauche){
            //             echo "/";
            //         }if ($j === $droite){
            //             echo "\\";
            //         }elseif($j > $gauche && $j < $droite-1){
            //             echo "_";
            //         }else if ($j < $gauche || $j > $droite){
            //             echo "&nbsp;";
            //         }
            //     }
            // $gauche--;
            // $droite++;
            // echo "<br>";
            // }

            for ($i = 0; $i < $largeur/2 ; $i++){ 
                for ($j = $largeur/2; $j > $i; $j--){
                    echo "&nbsp;";
                }
                echo "/"; 
                for ($x = 0; $x < $i; $x++){
                    echo "_";
                    echo "_";
                }
                echo "\\";
                echo "<br>";
            } 
            
            //bas du maison 
             for ($i=0; $i < $hauteurToit -1  ; $i++){
                 for ($j=1; $j < $largeur + 2; $j++){
                     if ($j == 2 || $j == $largeur+1  ){
                         echo "|";
                     }else if ($i != $hauteurToit){
                         echo "&nbsp";
                     }
                 }
             echo "<br>"; 
             }
             echo "&nbsp";
            for ($j=0; $j < $largeur ; $j++){
                
                if ($j == 0 || $j == $largeur-1){
                    echo "|";
                }else {
                    echo "_";
                }
            }             
        }

        
    ?></pre>

</body>
</html>