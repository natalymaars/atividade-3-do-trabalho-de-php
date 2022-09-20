<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <title>A</title>
    </head>
    <body>

        <?php
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $soma = $valor1 + $valor2;
        ?>
        <p>A soma é: 
        <?php
        if($soma>10){
            echo $soma + 8;
        }else{
            echo $soma - 5;
        }
        ?></p>

    </body>


</html>