<?php
    $login = $_GET['login'];
    $senha = $_GET['senha'];
?>
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
        <input type="text" name="login">
        <input type="text" name="senha">
        <input type="submit" name="submit" value="verificar">
</form>
<hr>
<?php
    if ($login == 'sesc' && $senha =='1234'){
         echo "Bem vindo ao Sistema: $login";
     } else {
          echo "login ou senha incorretos!";
      }
?>
</body> 