<head>
    <meta charset="UTF-8">
    <title>jour 2 job04</title>
</head>

<html>
<body>

    <?php 
        //Parcourir les nombres entre 0 et 00 compris 
        for ($i = 1; $i <= 100; $i++) {
            
            if ($i %3 == 0 && $i % 5 == 0 ) {
                echo "FizzBuzz";
                echo "<br>" ;//retour à la lingne
            } else if ($i % 3 == 0 ) {
                echo "Fizz" ; 
                echo "<br>" ;
            } else if ($i % 5 == 0 ) {
                echo "Buzz" ; 
                echo "<br>" ;
            } else {
                echo $i ; 
                echo "<br>" ;
            }
            
        }
    ?>
    
</body>
</html>