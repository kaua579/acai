<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
      <link rel="stylesheet" href="./css/estilo.css">
    </head>
<body>
  <!-- Tela de login com fundo roxo -->
  <div class="fullscreen-background"></div>
  
  <div class="login-container">
    <!-- Logo do gatinho -->
    <div class="logo">
      <img id="logo" src="logo.png" >
    </div>

    <!-- Formulário de login -->
    <form action="index.php" method="POST" class="login-form">
      <h1>Login</h1>
      <p class="sign-in-text">Sign in to continue.</p>

      <!-- Campo de nome (ou email) -->
      <label for="email">NAME</label>
      <input type="email" id="email" name="email" placeholder="seu nome" required>

      <!-- Campo de senha -->
      <label for="senha">PASSWORD</label>
      <input type="password" id="senha" name="senha" placeholder="******" required>

      <!-- Botão de login -->
      <button type="submit" class="login-btn">Login</button>

      <!-- Links abaixo do botão -->
      <div class="forgot-signup">
        <a href="#">Forgot Password?</a> | <a href="#">Signup!</a>
      </div>
    </form>
  </div>
</body>
</html>

<?php
require_once "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM tb_usuario WHERE email = '$email'";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 0) {
    header("Location: index.php");
} else {
    $linha = mysqli_fetch_array($resultado);
    $senha_banco = $linha['senha'];
    $tipo = $linha['tipo'];

    if (password_verify($senha, $senha_banco)) {
        session_start();
        $_SESSION['logado'] = 'sim';
        $_SESSION['tipo'] = $tipo;
        header("Location: home.php");
    } else {
        header("Location: index.php");
    }
}
