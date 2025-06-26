<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

$forma_p = "pix";
$data_pagamento = "2025-06-11";
$valor_total = 10.00;
$idpagamento = 8;

salvarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido);
?>