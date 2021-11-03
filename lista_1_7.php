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

    $numMes = 8;


    $mes = [
        "Janeiro", "Fevereiro",
        "Março", "Abril",
        "Maio", "Junho",
        "Julho", "Agosto",
        "Setembro", "Outubro",
        "Novembro", "Dezembro"
    ];


    if ($numMes >= 1 && $numMes <= 12) {
        echo $mes[$numMes - 1];
    } else {
        echo "Mês inválido";
    }
    ?>


</body>

</html>