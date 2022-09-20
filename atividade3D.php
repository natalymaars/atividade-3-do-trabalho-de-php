<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D</title>
</head>
<body>
    <?php 
        $mes = $_POST["mes"];

    if ($mes == 1)
    echo "Mes 1 é janeiro.";

    if ($mes == 2)
    echo "Mes 2 é fevereiro.";

    if ($mes == 3)
    echo "Mes 3 é março.";

    if ($mes == 4)
    echo "Mes 4 é abril.";

    if ($mes == 5)
    echo "Mes 5 é maio.";

    if ($mes == 6)
    echo "Mes 6 é Junho.";

    if ($mes == 7)
    echo "Mes 7 é Julho.";

    if ($mes == 8)
    echo "Mes 8 é Agosto.";

    if ($mes == 9)
    echo "Mes 9 é Setembro.";

    if ($mes == 10)
    echo "Mes 10 é outubro.";

    if ($mes == 11)
    echo "Mes 11 é Novembro.";

    if ($mes == 12)
    echo "Mes 12 é Dezembro.";

    elseif ($mes > 12)
    echo "Não existe mês correspondente a este número.";
    
    ?>

    
</body>
</html>