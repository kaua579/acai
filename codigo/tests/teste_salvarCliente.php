<?php
require_once "../conexao.php";
require_once "../funcoes.php";

$cpf = "123.456.789-10";
$endereco = "rua12";
$pontos = 100;
$tb_usuario_idusuario = 3;

salvarCliente($conexao, $cpf, $endereco, $pontos, $tb_usuario_idusuario);
?>