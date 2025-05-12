<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";
    
    $cpf = "222.222.222-69";
    $endereco = "Rua do Esquizofrênico";
    $idcliente = 1;
    editarCliente($conexao, $cpf, $endereco, $idcliente);

?>