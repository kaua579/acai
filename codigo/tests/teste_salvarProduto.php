<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "Sabonet";
    $tamanho = 50;
    $complemento_g = "no";
    $complemento_p = "paçoc";
    $cobertura = "chocolate ";

    salvarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura)

?>