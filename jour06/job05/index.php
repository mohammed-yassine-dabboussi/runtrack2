<?php
    //Mohammed Yassine Dabboussi Runtrack 2 Jour 6 Job5 //   
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>jour 6 job 5</title>
        <?php
        if(isset($_GET["style"])){
            echo "<link rel='stylesheet' href='" . $_GET["style"] . ".css'>";
        }else{echo "<link rel='stylesheet' href='style1.css'>";}
    ?>
    </head>
<body>
    <div class="formulaire">
    <form action="" method="get">
        <label for="styleSelect">Veuillez choisir un style :</label>

        <select name="style" id="styleSelect">
            <option value="style1" selected>Style1 (Par défaut)</option>
            <option value="style2">Style2</option>
            <option value="style3">Style3</option>
        </select>
        <input type="submit" value="OK" id="button">
    </form>
    </div>
</body>
</html>