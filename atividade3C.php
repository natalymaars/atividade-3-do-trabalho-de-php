<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c</title>
</head>
<body>

        <div>
            <?php
                $nome= $_POST["nome"];
                $idade= $_POST ["idade"];
                $gen= $_POST["gen"];

                if ($idade >= 25){
                 echo "$nome - $idade - $gen <br>";
                 echo "<strong>Você pode se cadastrar!<strong>";
                }elseif($idade < 25){
                 echo "$nome - $idade - $gen <br>";
                 echo " <strong>Você não pode se cadastrar!<strong>";
                }
        ?>
        </div>
    
</body>
</html>