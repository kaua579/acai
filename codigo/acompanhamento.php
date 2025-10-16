<?php
// Inicia a sessão para poder acessar as variáveis salvas anteriormente
// (essas variáveis foram criadas na página "salvar_produto.php")
session_start();

// Verifica se as variáveis de sessão "produto" e "preco" existem
// Isso garante que o usuário realmente escolheu um produto na página anterior
if (isset($_SESSION['produto']) && isset($_SESSION['preco'])) {

    // Se existirem, pega os valores salvos e coloca em variáveis locais
    // Aqui, por exemplo, $produto pode valer "200ml" e $preco "9.90"
    $produto = $_SESSION['produto'];
    $preco = $_SESSION['preco'];

} else {
    // Caso o usuário tenha vindo direto pra essa página (sem escolher produto),
    // definimos valores padrões para evitar erros e mostrar uma mensagem adequada
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

  <!-- FORMULARIO -->
  <form action="carrinho.php" method="post">

    <!-- CONTAINER PRINCIPAL (LADO A LADO) -->
    <div style="display: flex; justify-content: space-between; gap: 60px;" class="alinhar-checkbox">

      <!-- GRUPO 1: ACOMPANHAMENTOS -->
      <div>
        <div style="margin-bottom: 20px;">
          <h2 style="margin: 0;">Acompanhamentos</h2>
        </div>

        <!-- DUAS COLUNAS -->
        <div class="coluna1" style="display: flex; gap: 40px;">

          <!-- Coluna 1 -->
          <div id="parte1" style="display: flex; flex-direction: column; gap: 8px;">
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

          <!-- Coluna 2 -->
          <div style="display: flex; flex-direction: column; gap: 8px;">
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
      <!-- FIM ACOMPANHAMENTOS -->

      <!-- GRUPO 2: COBERTURAS -->
      <div>
        <div style="margin-bottom: 20px;">
          <h2 style="margin: 0;">Coberturas</h2>
        </div>

        <!-- DUAS COLUNAS -->
        <div style="display: flex; gap: 40px;">

          <!-- Coluna 1 -->
          <div id="parte2" style="display: flex; flex-direction: column; gap: 8px;">
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

          <!-- Coluna 2 -->
          <div style="display: flex; flex-direction: column; gap: 8px;">
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
      <!-- FIM COBERTURAS -->

    </div>
    <!-- FIM CONTAINER PRINCIPAL -->

    <!-- OBSERVAÇÕES -->
    <div style="text-align: left; margin-top: 542px;" class = "texto_amarelo">
      <p style="margin: 15px 0;" class = "texto_amarelo">*Complementos de graça (no máximo 3);</p>
      <p style="margin: 15px 0;" class = "texto_amarelo">*Complementos de R$3,00 cada;</p>
      <p style="margin: 15px 0;" class = "texto_amarelo">*Coberturas (R$1,50);</p>
    </div>

    <!-- BOTÃO -->
    <div style="margin-top: 40px;">
      <input type="submit" value="Ver carrinho">
    </div>

  </form>
</body>

</html>
