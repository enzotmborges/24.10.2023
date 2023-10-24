<?php
    $a = 15;
    $b = 5;
    $nome = $_GET['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p><font color='red'> a = <?php echo $a ?> e b = <?php echo $b ?> </font></a>
    <hr>
    <p><font color='red'> a + b = <?php echo $a+$b ?></font></p>
    <p><font color='red'> a - b = <?php echo $a-$b ?></font></p>
    <p><font color='red'> a x b = <?php echo $a*$b ?></font></p>
    <p><font color='red'> a / b = <?php echo $a/$b ?></font></p>
    <hr>
    <?php echo "nome = <font color='red'><b>$nome</b></font> "?>

    
</body>
</html>