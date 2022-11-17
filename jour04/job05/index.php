<?php
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 4 Job 5//   
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>jour 4 job 5</title>
    </head>
<body>
    
    <form action="" method="post">
        <table >
            <tr>
                <td>Username :   </td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>   </td>
                <td></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="OK"></td>
                
            </tr>
    </table>
    </form>

    <?php
        if (isset($_POST['username']) && isset($_POST['password'])){
            if ($_POST['username'] == "John" && $_POST['password'] == "Rambo"){
                echo "C'est pas ma guerre";
            } else {
                echo "Votre pire cauchemar";
            }
        }
    ?>

</body>
</html>