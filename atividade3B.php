<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B</title>
</head>
<body>
    <?php 

        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $n3 = $_POST["num3"];

        if (($n1 >= $n2) && ($n1 >= $n3))
        $prim = $n1;
        elseif(($n2>=$n1) && ($n2 >= $n3))
        $prim = $n2;
        else
        $prim = $n3;

        if (($n1 <= $n2) && ($n1 <= $n3))
        $terc = $n1;
        elseif(($n2 <= $n1) && ($n2 <= $n3))
        $terc = $n2;
        else
        $terc = $n3;

        $seg = ($n1 + $n2 + $n3) - ($prim + $terc);
        
        echo "Em ordem decrescente os numeros informados são:".$prim;
        echo "-".$seg;
        echo "-".$terc;
           ?>
           
           


</body>
</html>