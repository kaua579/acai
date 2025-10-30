<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jquery-3.7.1.min.js"></script>
    <script src="./jquery.validate.min.js"></script>
    <link rel="stylesheet" href="./css/estilo.css">


    <style>
        .error {
            color: blue;
        }
    </style>

    <script>
        $(document).ready(function () {
            $("#formUsuario").validate({
                rules: {
                    nome: {
                        required: true,
                        minlength: 2,
                    },
                    email: {
                        required: true,
                    },
                },
                messages: {
                    nome: {
                        required: "Esse campo deve ser preenchido",
                        minlength: "O tamanho mínimo é 2.",
                    },
                    email: {
                        required: "Você deve informar um e-mail",
                    },
                }
            });

            $("#mostrarSenha").click(function (e) {
                e.preventDefault(); // impede o botão de enviar o formulário
                let tipo = $("#senha").attr("type");
                if (tipo === "password") {
                    $("#senha").attr("type", "text");
                    $("#mostrarSenha").text("Ocultar senha");
                } else {
                    $("#senha").attr("type", "password");
                    $("#mostrarSenha").text("Mostrar senha");
                }
            });
        });
    </script>
</head>

<body class="fundo-usuario">
  <form id="formUsuario" class="form-container" action="salvarUsuario.php" method="post">

    <label for="nome" class="label-form">Nome:</label>
    <div class="campo">
      <input type="text" name="nome" id="nome">
    </div>

    <label for="email" class="label-form">E-mail:</label>
    <div class="campo">
      <input type="text" name="email" id="email">
    </div>

    <label for="senha" class="label-form">Senha:</label>
    <div class="campo">
      <input type="password" name="senha" id="senha">
    </div>

    <button type="button" id="mostrarSenha">Mostrar senha</button>
    <input type="submit" value="Cadastrar" class="">
  </form>
</body>


</html>


<!-- <body class="fundo-usuario">
    <form id="formUsuario" action="salvarUsuario.php" method="post">
        
        Nome: <br>
        <input type="text" name="nome" id="nome"> <br><br>

        E-mail: <br>
        <input type="text" name="email" id="email"> <br><br>

        Senha: <br>
        <input type="password" name="senha" id="senha">
        <button type="button" id="mostrarSenha">Mostrar senha</button>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body> -->