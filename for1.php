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
		<label for="valor_inicial">Valor inicial:</label>
		<input type="number" name="valor_inicial" id="valor_inicial">

		<label for="valor_final">Valor final:</label>
		<input type="number" name="valor_final" id="valor_final">

		<input type="submit" value="Imprimirs">
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$valor_inicial = $_POST['valor_inicial'];
			$valor_final = $_POST['valor_final'];

			for ($i = $valor_inicial; $i <= $valor_final; $i++) {
				echo $i;
				if ($i < $valor_final) {
					echo ', ';
				}
			}
		}
	?>

</body>
</html>