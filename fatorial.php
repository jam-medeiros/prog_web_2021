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
    $num = 10;

    if ($num > 0) {
        $valor = $num;
        for ($i = ($valor - 1); $i > 0; $i--) {
            $valor = $valor * $i;
        }
    } else {
        $vaor = 0;
    }

    echo "!{$num} = {$valor}";

    ?>


</body>

</html>