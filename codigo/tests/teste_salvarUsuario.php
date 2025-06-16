<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "laraaaaa";
    $email = "laraa@gmail";
    $senha = "321";
    $tipo = "c";

    salvarUsuario($conexao, $nome, $email, $senha, $tipo);
?>