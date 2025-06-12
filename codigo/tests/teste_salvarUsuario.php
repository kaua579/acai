<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "lara";
    $email = "lara@gmail";
    $senha = "321";
    $tipo = "e";

    salvarUsuario($conexao, $nome, $email, $senha , $tipo);
?>