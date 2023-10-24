<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <center><label for=""><h1>Calculadora</h1></label>
        <fieldset>
            <legend>Operações</legend>
            <input type="radio" name="opcao" value='1'>Dobro <br>
            <input type="radio" name="opcao" value='2'>Multiplicação <br>
            <input type="radio" name="opcao" value='3'>Divisão <br>
            <input type="radio" name="opcao" value='4'>Adição <br>
            <input type="radio" name="opcao" value='5'>Subtração <br>
        </fieldset>
        <br>
            <input type="text" name="valor1" placeholder="Informe o valor1"> <br>
            <input type="text" name="valor2" placeholder="Informe o valor2"> <br>
            <input type="submit" name="submit"></center>
    </form>
</body>
</html>

<?php

if(isset($_GET['submit'])){
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $opcao = $_GET['opcao'];
    $resposta = 0;

    switch($opcao) {
        case '1': $resposta = $valor1 * 2; break;
        case '2': $resposta = $valor1 * $valor2; break;
        case '3': $resposta = $valor1 / $valor2; break;
        case '4': $resposta = $valor1 + $valor2; break;
        case '5': $resposta = $valor1 - $valor2; break;
        default: echo"valores inválidos!";
    }
    echo "O resultado é: <font color=red>$resposta</font>";
}
?>