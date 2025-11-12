<?php
session_start();
    require_once "verificarLogado.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Document</title>
</head>
<body class="paggi">

  
  <div class="menuu">
    <a href="historia.php">Quem somos?</a>
    <a href="cardapio.php">Cardápio</a>
    <a href="produtos.php">Produtos</a>
    <a href="atendentes.php">Atendentes</a>
</div>

  
  <section class="tela">
    <div class="textoo">
      <h1>Energia gelada,<br> sabor que vicia!</h1>
      <p>Experimente o melhor açaí da cidade, saudável, cremoso e irresistível.</p>
      <button class="botao-fone">📞 (62) 9 9999-9999</button>
    </div>
    <div class="imagens">
    <img src="acais.png" alt="copos de açaí " class="imagens">
    </div>

  </section>

</body>
</html>