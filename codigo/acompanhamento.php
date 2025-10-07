<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">

  <title>Acompanhamentos</title>
</head>
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
              <input type="checkbox" name="item1">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Morango
              <input type="checkbox" name="item2">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Kiwi
              <input type="checkbox" name="item3">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Granola
              <input type="checkbox" name="item4">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Castanha-de-caju
              <input type="checkbox" name="item5">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Amendoim
              <input type="checkbox" name="item6">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Ovomaltine
              <input type="checkbox" name="item7">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Cereja
              <input type="checkbox" name="item8">
              <span class="checkmark"></span>
            </label>
          </div>

          <!-- Coluna 2 -->
          <div style="display: flex; flex-direction: column; gap: 8px;">
            <label class="checkbox">Coco Ralado
              <input type="checkbox" name="item12">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Paçoca
              <input type="checkbox" name="item13">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Nutella
              <input type="checkbox" name="item14">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Chocolate Branco
              <input type="checkbox" name="item15">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Doce de Leite
              <input type="checkbox" name="item16">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Leite Ninho
              <input type="checkbox" name="item17">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Whey
              <input type="checkbox" name="item18">
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
              <input type="checkbox" name="item19">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Chocolate Branco
              <input type="checkbox" name="item20">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Pasta de Amendoim
              <input type="checkbox" name="item21">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Chantilly
              <input type="checkbox" name="item22">
              <span class="checkmark"></span>
            </label>
          </div>

          <!-- Coluna 4 -->
          <div style="display: flex; flex-direction: column; gap: 8px;">
            <label class="checkbox">Doce de Leite
              <input type="checkbox" name="item26">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Calda de Morango
              <input type="checkbox" name="item27">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Calda de Caramelo
              <input type="checkbox" name="item28">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox">Calda de Chocolate Meio Amargo
              <input type="checkbox" name="item29">
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
</body>

</html>










  <!-- <div style="display: flex; gap: 40px;">
  <div style="display: flex; flex-direction: column; gap: 8px;">
  <label>Banana <input type="checkbox" name="item1"></label>
  <label>Morango <input type="checkbox" name="item2"></label>
  <label>Kiwi <input type="checkbox" name="item3"></label>
  <label>Granola<input type="checkbox" name="item4"></label>
  <label>Castanha-de-caju <input type="checkbox" name="item5"></label>
  <label>Amendoim<input type="checkbox" name="item6"></label>
  <label>Ovomaltine <input type="checkbox" name="item7"></label>
  <label>Cereja <input type="checkbox" name="item8"></label>

</div>
<div style="display: flex; flex-direction: column; gap: 8px;">    
    <label>Coco Ralado <input type="checkbox" name="item12"></label>
    <label>Paçoca<input type="checkbox" name="item13"></label>
    <label>Nutella <input type="checkbox" name="item14"></label>
    <label>Chocolate Branco<input type="checkbox" name="item15"></label>
    <label>Doce de Leite <input type="checkbox" name="item16"></label>
    <label>Leite Ninho<input type="checkbox" name="item17"></label>
    <label>Whey<input type="checkbox" name="item18"></label>

  </div>
</div> -->


</body>

</html>