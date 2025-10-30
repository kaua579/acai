<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jquery-3.7.1.min.js"></script>
    <script src="./jquery.validate.min.js"></script>
</head>
    <script>
        $(document).ready(function () {
            $("#formUsuario").validate({
                // regras para cada campo
                rules: {
                    nome: {
                        required: true,
                        minlength: 2,
                    },
                    email: {
                        required: true,
                    },
                },
                // mensagens de erro para cada regra
                messages: {
                    nome: {
                        required: "Esse campo deve ser preenchido",
                        minlength: "O tamanho mínimo é 2.",
                    },
                    email: {
                        required: "Você deve informar um e-mail",
                    },
                }
            })
        });
    </script>
    <style>
        .error {
            color: blue;
        }
    </style>
<body>
    <form id="formUsuario" action="salvarUsuario.php" method="post">
        Nome: <br>
        <input type="text" name="nome" id="nome"> <br><br>
        E-mail: <br>
        <input type="text" name="email" id="email"> <br><br>
        Senha: <br>
        <input type="text" name="senha" id="senha"> <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>