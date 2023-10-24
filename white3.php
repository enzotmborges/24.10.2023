<!DOCTYPE html>
<html>
  <head>
    <title>Calculadora de Tabuada</title>
  </head>
  <body>
    <h1>Calculadora de Tabuada</h1>
    <form method="POST">
      <label for="numero">Digite um número:</label>
      <input type="number" id="numero" name="numero" required><br><br>
      <input type="submit" value="Calcular">
    </form>
    <br>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        for ($i = 1; $i <= 10; $i++) {
          $resultado = $numero * $i;
          echo "$numero x $i = <span style='color: red;'>$resultado</span><br>";
        }
      }
    ?>
  </body>
</html>
