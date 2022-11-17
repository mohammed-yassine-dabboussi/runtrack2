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
                <td>Nombre</td>
                <td><input type="text" name="nombre" /></td>
                <td><input type="submit" value="OK"></td>
                
            </tr>
    </table>
    </form>
    <?php
        if (isset($_GET['nombre'])){
            if ($_GET['nombre'] % 2 === 0){
                echo "Nombre pair";
            } else {
                echo "Nombre impair";
            }
        }
    ?>

</body>
</html>