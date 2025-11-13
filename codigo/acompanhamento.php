<?php
session_start();
require_once 'verificarLogado.php';

if (isset($_SESSION['produto']) && isset($_SESSION['preco'])) {


  $produto = $_SESSION['produto'];
  $preco = $_SESSION['preco'];
} else {
  $produto = "Produto não selecionado";
  $preco = "";
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Acompanhamentos</title>
</head>

<body id="fundo-acompanhamento">
  <img src="./css/imagens/tigela1.png" id="tigela">

  <form action="carrinho.php" method="post">

    <div class="alinhar-checkbox">

      <div class="grupo-acompanhamentos">
        <div class="titulo-grupo">
          <h1 class="titulo-acompanhamentos">Acompanhamentos</h1>
        </div>

        <div class="colunas-acompanhamento">
          <div id="parte1" class="coluna">
            <label class="checkbox">Banana
              <input type="checkbox" name="acompanhamento[]" value="Banana">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Morango
              <input type="checkbox" name="acompanhamento[]" value="Morango">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Kiwi
              <input type="checkbox" name="acompanhamento[]" value="Kiwi">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Granola
              <input type="checkbox" name="acompanhamento[]" value="Granola">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Castanha-de-caju
              <input type="checkbox" name="acompanhamento[]" value="Castanha-de-caju">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Amendoim
              <input type="checkbox" name="acompanhamento[]" value="Amendoim">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Ovomaltine
              <input type="checkbox" name="acompanhamento[]" value="Ovomaltine">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Cereja
              <input type="checkbox" name="acompanhamento[]" value="Cereja">
              <span class="checkmark"></span>
            </label>
          </div>

          <div class="coluna">
            <label class="checkbox">Mel
              <input type="checkbox" name="acompanhamento[]" value="Mel">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Coco Ralado
              <input type="checkbox" name="acompanhamento[]" value="Coco Ralado">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Paçoca
              <input type="checkbox" name="acompanhamento[]" value="Paçoca">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Nutella
              <input type="checkbox" name="acompanhamento[]" value="Nutella">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Chocolate Branco
              <input type="checkbox" name="acompanhamento[]" value="Chocolate Branco">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Doce de Leite
              <input type="checkbox" name="acompanhamento[]" value="Doce de Leite">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Leite Ninho
              <input type="checkbox" name="acompanhamento[]" value="Leite Ninho">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Whey
              <input type="checkbox" name="acompanhamento[]" value="Whey">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>

      <div class="grupo-coberturas">
        <div class="titulo-grupo">
          <h1 class="titulo-coberturas">Coberturas</h1>
        </div>

        <div class="colunas-cobertura">
          <div id="parte2" class="coluna">
            <label class="checkbox">Leite Condensado
              <input type="checkbox" name="cobertura[]" value="Leite Condensado">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Chocolate Branco
              <input type="checkbox" name="cobertura[]" value="Chocolate Branco">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Pasta de Amendoim
              <input type="checkbox" name="cobertura[]" value="Pasta de Amendoim">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Chantilly
              <input type="checkbox" name="cobertura[]" value="Chantilly">
              <span class="checkmark"></span>
            </label>
          </div>

          <div class="coluna">
            <label class="checkbox">Doce de Leite
              <input type="checkbox" name="cobertura[]" value="Doce de Leite">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Calda de Morango
              <input type="checkbox" name="cobertura[]" value="Calda de Morango">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Calda de Caramelo
              <input type="checkbox" name="cobertura[]" value="Calda de Caramelo">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox">Calda de Chocolate Meio Amargo
              <input type="checkbox" name="cobertura[]" value="Calda de Chocolate Meio Amargo">
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="observacoes">
      <ul>
        <li>Complementos de graça (no máximo 3);</li>
        <li>Complementos de R$3,00 cada;</li>
        <li>Coberturas (R$1,50);</li>
      </ul>
    </div>

    <div class="botao-continuar">
      <button type="submit" class="continuar-comprando">Continuar comprando</button>
    </div>
  </form>
</body>

</html>