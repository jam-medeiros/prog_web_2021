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

    if (isset($_POST["numeros"])) {


        echo "Os numero escolhidos são:<br>";


        foreach ($_POST["numeros"] as $numero) {

            echo "" . $numero . "<br>";
        }
    } else {

        echo "pq não escolheu um numero de seu interesse?<br>";
    }


    if (isset($_POST["novo"])) {

        echo "Quer receber nossas promoções???";
    } else {
        echo "Não quer receber nossas novidades???";
    }
    ?>

</body>

</html>