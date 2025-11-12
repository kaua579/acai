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
  <title></title>
</head>
<body class="pagi">
      <img src="logiiii.png" alt="logo alapollos" class="fundoh"> 
      
      <h1 id="titu">QUEM NÓS SOMOS?</h1>
      
      <p id="historia">
        A Açaíteria Alapollos localizada no Ibirapuera surgiu quando Walter Salles fez uma grande viagem 
        pelo mundo e descobriu que em todos os lugares por onde ele andou havia uma açaíteria, mas no seu 
        bairro faltava uma. Inspirado por essa situação e decidido a construir uma açaíteria, Salles resolveu 
        iniciar um projeto com sua família para abrir a sua própria loja. <br><br>
        Iniciada em 2018 e finalizada em 2020, a Alapollos conta com uma estrutura maravilhosa e com sabores 
        de dar água na boca. Sempre decidida a trazer conforto aos nossos clientes, agora você pode fazer 
        seu pedido sem sair de casa!
      </p>

      <div class="botao_hist">
        <button class="b_voltarr" onclick="window.location.href='home.php'">Voltar</button>
      </div>
</body>
</html>
