<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $idusuario = 6;

    echo "<pre>";
    print_r(pesquisarUsuario($conexao, $idusuario));
    echo "<pre>";

?>