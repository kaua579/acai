<?php
    require_once "../conexao.php";
    require_once "../funcoes.php";

   $data_entrega = "2025-06-23";
   $horario_entrega = "17:00";
   $localizacao = "rua 7";
   $idpedido = "1";
   $nota_entrega = "4.5";

    salvarUsuario($conexao, $data_entrega, $horario_entrega, $localizacao, $idpedido, $nota_entrega);
?>