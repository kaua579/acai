<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    
    $observacao = "atendimento de qualidade";
    $horario_inicio = "06:00";
    $horario_final = "17:00";
    $status = "pronto para entrega";
    $valor_p = "20,00";
    $taxa_entraga = "3,00";
    $data = "2023-03-17";
    $nota_atedente = "4/5";

    salvarPedido($conexao, $observacao, $horario_inicio, $horario_final, $status, $valor_p, $taxa_entraga, $data, $nota_atedente);
?>