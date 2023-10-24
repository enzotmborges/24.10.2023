<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
	<label for="numero">numero:</label>
	<input type="number" id="numero" name="numero">
	<button type="submit">Calcular</button>
</form>

<?php
if(isset($_POST['numero'])) {
	$numero = $_POST['numero'];
	echo "<ul>";
	for($i = 1; $i <= 10; $i++) {
		$resultado = $numero * $i;
		echo "$numero x $i = $resultado <br>";
	}
	echo "</ul>";
}
?>

</body>
</html>