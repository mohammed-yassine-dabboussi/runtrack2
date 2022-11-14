<?php
$bool = true;
$int = 8;
$str = 'Bonjour';
$float = 3.2;
?>

<head>
    <meta charset="UTF-8">
    <title>jour 1 job03</title>
</head>

<body>

<table>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Boolean</td>
            <td>bool</td>
            <td><?php echo $bool ?></td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>int</td>
            <td><?= $int ?></td>
        </tr>
        <tr>
            <td>String</td>
            <td>str</td>
            <td><?= $str ?></td>
        </tr>
        <tr>
            <td>Float</td>
            <td>float</td>
            <td><?php echo $float ?></td>
        </tr>
    </table>
    

</body>
</html>