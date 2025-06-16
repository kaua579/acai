<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idcliente = 2;

echo "<pre>";
print_r(pesquisarPagamentoId($conexao, $idcliente));
echo "</pre>";
?>