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
    .error {
      color: red; /* cor das mensagens de erro */
      font-size: 15px;
      display: block;
    }

    /* container da senha para alinhar o botão dentro */
    .campo-senha {
      position: relative;
      display: flex;
      align-items: center;
    }

    /* botão dentro do campo */
    #mostrarSenha {
      position: absolute;
      right: 10px; /* distância da borda direita */
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      font-size: 18px;
      color: white;
      padding: 0;
    }

    #mostrarSenha:hover {
      opacity: 0.8;
    }
  </style>

  <script>
    $(document).ready(function () {
      // Validação do formulário
      $(".form-login").validate({
        rules: {
          email: {
            required: true,
            email: true
          },
          senha: {
            required: true,
            minlength: 3
          }
        },
        messages: {
          email: {
            required: "Você deve informar um e-mail",
            email: "Digite um e-mail válido"
          },
          senha: {
            required: "Você deve informar a senha",
            minlength: "A senha deve ter pelo menos 3 caracteres"
          }
        }
      });

      // Mostrar / esconder senha
      $("#mostrarSenha").click(function (e) {
        e.preventDefault(); 
        let tipo = $("#senha").attr("type");
        if (tipo === "password") {
          $("#senha").attr("type", "text");
          $("#mostrarSenha").text("👁️");
        } else {
          $("#senha").attr("type", "password");
          $("#mostrarSenha").text("🙈");
        }
      });
    });
  </script>
</head>
<body class="fundo-login">
  <div class="logo-login">
    <form action="verificarLogin.php" method="post" class="form-login">
      <label for="email">E-mail</label>
      <input type="text" id="email" name="email" class="campo-login">

      <label for="senha">Senha</label>
      <div class="campo-senha">
        <input type="password" id="senha" name="senha" class="campo-login">
        <button type="button" id="mostrarSenha">🙈</button> 
      </div>

      <button type="submit" name="logar" class="botao-loga">Login</button>
    </form>
  </div>
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