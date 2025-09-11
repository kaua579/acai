<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atendentes</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>


<body>
    <?php
    require_once "conexao.php";
    require_once "funcoes.php";

    $lista_atendente = listarAtendente($conexao);
    ?>
    <table class="table">
        <tr class="table-dark">
            <th>Id</th>
            <th>Idade</th>
            <th>Horario Chegada</th>
            <th>Horario Saida</th>
            <th>Descrição</th>
        </tr>
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
    </table>


    </table>

</body>

</html>
