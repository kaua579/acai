<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "Fulano";
    $email = "sla2@gmail.com";
    $senha = "123";
    $tipo = "Cliente"

    salvarUsuario($conexao, $nome, $email, $senha , $tipo);
?>