<html>
    <head>
        <meta charset="UTF-8">
        <title>jour 7 job 4</title>
    </head>
<body>
    
    <form action="" method="get">
        <table >
            <tr>
                <td>str= </td>
                <td><input type="text" name="str" /></td>
                <td>
                <select name="option" id="opSelect">
                <option value="gras" selected>gras</option>
                <option value="cesar">cesar</option>
                <option value="plateforme">plateforme</option>
                </select>
                </td>
                <td>décalage= </td>
                <td><input type="text" name="decalage" /></td>
                <td><input type="submit" value="OK"></td>
                
            </tr>
    </table>
    </form>
    
    <?php

    function gras($str){
        $str2 = "";
        
        if ($str[0] === "A" || $str[0] === "B" || $str[0] === "C" ||
            $str[0] === "D" || $str[0] === "E" || $str[0] === "F" ||
            $str[0] === "G" || $str[0] === "H" || $str[0] === "I" ||
            $str[0] === "J" || $str[0] === "K" || $str[0] === "L" ||
            $str[0] === "M" || $str[0] === "N" || $str[0] === "O" ||
            $str[0] === "P" || $str[0] === "Q" || $str[0] === "R" ||
            $str[0] === "S" || $str[0] === "T" || $str[0] === "U" ||
            $str[0] === "V" || $str[0] === "W" || $str[0] === "X" ||
            $str[0] === "Y" || $str[0] === "Z" ){

            $str2 = "<b>" . $str;
        }else {
            $str2= $str;
        }


        return $str2;
    }

    function cesar($str, $decalage){
        $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $str2 = "" ;
        for ($i = 0; isset($str[$i]); $i++){
            for ($j = 0; isset($str[$j]); $j++){
                $x=0;
                if($str[$i] === $str[$j]){
                    $x = $i + $decalage;
                    $str2 = $str2 . $alphabet[$x];
                    break;
                }
            }
        }
        return $str2;
    }

    function plateforme($str){
        $str2 = "";
        $n = 0 ;
        for ($i = 0; isset($str[$i]); $i++){
            $n++;
        }    
        
        if ($str[$n - 2] === "m" && $str[$n - 1] === "e") {
            $str2= $str . "_";
        }else {
            $str2= $str;
            }
          
        return $str2;
    }


    if(isset($_GET["str"]) && isset($_GET["option"]) ){
        $str= $_GET['str'];
        $option= $_GET['option'];
        $decalage = $_GET['decalage'];

        if ($_GET['option'] === "gras"){
            echo gras($str);
        }else if ($_GET['option'] === "cesar"){
        echo  cesar($str, $decalage);
        }elseif($_GET['option'] === "plateforme"){
            echo plateforme($str);
        }

    }
    ?>

</body>
</html>