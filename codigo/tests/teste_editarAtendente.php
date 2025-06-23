<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $idade = "15";
    $horario_chegada = "12:12";
    $horario_saida = "12:30";
    $descricao = "o cara estranho";
    $tb_usuario_idusuario =  3; 

    editarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario);
?>