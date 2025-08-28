<?php
    require_once "conexao.php";
    require_once "funcoes.php";

    $id = $_GET['idatendente'];
        
    $atendente = listarAtendente($conexao);
    foreach($atendente as $tb_atendente);
        $idatendente = $atendente['atendente']; 

        // echo "<pre>";
        //     print_r(($atendente));
        // echo "</pre>";
      
        echo "<tr>";
        echo "<td>$idatendente</td>";
        echo "<td>$horario_chegada</td>";
        echo "<td>$horario_saida</td>";
        echo "<td>$descricao</td>";
        echo "<td>$endereco</td>";
        echo "</tr>";
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