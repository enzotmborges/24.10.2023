<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<form method="POST">
		<label>1:</label>
		<input type="text" name="informacoes[]" required><br>

		<label>2:</label>
		<input type="text" name="informacoes[]" required><br>

		<label>3:</label>
		<input type="text" name="informacoes[]" required><br>

		<label>4:</label>
		<input type="text" name="informacoes[]" required><br>

		<label>5:</label>
		<input type="text" name="informacoes[]" required><br>

		<input type="submit" name="submit" value="Enviar">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$informacoes = $_POST['informacoes'];

			foreach($informacoes as $info) {
				echo $info . "<br> ";
			}
		}
	?>
</body>
</html>