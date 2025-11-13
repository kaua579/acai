<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <table border="1">
        <tr>
            <td>Id</td>
            <td>Nome Cliente</td>
            <td>Nome Atendente</td>
            <td>Status</td>
        </tr>
    <?php

    require_once "funcoes.php";
    require_once "conexao.php";
    
    $pedidos = listarPedidoCompleto($conexao);

    foreach ($pedidos as $p) {
        $idpedido = $p['idpedido'];
        $nome_atendente = $p['nome_atendente'];
        $nome_cliente = $p['nome_cliente'];
        $status = $p['status'];
       
        
            echo "<tr>";
            echo "<td>$idpedido</td>";
            echo "<td>$nome_atendente</td>";
            echo "<td>$nome_cliente</td>";
            echo "<td>$status</td>";

          
            echo "</tr>";
    }
    ?>

</body>

</html>