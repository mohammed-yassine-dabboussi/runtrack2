<html>
    <!-- Mohammed Yassine Dabboussi Runtrack 2 Jour 4 Job 2-->

    <head>
        <meta charset="UTF-8">
        <title>jour 4 job 2</title>
    </head>

    <body>
        
        <form action="" method="post">
        <table >
            <tr>
                <td>Votre nom :   </td>
                <td><input type="text" name="nom" /></td>
            </tr>
            <tr>
                <td>   </td>
                <td></td>
            </tr>
            <tr>
                <td>Votre prenom :</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>Votre âge :</td>
                <td><input type="text" name="age" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="OK"></td>
                
            </tr>
        </table>
        </form>

        <br>
        
        <table border : 1 px >
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
           
    
                <?php 
                        foreach($_POST as $args => $value){
                            $long=0;
                            for($i = 0; isset($value[$i]); $i++){
                                $long++;
                            }
                            if ($long>0){ 
                            echo "<tr>";
                            echo "<td>".$args."</td>";
                            echo "<td>".$value."</td>";
                            echo "</tr>";
                            }
            
                        }
                    ?>  
         
        </table>

    </body>
</html>