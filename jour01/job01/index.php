<?php
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 1 Job 01 
    $str = 'LaPlateforme';
    $str2 = 'Vive';
    $str3 = '!';
    $val = 6;
    $myBool = true;
?>

<!--html-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>jour 1 job01</title>
</head>
<body>
    <p><?php echo $str2 . ' ' . $str . ' ' . $str3; ?></p>
    <p>val =  <?php echo $val?></p>
    <p>val + 4 =<?php echo $val + 4?></p>
    <p>myBool = <?php echo $myBool ?></p>
    <?php $myBool = false; ?>
    <p>Nouvelle valeur de myBool = <?php echo $myBool ?></p>
</body>
</html>