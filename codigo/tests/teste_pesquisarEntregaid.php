<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$tb_pedido_idpedido = 2;

echo "<pre>";
print_r(pesquisarEntregaid($conexao, $tb_pedido_idpedido));
echo "</pre>";
?>