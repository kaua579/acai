<?php
    require_once "../funcoes.php";
    require_once "../conexao.php";
    
   $data_entrega = "2025-06-27";
   $horario_entrega = "12:00:00";
   $localizacao = "rua 7";
   $idpedido = "6";
   $nota_entrega = "4.5";
   $identrega = "2";
        
    editarEntrega($conexao, $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega, $identrega);
    
?>