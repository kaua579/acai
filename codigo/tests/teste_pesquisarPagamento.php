<?php

require_once "../conexao.php";
require_once "../funcoes.php";

$idcliente = 3;

echo "<pre>";
print_r(pesquisarPagamentoId($conexao, $idcliente));
echo "</pre>";
?>