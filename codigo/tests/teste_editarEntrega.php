<?php
    require_once "../funcoes.php";
    require_once "../conexao.php";
    
   $data_entrega = "2025-04-27";
   $horario_entrega = "12:00:00";
   $localizacao = "rua 7";
   $tb_pedido_idpedido = 1;
   $nota_entrega = 5;
   $identrega = 2;
        
    editarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $nota_entrega, $tb_pedido_idpedido, $identrega);
    
?>