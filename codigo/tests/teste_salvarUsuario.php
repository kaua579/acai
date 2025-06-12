<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "Fulano";
    $email = "fulano@gmail.com";
    $senha = "9999";
    $tipo = "C";

    salvarUsuario($conexao, $nome, $email, $senha , $tipo);
?>