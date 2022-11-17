<?php
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 4 Job 1//   
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

    <?php
    $nb_arg = 0 ;
    $_GET["prenom"]="";
    $_GET["nom"]="";
    $_GET["age"]="";
    $formulaires = [
        "prenom" => $_GET["prenom"],
        "nom" => $_GET["nom"],
        "age" => $_GET["age"],
    ];

    //var_dump ($formulaires);

    foreach($formulaires as $value){
        if ($value != ""){
            $nb_arg ++ ;
        }
    }
    
    echo "Le nombre d’argument GET envoyé est : " . $nb_arg ; 
    ?>

</body>
</html>