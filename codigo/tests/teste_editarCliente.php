<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";
    
    $cpf = "333.222.222-69";
    $endereco = "Rua do Tal";
    $idcliente = 7;
    $pontos = "34";
    $tb_usuario_idusuario = 2;

    editarCliente($conexao, $cpf, $endereco, $idcliente, $tb_usuario_idusuario)
?>