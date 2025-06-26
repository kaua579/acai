<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    
    $idpedido = 4;
    $nota_atendente = 5.5; 

    avaliarAtendente($conexao, $nota_atendente, $idpedido);
?>