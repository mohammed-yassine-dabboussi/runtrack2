<html>
    <head>
        <meta charset="UTF-8">
        <title>jour 7 job 4 </title>
    </head>
<body>
    
    <form action="" method="get">
        <table >
            <tr>
                <td>a= </td>
                <td><input type="text" name="a" /></td>
                <td>
                <select name="operation" id="opSelect">
                <option value="+" selected>+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
                </select>
                </td>
                <td>b= </td>
                <td><input type="text" name="b" /></td>
                <td><input type="submit" value="OK"></td>
                
            </tr>
    </table>
    </form>
    
    <?php

    function calcul($a, $operation, $b){
        $resultat = 0 ;
        
        // if ($operation === "+"){
        //     $resultat = $a + $b;
    
        // }else if ($operation === "-"){
        //     $resultat = $a - $b;
            
        // }else if ($operation === "*"){
        //     $resultat = $a * $b;
            
        // }else if ($operation === "/"){
        //     $resultat = $a / $b;
            
        // }else if ($operation === "%"){
        //     $resultat = $a % $b;
            
        // }
        
        
         switch ($operation) {
             case "+":
                 $resultat = $a + $b;
                 break;
             case "-":
                 $resultat = $a - $b;
                 break;
             case "*":
                 $resultat = $a * $b;
                 break;
             case "/":
                 $resultat = $a / $b;
                 break;
             case "%":
                 $resultat = $a % $b;
                 break;
         }

        return $resultat;
        
    }
    if(isset($_GET["a"]) && isset($_GET["operation"]) && isset($_GET["b"])){
        $a= $_GET['a'];
        $b= $_GET['b'];
        $operation= $_GET['operation'];
        echo "le resultat est " . calcul($a, $operation, $b);
    }
    ?>

</body>
</html>