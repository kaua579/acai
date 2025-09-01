<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Tamanho</td>
            <td>Complemento_g</td>
            <td>Complemento_p</td>
            <td>Cobertura</td>
            <td colspan="2">Ação</td>
        </tr>
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
    </table>
</body>
</html>