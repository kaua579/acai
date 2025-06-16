<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$cpf = "212.456.789-12";
$endereco = "rua122";
$pontos = 100;
$tb_usuario_idusuario = 2;

salvarCliente($conexao, $cpf, $endereco, $pontos, $tb_usuario_idusuario);
?>