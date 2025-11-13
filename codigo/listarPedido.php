<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body id="corpo_atendente">
        <table class="table table-bordered table-striped">
             <thead class="table-dark">
        <tr>
            <td>Id</td>
            <td>Nome Cliente</td>
            <td>Nome Atendente</td>
            <td>Status</td>
        </tr>
        </thead>
         <tbody>
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
    </tbody>
    </table>
    <br>
    <button id="voltar" onclick="window.location.href='home.php'">Voltar</button>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>