<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

    $nota_atendente = 1;
    $idpedido = 1;
 

    avaliarAtendente($conexao, $nota_atendente, $idpedido);
?>