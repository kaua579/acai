<?php
session_start();
require_once "funcoes.php";
require_once "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $produto = $_SESSION['produto'];
    $preco = $_SESSION['preco'];

    $acompanhamento = $_POST['acompanhamento'];
    $cobertura = $_POST['cobertura'];
    // $produto = $_POST['produto'];

    echo "<pre>imprimindo todos";
    print_r($acompanhamento);
    echo "</pre>";

    echo "<br><br><br><br>";

    echo "Impressão de um por um acompanhamento: ";
    echo "<br>";

    foreach ($acompanhamento as $texto) {
        echo "$texto<br>";
    }

    echo "<br><br><br><br>";
    echo "Impressão da quantidade de acompanhamentos: <br>";
    $tamanho = sizeof($acompanhamento);
    echo $tamanho;

    if ($tamanho > 3) {
        $tamanho = $tamanho - 3;
    }

    echo "<br><br><br><br>";
    $preco_por_adicional = 3;
    $adicional = $tamanho * $preco_por_adicional;
    echo "Vai pagar por adicional: $adicional";



    ////////////////////////////cobertura//////////////////////////////

    echo "<pre>imprimindo todos coberturas";
    print_r($cobertura);
    echo "</pre>";

    echo "<br><br><br><br>";

    echo "Impressão de um por um coberturas";
    echo "<br>";

    foreach ($cobertura as $texto2) {
        echo "$texto2<br>";
    }

    echo "<br><br><br><br>";
    echo "Impressão da quantidade de coberturas: <br>";
    $tamanho_cobertura = sizeof($cobertura);
    echo $tamanho_cobertura;

    if ($tamanho_cobertura > 3) {
        $tamanho_cobertura = $tamanho_cobertura - 3;
    }

    echo "<br><br><br><br>";
    $preco_por_adicional2 = 2;
    $adicional2 = $tamanho_cobertura * $preco_por_adicional2;
    echo "Vai pagar por adicional: $adicional2";

    //////////////////////////////produto////////////////////////////
    $tamanho_acai = $produto;
    echo "<pre>imprimindo açai";
    print_r($produto);
    echo "</pre>";

    echo "<br><br>";
    echo "Impressão do valor do açai: <br> ";
    echo  $preco; 

    echo "<br><br><br><br>";
    echo "Total que vai pagar: <br> ";
    $total = $preco + $adicional + $adicional2;
    echo $total


    ?>


</body>

</html>