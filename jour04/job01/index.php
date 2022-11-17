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
    <p>Votre nom : <input type="text" name="nom" /></p>
    <p>Votre prenom : <input type="text" name="prenom" /></p>
    <p>Votre âge : <input type="text" name="age" /></p>
    <p><input type="submit" value="OK"></p>
    </form>

    <?php
    $nb_arg = 0 ;

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