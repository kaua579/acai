<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Document</title>
</head>

<body>
  <!-- Tela de login com fundo roxo -->
  <div class="fullscreen-background"></div>

  <div class="login-container">
    <!-- Logo do gatinho -->
    <div class="logo">
      <img id="logo" src="logo.png">
    </div>

    <!-- Formulário de login -->
    <form action="index.php" method="POST" class="login-form">
      <h1>Cadastrar</h1>
      <p class="sign-in-text">Sign in to continue.</p>

      <!-- Campo de nome (ou email) -->
      <label for="email">NOME</label>
      <input type="text"  name="email" placeholder="seu nome" required>

      <!-- email -->
      <label for="email">EMAIL</label>
      <input type="email" id="email" name="email" placeholder="seu email" required>
      
      <!-- Campo de senha -->
      <label for="senha">SENHA</label>
      <input type="password" id="senha" name="senha" placeholder="******" required>

      <!-- Botão de login -->
      <button type="submit" class="login-btn">Cadastrar</button>

      <!-- Links abaixo do botão -->
      <div class="forgot-signup">
        <a href="#">Forgot Password?</a> | <a href="formUsuario.php">Signup!</a>
      </div>
    </form>

</body>

</html>