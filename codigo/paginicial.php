<?php
session_start();
require_once 'verificarLogado.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="menu">
        <a href="historia.php">Quem somos?</a>
        <a href="cardapio.php">Cardápio</a>
        <a href="produtos.php">Produtos</a>
        <a href="atendentes.php">Atendentes</a>
    </div>

    <div class="conteudo">
        <div class="texto">
            <h1>Energia gelada,<br> sabor que vicia</h1>
            <p class="telefone">📞 (12) 3456-7890</p>
        </div>

        <div class="imagens">
            <img src="acai1.png" alt="Açaí 1">
            <img src="acai2.png" alt="Açaí 2">
        </div>
    </div>

</body>
</html>