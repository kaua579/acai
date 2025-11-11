<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="./jquery-3.7.1.min.js"></script>
  <script src="./jquery.validate.min.js"></script>
  <link rel="stylesheet" href="./css/estilo.css">
  
  <style>
    /* Estilo para a mensagem de erro da validação */
    .error {
      color: black;
      font-size: 15px;
      display: block;
      margin-left: 5px;
    }

  </style>

  <script>
    $(document).ready(function () {
      $("#formLogin").validate({
        rules: {
          email: { required: true, email: true },
          senha: { required: true, minlength: 3 }
        },
        messages: {
          email: { required: "Você deve informar um e-mail", email: "Digite um e-mail válido" },
          senha: { required: "Você deve informar a senha", minlength: "A senha deve ter pelo menos 3 caracteres" }
        }
      });

      $("#mostrarSenha").click(function (e) {
        e.preventDefault(); 
        let tipo = $("#senha").attr("type");
        if (tipo === "password") {
          $("#senha").attr("type", "text");
          $("#mostrarSenha").text("🙈"); 
        } else {
          $("#senha").attr("type", "password");
          $("#mostrarSenha").text("👁️");
        }
      });
    });
  </script>
</head>
<body class="fundo-login">
  <div class="logo-login"></div> 

  <form id="formLogin" action="verificarLogin.php" method="post">
    <label for="email" class="label-form">E-mail</label>
    <div class="campo">
      <input type="text" id="email" name="email">
    </div>

    <label for="senha" class="label-form">Senha</label>
    <div class="campo">
      <input type="password" id="senha" name="senha">
      <button type="button" id="mostrarSenha">👁️</button>
    </div>

    <input type="submit" value="Login" name="logar" class="botao-usuario">
  
  </form>
</body>
</html>






<!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="../jquery-3.7.1.min.js"></script>
        <script src="../jquery.validate.min.js"></script>
        <link rel="stylesheet" href="./css/estilo.css">
    </head>
    <body class="fundo-login">
        <div class="logo-login">
        <form action="verificarLogin.php" method="post">
            E-mail: <br>
            <input type="text" name="email"> <br><br>
            Senha: <br>
            <input type="text" name="senha"> <br><br>
            <a href="home.php"> <button  type="submit" name="logar">Logar </button> </a>  
        </div>
        </form>
    
    </body>
    </html> -->