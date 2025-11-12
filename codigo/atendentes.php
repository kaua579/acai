<?php
session_start();
require_once 'verificarLogado.php';
?>
<?php
require_once "conexao.php";
require_once "funcoes.php";
$lista_atendente = listarAtendente($conexao);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atendentes</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body id="corpo_atendente">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Idade</th>
                <th>Horario Chegada</th>
                <th>Horario Saida</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista_atendente as $atendente) {
                $idatendente = $atendente['idatendente'];
                $idade = $atendente['idade'];
                $horario_chegada = $atendente['horario_chegada'];
                $horario_saida = $atendente['horario_saida'];
                $descricao = $atendente['descricao'];

                echo "<pre>";
                echo "<tr>";
                echo "<td>$idatendente</td>";
                echo "<td>$idade</td>";
                echo "<td>$horario_chegada</td>";
                echo "<td>$horario_saida</td>";
                echo "<td>$descricao</td>";
                echo "</tr>";
                echo "</pre>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <button id="voltar" onclick="window.location.href='home.php'">Voltar</button>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>