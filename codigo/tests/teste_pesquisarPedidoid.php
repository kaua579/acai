<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idpedido = 1;

echo "<pre>";
print_r(pesquisarPedidoId($conexao, $idpedido));
echo "</pre>";
?>