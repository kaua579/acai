<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/estilo.css">

  <title>Acompanhamentos</title>
</head>

<body>

  <!-- Container que separa os dois grupos lado a lado -->
  <div style="display: flex; justify-content: space-between; gap: 60px;">

    <!-- GRUPO 1: Acompanhamentos (lado esquerdo) -->
    <div>
      <!-- Título -->
      <div style="margin-bottom: 20px;">
        <h2 style="margin: 0;">Acompanhamentos</h2>
      </div>

      <!-- Duas colunas lado a lado -->
      <div style="display: flex; gap: 40px;">
        <!-- Coluna 1 -->
        <div style="display: flex; flex-direction: column; gap: 8px;" id="pt1">
          <label>Banana <input type="checkbox" name="item1"></label>
          <label>Morango <input type="checkbox" name="item2"></label>
          <label>Kiwi <input type="checkbox" name="item3"></label>
          <label>Granola <input type="checkbox" name="item4"></label>
          <label>Castanha-de-caju <input type="checkbox" name="item5"></label>
          <label>Amendoim <input type="checkbox" name="item6"></label>
          <label>Ovomaltine <input type="checkbox" name="item7"></label>
          <label>Cereja <input type="checkbox" name="item8"></label>
        </div>

        <!-- Coluna 2 -->
        <div style="display: flex; flex-direction: column; gap: 8px;">
          <label>Coco Ralado <input type="checkbox" name="item12"></label>
          <label>Paçoca <input type="checkbox" name="item13"></label>
          <label>Nutella <input type="checkbox" name="item14"></label>
          <label>Chocolate Branco <input type="checkbox" name="item15"></label>
          <label>Doce de Leite <input type="checkbox" name="item16"></label>
          <label>Leite Ninho <input type="checkbox" name="item17"></label>
          <label>Whey <input type="checkbox" name="item18"></label>
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
          <label>Coberturas <input type="checkbox" name="item19"></label>
          <label>Chocolate Branco <input type="checkbox" name="item20"></label>
          <label>Pasta de Amendoim <input type="checkbox" name="item21"></label>
          <label>Chantilly <input type="checkbox" name="item22"></label>
        </div>

        <!-- Coluna 4 -->
        <div style="display: flex; flex-direction: column; gap: 8px;">
          <label>Doce de Leite <input type="checkbox" name="item26"></label>
          <label>Calda de Morango <input type="checkbox" name="item27"></label>
          <label>Calda de Caramelo <input type="checkbox" name="item28"></label>
          <label>Calda de Chocolate Meio Amargo <input type="checkbox" name="item29"></label>
        </div>
      </div>
    </div>

  </div>
  <!-- --------------------------------------------------------------------------------------------------------------------- -->
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