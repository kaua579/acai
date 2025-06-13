<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$cpf = "123.456.789-11";
$endereco = "rua1";
$pontos = "12";

salvarCliente($conexao, $cpf, $endereco, $pontos);
