<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $idade = array("jam" => "40", "joao" => "16", "gabriel" => "23");

    foreach ($idade as $x => $val) {
        echo "$x = $val<br>";
    }
    ?>
</body>

</html>