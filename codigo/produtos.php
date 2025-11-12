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
    <title>Produtos - Açaí</title>
</head>
<body class="fundo">      
    
        <div class="slice-diagonal"></div>
        <div id="fundo-produtos">
             
             <img src="titulop.png" alt="Título" class="titulo-img">

            
            <form action="salvar_produto.php" method="post" class="form-geral">
                   <div class="produtos">

                        <!-- Produto 200ml -->
                        <div class="produto">
                         <img src="acai200ml.png" alt="200 ml">
                        <p>200 ML - R$9,90</p>
                        <label class="caixa-check">
                             <input type="checkbox" name="idproduto[]" value="1" onchange="toggleHidden(this, 'produto_200ml', 'preco_200ml')">

                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <!-- Produto 300ml -->

                        <div class="produto">
                         <img src="acai300ml.png" alt="300 ml">
                        <p>300 ML - R$14,90</p>
                        <label class="caixa-check">
                             <input type="checkbox" name="idproduto[]" value="2" onchange="toggleHidden(this, 'produto_300ml', 'preco_300ml')">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <!-- Produto 500ml -->
                        <div class="produto">
                            <img src="acai500ml.png" alt="500 ml">
                            <p>500 ML - R$17,90</p>
                            <label class="caixa-check">
                                <input type="checkbox" name="idproduto[]" value="3" onchange="toggleHidden(this, 'produto_500ml', 'preco_500ml')">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <!-- Produto 700ml -->
                        <div class="produto">
                            <img src="acai700ml.png" alt="700 ml">
                            <p>700 ML - R$25,90</p>
                            <label class="caixa-check">
                                <input type="checkbox" name="idproduto[]" value="4" onchange="toggleHidden(this, 'produto_700ml', 'preco_700ml')">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <!-- Produto 1L -->
                        <div class="produto">
                            <img src="acai1l.png" alt="1 L">
                            <p>1 L - R$32,90</p>
                            <label class="caixa-check">
                                <input type="checkbox" name="idproduto[]" value="5" onchange="toggleHidden(this, 'produto_1l', 'preco_1l')">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                    </div>

                    
                    <button type="submit" class="btn-comprar">Comprar</button>
                </form>

                <!-- Script para habilitar/desabilitar hidden inputs -->
                <script>
                    /*
                    Função: (toggleHidden)-> Ela recebe três parâmetros (checkbox, produtoId, precoId) e habilita ou desabilita

                    Objetivo:
                    Habilitar ou desabilitar os hidden inputs (produto e preço) correspondentes
                    a cada checkbox. Isso garante que apenas os produtos selecionados sejam enviados
                    ao PHP.

                    Como funciona:
                    1️⃣ A função recebe 3 parâmetros:
                    - checkbox: o elemento do checkbox que foi marcado/desmarcado
                    - produtoId: o 'id' do input hidden do produto
                    - precoId: o 'id' do input hidden do preço

                    2️⃣ checkbox.checked:
                    - true → checkbox marcado
                    - false → checkbox desmarcado

                    3️⃣ !checkbox.checked:
                    - '!' significa "não"
                    - true → se o checkbox NÃO está marcado
                    - false → se o checkbox está marcado

                    4️⃣ document.getElementById(produtoId).disabled = !checkbox.checked;
                    - Se o checkbox não estiver marcado, 'disabled = true' → input não será enviado
                    - Se estiver marcado, 'disabled = false' → input será enviado junto com o form

                    5️⃣ document.getElementById(precoId).disabled = !checkbox.checked;
                    - Mesma lógica aplicada ao hidden input do preço

                    6️⃣ Chamando a função:
                    - Cada checkbox no HTML possui:
                        onchange="toggleHidden(this, 'produto_X', 'preco_X')"
                        onchange → significa "quando o estado do checkbox mudar" (marcado ou desmarcado).
                    - 'this' passa o próprio checkbox
                    - 'produto_X' e 'preco_X' são os ids dos hidden inputs correspondentes

                    Resultado:
                    - Inicialmente, todos os hidden inputs estão desativados (disabled)
                    - Ao marcar um checkbox, os inputs correspondentes são ativados
                    - Ao desmarcar, os inputs voltam a ficar desativados
                    - Isso garante que apenas os produtos selecionados sejam enviados ao PHP
                    */

                    function toggleHidden(checkbox, produtoId, precoId) {
                        document.getElementById(produtoId).disabled = !checkbox.checked;
                        document.getElementById(precoId).disabled = !checkbox.checked;
                    }
                </script>
            </div>
        </div>
        
</body>
</html>

