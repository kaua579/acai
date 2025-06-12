<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

$forma_p = "pix";
$data_pagamento = "2025-06-11";
$valor_total = 10.00;
$tb_pedido_idpedido = 1;

salvarPagamento($conexao, $forma_p, $data_pagamento, $valor_total, $tb_pedido_idpedido);
?>