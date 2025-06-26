<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nome = "Sabone";
    $tamanho = 500;
    $complemento_g = "noz";
    $complemento_p = "paço";
    $cobertura = "chocolate ";
    $idproduto = 4;
    

    editarProduto($conexao, $nome, $tamanho, $complemento_g, $complemento_p, $cobertura, $idproduto);
?>