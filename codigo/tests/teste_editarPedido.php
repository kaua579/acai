<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    
    $observacao = "atendimento de pessimo";
    $horario_inicio = "06:00";
    $horario_final = "17:00";
    $status = "pronto para entrega";
    $valor_p = "20,00";
    $taxa_entrega = "3,00";
    $data = "2026-09-15";
    $nota_atedente = "4/5";
    $tb_endereco_idendereco = 1;
    $tb_atendente_idatendente = 1;
    $tb_cliente_idcliente = 1;
    $idpedido = 6;

    editarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entrega, $data, $nota_atedente,$tb_endereco_idendereco, $tb_atendente_idatendente, $tb_cliente_idcliente, $idpedido )
?>