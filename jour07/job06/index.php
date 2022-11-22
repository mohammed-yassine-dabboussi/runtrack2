<html>
    <head>
        <meta charset="UTF-8">
        <title>jour 7 job 6 </title>
    </head>
<body>
    
    <form action="" method="get">
        <table >
            <tr>
                <td>str= </td>
                <td><input type="text" name="str" /></td>
                <td><input type="submit" value="OK"></td>
                
            </tr>
    </table>
    </form>
    
    <?php

    function letSpeak($str){
        $str2="";
        for ($i = 0; isset($str[$i]); $i++){
            if ($str[$i] === "A" || $str[$i] === "a"){
                $str2 = $str2 . "4";
            }else if ($str[$i] === "B" || $str[$i] === "b"){
                $str2 = $str2 . "8";
            }else if ($str[$i] === "E" || $str[$i] === "e"){
                $str2 = $str2 . "3";
            }else if ($str[$i] === "G" || $str[$i] === "g"){
                $str2 = $str2 . "6";
            }else if ($str[$i] === "L" || $str[$i] === "l"){
                $str2 = $str2 . "1";
            }else if ($str[$i] === "S" || $str[$i] === "s"){
                $str2 = $str2 . "5";
            }else if ($str[$i] === "T" || $str[$i] === "t"){
                $str2 = $str2 . "7";
            }else {
                $str2 = $str2 . $str[$i];
            }
        
        }
        
        return $str2;
    }
    if(isset($_GET["str"])){
        $str= $_GET['str'];

        echo letSpeak($str);
    }
    ?>

</body>
</html>