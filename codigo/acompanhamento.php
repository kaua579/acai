<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">
  <title>Acompanhamentos</title>
</head>

<body id="fundo-acompanhamento">
  <div>

    <!-- Container que separa os dois grupos lado a lado -->
    <div style="display: flex; justify-content: space-between; gap: 60px;" class="alinhar-checkbox">

      <form action="carrinho.php" method="post">
        <!-- GRUPO 1: Acompanhamentos (lado esquerdo) -->
        <div>
          <!-- Título -->
          <div style="margin-bottom: 20px;">
            <h2 style="margin: 0;">Acompanhamentos</h2>
          </div>

          <!-- Duas colunas lado a lado -->
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
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Castanha-de-caju
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Amendoim
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Ovomaltine
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Cereja
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>
            </div>

            <!-- Coluna 2 -->
            <div style="display: flex; flex-direction: column; gap: 8px;">
              <label class="checkbox">Coco Ralado
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Paçoca
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Nutella
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Chocolate Branco
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Doce de Leite
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Leite Ninho
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Whey
                <input type="checkbox" name="acompanhamento[]" value="Kiwi">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>

        <!-- GRUPO 2: Coberturas (lado direito) -->
        <div>
          <!-- Título -->
          <div style="margin-bottom: 20px;">
            <h2 style="margin: 0;">Coberturas</h2>
          </div>

          <!-- Duas colunas lado a lado -->
          <div style="display: flex; gap: 40px;">

            <!-- Coluna 3 -->
            <div id="parte2" style="display: flex; flex-direction: column; gap: 8px;">
              <label class="checkbox">Coberturas
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Chocolate Branco
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Pasta de Amendoim
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Chantilly
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>
            </div>

            <!-- Coluna 4 -->
            <div style="display: flex; flex-direction: column; gap: 8px;">
              <label class="checkbox">Doce de Leite
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Calda de Morango
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Calda de Caramelo
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>

              <label class="checkbox">Calda de Chocolate Meio Amargo
                <input type="checkbox" name="cobertura[]">
                <span class="checkmark"></span>
              </label>
            </div>
          </div>
        </div>

    </div>

    <!-- Container principal -->
    <div style="display: flex; justify-content: space-between; gap: 60px; margin-bottom: 590px;">
      <!-- ... os dois grupos com colunas que já montamos ... -->
    </div>

    <!-- Observações no canto inferior esquerdo -->
    <div style="text-align: left;">
      <p style="margin: 15px 0;">*Complementos de R$3,00 cada;</p>
      <p style="margin: 15px 0;">*Coberturas (R$1,50);</p>
      <p style="margin: 15px 0;">*Complementos de graça (no máximo 3);</p>
    </div>

  </div>

  <input type="submit" value="Ver carrinho">
  </form>
</body>

</html>