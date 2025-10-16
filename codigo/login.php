<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.7.1.min.js"></script>
    <script src="../jquery.validate.min.js"></script>
</head>
<body>
    
    <h1>Login</h1>
    <form action="verificarLogin.php" method="post">
        E-mail: <br>
        <input type="text" name="email"> <br><br>
        Senha: <br>
        <input type="text" name="senha"> <br><br>
        <a href="home.php"> <button  type="submit" name="logar">Logar </button> </a>
        
    </form>
</body>
</html>