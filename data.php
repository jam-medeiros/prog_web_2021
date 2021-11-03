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

    $t = date("h");

    if ($t < "18") {

        echo "tenha um bom dia";
    } else {

        echo "tenha uma boa noite!";
    }


    ?>




</body>

</html>