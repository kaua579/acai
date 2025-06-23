<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $idade = "16";
    $horario_chegada = "12:12";
    $horario_saida = "13:14";
    $descricao = "o cara é foda";
    $tb_usuario_idusuario =  3; 

    salvarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario);
?>