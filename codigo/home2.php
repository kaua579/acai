<?php
    require_once "verificarLogado.php";

    if ($_SESSION['tipo'] == 'c') {
        header("Location: home.php");
    }
?>
<?php
    require_once "verificarLogado.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <li>
        <a href="formCliente.php">Cadastrar novo cliente</a>
        </li>

        <li>
            <a href="">quem somos</a>
        </li>
        <li>
            <a href="">produtos </a>
        </li>
        <li>
            <a href="deslogar.php">Sair</a>
        </li>
    </ul>
</body>
</html>