<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";
    
    $cpf = "333.222.222-69";
    $endereco = "sla    ";
    $idcliente = 2;
    $pontos = "34";
    $tb_usuario_idusuario = 2;

    editarCliente($conexao, $cpf, $endereco,$pontos, $idcliente, $tb_usuario_idusuario);
?>