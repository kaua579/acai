<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "lara";
    $email = "lara@gmail";
    $senha = "321";
    $tipo = "C";

    salvarUsuario($conexao, $nome, $email, $senha , $tipo);
?>