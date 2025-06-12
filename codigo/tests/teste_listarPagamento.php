<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    echo "<pre>";
    print_r(listarPagamento($conexao));
    echo "</pre>";
?>