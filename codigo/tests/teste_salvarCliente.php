<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$cpf = "222.456.789-12";
$endereco = "rua122";
$pontos = "112";

salvarCliente($conexao, $cpf, $endereco, $pontos);
