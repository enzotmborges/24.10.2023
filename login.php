<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <form method="POST">
      <label for="username">Nome de usuário:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" value="Entrar">
    </form>
    <br>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "sesc") {
          if ($password == "1234") {
            echo "Login realizado com sucesso.";
          } else {
            echo "Senha incorreta.";
          }
        } else {
          if ($password == "1234") {
            echo "Nome de usuário incorreto.";
          } else {
            echo "Nome de usuário e senha incorretos.";
          }
        }
      }
    ?>
  </body>
</html>
