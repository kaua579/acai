














<?php
require_once "conexao.php";
require_once "funcoes.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$tamanho = $_POST['tamanho'];
$complemento_g = $_POST['complemento_g'];
$complemento_p = $_POST['complemento_p'];
$cobertura = $_POST['cobertura'];


if ($id == 0) {
   
    $sql = "INSERT INTO tb_produto (nome, tamanho, complemento_g, complemento_p, cobertura) VALUES ('$nome', '$tamanho', $complemento_g, $complemento_p, $cobertura)";
} else {
    
    $sql = "UPDATE tb_produto SET nome = '$nome', tamanho = '$tamanho', complemento_g = $complemento_g, complemento_p = $complemento_p, cobertura = $cobertura WHERE idproduto = $id";
}
mysqli_query($conexao, $sql);
?>