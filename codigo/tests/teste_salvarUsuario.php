<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "beto";
    $email = "beto@gmail.com";
    $senha = "12234";
    $tipo = "A";

    salvarUsuario($conexao, $nome, $email, $senha, $tipo);
?>