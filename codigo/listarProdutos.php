<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Produtos</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Tamanho</td>
            <td>Complemento_g</td>
            <td>Complemento_p</td>
            <td>Cobertura</td>
            <td colspan="2">Ação</td>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once "conexao.php";

        $sql = "SELECT * FROM tb_produto";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idproduto'];
            $nome = $linha['nome'];
            $tamanho = $linha['tamanho'];
            $complemento_g = $linha['complemento_g'];
            $complemento_p = $linha['complemento_p'];
            $cobertura = $linha['cobertura'];


            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$tamanho</td>";
            echo "<td>$complemento_g</td>";
            echo "<td>$complemento_p</td>";
            echo "<td>$cobertura</td>";
            echo "<td><a href='deletarProduto.php?id=$id'>Excluir</a></td>";
            echo "<td><a href='formProduto.php?id=$id'>Editar</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>