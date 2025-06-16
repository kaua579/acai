<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";


    $forma_p = "pix";
    $data_pagamento = "2050-12-17";
    $valor_total = 100; 
    $idpagamento = 1;

    editarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $idpagamento);

?>