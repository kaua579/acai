<?php

require_once "../conexao.php";
require_once "../funcoes.php";
$idatendente = 2;
echo "<pre>";
print_r(pesquisarAtendenteId($conexao, $idatendente));
echo "</pre>";
?>
