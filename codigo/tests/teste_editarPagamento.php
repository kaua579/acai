<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";


    $forma_p = "pixx";
    $data_pagamento = "2050-12-16";
    $valor_total = 600; 
    $idpagamento = 8;
    

    editarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $idpagamento);

?>