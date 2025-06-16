<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "Sabone";
    $tamanho = 500;
    $complemento_g = "nozz";
    $complemento_p = "paçoca";
    $cobertura = "chocolate trufado";
    $idproduto = 4;
    

    editarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto);
?>