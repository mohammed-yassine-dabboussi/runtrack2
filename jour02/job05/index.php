<head>
    <meta charset="UTF-8">
    <title>jour 2 job05</title>
</head>

<html>
<body>

    <?php 
        for($i=1; $i<=1000; $i++){
            for($j=2; $j<$i; $j++){
                if ($i % $j === 0){
                    break;
                }
                else if($j === $i-1){
                    echo "$i<br>";
                }
            }
        }
    ?>
    
</body>
</html>