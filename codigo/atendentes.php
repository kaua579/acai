<?php
    require_once "conexao.php";
    require_once "funcoes.php";

    $id = $_GET['id'];
        
    $atendente = listarAtendente($conexao);
    foreach($atendente as $tb_atendente);
        $idatendente = $atendente['idcliente']; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atendentes</title>
</head>
<h1>atendente</h1>
<body>
    
</body>
</html>