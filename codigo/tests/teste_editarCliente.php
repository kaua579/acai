<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";
    
    $cpf = "333.222.333-55";
    $endereco = "sla";
    $idcliente = 2;
    $pontos = "366";
    $tb_usuario_idusuario = 2;

    editarCliente($conexao, $cpf, $endereco,$pontos, $idcliente, $tb_usuario_idusuario);
?>