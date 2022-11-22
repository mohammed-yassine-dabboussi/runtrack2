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
                <td><input type="submit" value="OK"></td>
                
            </tr>
    </table>
    </form>
    
    <?php

    function gras($str){
        return "test";
    }

    function cesar($str, $decalage){
        return "test";
    }

    function plateforme($str){
        $mot = "";
        $str2 = "";
        
        for ($i = 0; isset($str[$i]); $i++){
            if ($str[$i] != " " && $str[$i] != "." && $str[$i] != ","){
                $mot = $mot . $str[$i];
            }

            // $n=0;
            // for ($j = 0; isset($mot[$j]); $j++){
            //     $n++;
            // }
            // if ($mot[n-1] === "m" && $mot[n] === "e" ){
            //     $str2 = $str2 . $mot . "_" ;
            // }else {
            //     $str2 = $str2 . $mot ;
            // }
            

            // $mot = "";
        }
        return $mot;
    }


    if(isset($_GET["str"]) && isset($_GET["option"]) ){
        $str= $_GET['str'];
        $option= $_GET['option'];
        $decalage= 0;

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