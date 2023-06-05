<?php
require_once "Caneta.php"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
        $caneta1 = new Caneta;
        $caneta1->cor = "Verde";
        $caneta1->ponta = 0.5;
        $caneta1->carga = "full";
        $caneta1->modelo = "grossa";
        $caneta1->estaTampada = true;

        echo $caneta1->rabiscar();

        var_dump($caneta1);

        $caneta1->tamparDestanpar();
        echo $caneta1->rabiscar();
        $caneta1->tamparDestanpar();
        echo $caneta1->rabiscar();
        ?>
    </pre>
</body>

</html>