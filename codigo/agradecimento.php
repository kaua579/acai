<?php
session_start();
require_once 'verificarLogado.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Obrigado</title>
</head>

<body id="fundo-agrad">
  <div class="tresrisco"></div>

  <div class="social">
    <img id="icones" src="iconess.png">
  </div>

  <p id="textoagradecimento">
    OBRIGADO <br> PELA <br> PREFERÊNCIA
  </p>

  <div class="botao-agradecimento">
    <a href="deslogar.php" class="btn_sair">Sair</a>
  </div>

  <a href="home.php" class="btn_voltar">Voltar</a>

</body>

</html>