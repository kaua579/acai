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
            echo "<table class=''> ";
            echo "<tr>";
            echo "<td class='td'>Produto</td>";
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

            $qnt_itens = sizeof($_SESSION['carrinho']);
            $qnt_acompanhamento = sizeof($acompanhamento);
            $qnt_cobertura = sizeof($cobertura);

            if ($qnt_acompanhamento > 3) {
                $add_acompanhamento = ($qnt_acompanhamento - 3) * 3;
            } else {
                $add_acompanhamento = 0;
            }

            $add_cobertura = $qnt_cobertura * 1.5;

            $total += $add_acompanhamento + $add_cobertura;
        }
        ?>

    </div>

    <div class="valor_total">
        <?php
        echo "<h3>Total: <span id='total'>$qnt_itens</span></h3>";
        echo "<h3>Valor total: R$ <span id='total'>$total</span></h3>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        ?>
        <a class="botao_voltar" href="produtos.php">Voltar</a>

    </div>

</body>

</html>