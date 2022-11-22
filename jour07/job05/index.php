<html>
    <head>
        <meta charset="UTF-8">
        <title>jour 7 job 5</title>
    </head>
<body>
    
    <form action="" method="get">
        <table >
            <tr>
                <td>str= </td>
                <td><input type="text" name="str" /></td>
                <td>
                <select name="char" id="charSelect">
                <option value="a" selected>a</option>
                <option value="b">b</option>
                <option value="c">c</option>
                <option value="d">d</option>
                <option value="e">e</option>
                <option value="f">f</option>
                <option value="g">g</option>
                <option value="h">h</option>
                <option value="i">i</option>
                <option value="j">j</option>
                <option value="k">k</option>
                <option value="l">l</option>
                <option value="m">m</option>
                <option value="n">n</option>
                <option value="o">o</option>
                <option value="p">p</option>
                <option value="q">q</option>
                <option value="r">r</option>
                <option value="s">s</option>
                <option value="t">t</option>
                <option value="u">u</option>
                <option value="v">v</option>
                <option value="w">w</option>
                <option value="x">x</option>
                <option value="y">y</option>
                <option value="z">z</option>

                </select>
                </td>
                <td><input type="submit" value="OK"></td>
                
            </tr>
    </table>
    </form>
    
    <?php

    function occurences($str, $char){
        $occ=0;
        for ($i = 0; isset($str[$i]); $i++){
            if ($str[$i] === $char){
                $occ++;
            }
        }
        
        return $occ;
    }
    if(isset($_GET["str"]) && isset($_GET["char"])){
        $str= $_GET['str'];
        $char= $_GET['char'];

        echo "le nombre d'occurrences de " . $char . " dans " . $str . " est " . occurences($str, $char);
    }
    ?>

</body>
</html>