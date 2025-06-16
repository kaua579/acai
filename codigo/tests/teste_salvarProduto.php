<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "Sabonete";
    $tamanho = 200;
    $complemento_g = "nosaa";
    $complemento_p = "paçoca";
    $cobertura = "chocate ";
    

    salvarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura )

?>