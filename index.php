<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
</head>
<body>
    <div>
        <div>Atividade 3A</div>
            <div>Construir um algoritmo que leia 2 números e efetue a adição. <br>
                Caso o valor da soma seja maior que 10, este deverá ser apresentando <br>
                somando-se a ele mais 8; Se o valor da soma seja menor ou igual a 10, <br>
                este deverá ser apresentado subtraindo-se 5; <br>  
            </div>
            <div>
                <form action="atividade3A.php" method="post">
                    Numero 1: <br>
                    <input type="number" name="valor1" default=0>
                    <br>
                    Numero 2: <br>
                    <input type="number" name="valor2" default=0>
                    <br> <br>
                    <input type="submit">
                </form>
                <br>
            </div> 
            <br>
        </div>
        <br>
        <div>
            <br>
            <div>Atividade 3B</div>
            <br>
            <div>
            Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes);
            </div>          
            <div>
                <br>
                <form action="atividade3B.php" method="post">
                    Numero 1: <br>
                    <input type="number" name="num1" default=0>
                    <br>
                    Numero 2: <br>
                    <input type="number" name="num2" default=0>
                    <br>
                    Numero 3: <br>
                    <input type="number" name="num3" default=0>
                    <br> <br>
                    <input type="submit">
                </form>
                
            </div>
            <br>
        </div>
        <br>
        <div>
            <br>
            <div>Atividade 3C</div>
            <br>
            <div>
            Entrar com nome, genero e idade de uma pessoa. <br>
            Se a pessoa tiver mais que 25 anos, imprimir nome, <br> 
            o genero, e a a mensagem: "Você pode se cadastrar". <br>
            Caso contrário, imprimir nome, o genero, e a mensagem: <br>
            "Você não pode se cadastrar";
            </div>
            <br>
            <div>
                <form action="atividade3C.php" method="POST">
                    Nome: <br>
                    <input type="text" name="nome" default=0>
                    <br>
                    Idade: <br>
                    <input type="number" name="idade" default=0>
                    <br>
                    Genero <br>
                    <input type="text" name="gen" default=0>
                    <br> <br>
                    <input type="submit">
                </form>    
            </div>
            <br>
            <div>Atividade 3D</div>
            <br>
            <div>
            Ler um número inteiro entre 1 e 12 e imprimir o mês correspondente. <br>
            Caso o número seja fora desse intervalo, informar que não existe mês <br>
            correspondente a este número; <br>
            </div>
            <br>
            <div>
                <form action="atividade3D.php" method="POST">
                    Informe o numero de um mês (1 a 12):<br>
                    <input type="number" name="mes" default=0>
                    <br> <br>
                    <input type="submit">

            </div>
        </div>
</body>
</html>