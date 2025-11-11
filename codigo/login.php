<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="../jquery-3.7.1.min.js"></script>
    <script src="../jquery.validate.min.js"></script>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body class="fundo-login">

    <div class="logo-login">
        <form action="verificarLogin.php" method="post" class="form-login">


            E-mail: <br>
            <input type="text" name="email" class="campo-login"><br><br>

            Senha: <br>
            <input type="password" name="senha" class="campo-login"><br><br>

            <button type="submit" name="logar" class="botao-loga">Logar</button>
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