<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "Sabonete";
    $tamanho = 500;
    $complemento_g = "noz";
    $complemento_p = "paçoca";
    $cobertura = "chocolate trufado";
    $idproduto = 3;

    editarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto)
?>