<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

   $data_entrega = "2025-06-23";
   $horario_entrega = "12:00:00";
   $localizacao = "rua 7";
   $tb_pedido_idpedido = "6";
   $nota_entrega = "4.5";

    salvarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $nota_entrega, $tb_pedido_idpedido);
?>