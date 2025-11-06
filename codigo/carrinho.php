<?php
session_start();
require_once "funcoes.php";
require_once "conexao.php";


// $produto = $_SESSION['produto'];
// $preco = $_SESSION['preco'];

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
            // echo "<td>Quantidade</td>"; // isso pode sair daqui?
            echo "<td>Subtotal</td>";
            echo "<td>Remover</td>";
            echo "</tr>";
            foreach ($_SESSION['carrinho'] as $id => $idpedido) {
                $produto = pesquisarProdutoId($conexao, $id);

                echo "<tr>";
                echo "<td>" . $produto['Produto'] . "</td>";
                echo "<td>" . $produto['Preco'] . "</td>";
                echo "<td> R$ <span class='preco_venda'>" . $produto['valor_p'] . "</span></td>";

                echo "<td><input type='number' name='quantidade[$id]' class='quantidade' value='$quantidade' data-id='$id' min='1' size='2'</td>";

                $total_unitario = $produto['valor_p'] * $quantidade;
                $total += $total_unitario;

                echo "<td> R$ <span class='total_unitario'>$total_unitario</span></td>";
                echo "<td><a href='remover.php?id=$id'>[remover]</a></td>";
                echo "</tr>";
            }
            echo "</table>";
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


</body>

</html>

<?php
// echo "<pre>imprimindo todos";
// print_r($acompanhamento);
// echo "</pre>";

// echo "<br><br><br><br>";

// echo "Impressão de um por um acompanhamento: ";
// echo "<br>";

// foreach ($acompanhamento as $texto) {
//     echo "$texto<br>";
// }

// echo "<br><br><br><br>";
// echo "Impressão da quantidade de acompanhamentos: <br>";
// $tamanho = sizeof($acompanhamento);
// echo $tamanho;

// if ($tamanho > 3) {
//     $tamanho = $tamanho - 3;
// }

// echo "<br><br><br><br>";
// $preco_por_adicional = 3;
// $adicional = $tamanho * $preco_por_adicional;
// echo "Vai pagar por adicional: $adicional";



// ////////////////////////////cobertura//////////////////////////////

// echo "<pre>imprimindo todos coberturas";
// print_r($cobertura);
// echo "</pre>";

// echo "<br><br><br><br>";

// echo "Impressão de um por um coberturas";
// echo "<br>";

// foreach ($cobertura as $texto2) {
//     echo "$texto2<br>";
// }

// echo "<br><br><br><br>";
// echo "Impressão da quantidade de coberturas: <br>";
// $tamanho_cobertura = sizeof($cobertura);
// echo $tamanho_cobertura;

// if ($tamanho_cobertura > 3) {
//     $tamanho_cobertura = $tamanho_cobertura - 3;
// }

// echo "<br><br><br><br>";
// $preco_por_adicional2 = 2;
// $adicional2 = $tamanho_cobertura * $preco_por_adicional2;
// echo "Vai pagar por adicional: $adicional2";

// //////////////////////////////produto////////////////////////////
// $tamanho_acai = $produto;
// echo "<pre>imprimindo açai";
// print_r($produto);
// echo "</pre>";

// echo "<br><br>";
// echo "Impressão do valor do açai: <br> ";
// echo  $preco;

// echo "<br><br><br><br>";
// echo "Total que vai pagar: <br> ";
// $total = $preco + $adicional + $adicional2;
// echo $total;
// echo "<br><br>";

?>

<a href="produtos.php">Voltar</a>

</body>

</html>