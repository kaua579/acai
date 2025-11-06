<?php
session_start();
require_once "funcoes.php";
require_once "conexao.php";

$acompanhamento = $_POST['acompanhamento'];
$cobertura = $_POST['cobertura'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>

</head>

<body id="corpo_carrinho">

    <div class="div_produtos">

        <?php
        if (empty($_SESSION['carrinho'])) {
            echo "carrinho vazio";
        } else {
            $total = 0;
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>Produto</td>";
            echo "<td>Preço</td>";
            echo "<td>Remover</td>";
            echo "</tr>";
            foreach ($_SESSION['carrinho'] as $idproduto) {
                $produto = pesquisarProdutoId($conexao, $idproduto);

                echo "<tr>";
                echo "<td>" . $produto['nome'] . ' ' .  $produto['tamanho'] . "</td>";
                echo "<td> R$ <span class='preco_venda'>" . $produto['preco'] . "</span></td>";

                $total += $produto['preco'];

                echo "<td><a href='remover.php?id=$idproduto'>[remover]</a></td>";
                echo "</tr>";
            }
            echo "</table>";

            echo "<p>Acompanhamentos selecionados</p>";
            echo "<ul>";
            foreach ($acompanhamento as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";

            echo "<p>Coberturas selecionadas</p>";
            echo "<ul>";
            foreach ($cobertura as $item2) {
                echo "<li>$item2</li>";
            }
            echo "</ul>";


            $qnt_acompanhamento = sizeof($acompanhamento);
            $qnt_cobertura = sizeof($cobertura);

            if ($qnt_acompanhamento > 3) {
                $add_acompanhamento = ($qnt_acompanhamento - 3) * 3;
            } else {
                $add_acompanhamento = 0;
            }

            $add_cobertura = $qnt_cobertura * 1.5;

            $total += $add_acompanhamento + $add_cobertura;

            echo "<h3>Total da compra: R$ <span id='total'>$total</span></h3>";
        }
        ?>

    </div>

    <div class="valor_total">
        <h3>Valor</h3>
        <p>Itens</p>
        <p>Preço Total: </p>

        <button class="botao-comprar">Comprar</button>
    </div>

    <a href="produtos.php">Voltar</a>
</body>

</html>