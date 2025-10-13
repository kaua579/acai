<?php
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


    $acompanhamento = $_POST['acompanhamento'];
    $cobertura = $_POST['cobertura'];
    $produto = $_POST['produto'];
    
    echo "<pre>imprimindo todos";
    print_r($acompanhamento);
    echo "</pre>";
    
    echo "<br><br><br><br>";
    
    echo "Impressão de um por um";
    echo "<br>";
    
    foreach ($acompanhamento as $texto) {
        echo "$texto<br>";
    }
    
    echo "<br><br><br><br>";
    echo "Impressão da quantidade de itens: <br>";
    $tamanho = sizeof($acompanhamento);
    echo $tamanho;
    
    if ($tamanho > 3) {
        $tamanho = $tamanho - 1.5;
    }
    
    echo "<br><br><br><br>";
    $preco_por_adicional = 2;
    $adicional = $tamanho * $preco_por_adicional;
    echo "Vai pagar por adicional: $adicional";
    
    
    
    //////////////////////////////////////////////////////////
    
    echo "<pre>imprimindo todos";
    print_r($cobertura);
    echo "</pre>";
    
    echo "<br><br><br><br>";
    
    echo "Impressão de um por um";
    echo "<br>";
    
    foreach ($cobertura as $texto2) {
        echo "$texto2<br>";
    }
    
    echo "<br><br><br><br>";
    echo "Impressão da quantidade de itens: <br>";
    $tamanho_cobertura= sizeof($cobertura);
    echo $tamanho_cobertura;
    
    if ($tamanho_cobertura > 3) {
        $tamanho_cobertura = $tamanho_cobertura - 3;
    }
    
    echo "<br><br><br><br>";
    $preco_por_adicional2 = 2;
    $adicional2 = $tamanho_cobertura * $preco_por_adicional2;
    echo "Vai pagar por adicional: $adicional2";

//////////////////////////////produto////////////////////////////
    echo "<pre>imprimindo todos";
    print_r($produto);
    echo "</pre>";
    
    echo "<br><br><br><br>";


    ?>


</body>

</html>