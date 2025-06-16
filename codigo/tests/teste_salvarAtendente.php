<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $idade = "16";
    $horario_chegada = "1212";
    $horario_saida = "1314";
    $descricao = "o cara é foda";
    $tb_usuario_idusuario =  1 ; 

    salvarAtendente($conexao, $idade, $horario_chegada, $horario_saida, $descricao, $tb_usuario_idusuario);
?>