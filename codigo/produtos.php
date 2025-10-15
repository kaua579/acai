<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Produtos - Açaí</title>
</head>
<body>      
    <div class="fundo">
        <div class="slice-diagonal"></div>
        <div id="fundo-produtos">
             <!-- Título -->
             <img src="titulop.png" alt="Título" class="titulo-img">

            <!-- Formulário geral de produtos -->
            <form action="salvar_produto.php" method="post" class="form-geral">
                   <div class="produtos">

                        <!-- Produto 200ml -->
                    <div class="produto">
                         <img src="acai200ml.png" alt="200 ml">
                        <p>200 ML - R$9,90</p>
                        <label class="caixa-check">
                             <input type="checkbox" name="check_200ml" value="1" onchange="toggleHidden(this, 'produto_200ml', 'preco_200ml')">
                             <span class="checkmark"></span>
                         </label>
                        <input type="hidden" name="produto" id="produto_200ml" value="200ml" disabled>
                        <input type="hidden" name="preco" id="preco_200ml" value="9.90" disabled>
                    </div>

                        <!-- Produto 300ml -->
                    <div class="produto">
                         <img src="acai300ml.png" alt="300 ml">
                            <p>300 ML - R$14,90</p>
                            <label class="caixa-check">
                                <input type="checkbox" name="check_300ml" value="1" onchange="toggleHidden(this, 'produto_300ml', 'preco_300ml')">
                                <span class="checkmark"></span>
                            </label>
                            <input type="hidden" name="produto" id="produto_300ml" value="300ml" disabled>
                            <input type="hidden" name="preco" id="preco_300ml" value="14.90" disabled>
                        </div>

                        <!-- Produto 500ml -->
                        <div class="produto">
                            <img src="acai500ml.png" alt="500 ml">
                            <p>500 ML - R$17,90</p>
                            <label class="caixa-check">
                                <input type="checkbox" name="check_500ml" value="1" onchange="toggleHidden(this, 'produto_500ml', 'preco_500ml')">
                                <span class="checkmark"></span>
                            </label>
                            <input type="hidden" name="produto" id="produto_500ml" value="500ml" disabled>
                            <input type="hidden" name="preco" id="preco_500ml" value="17.90" disabled>
                        </div>

                        <!-- Produto 700ml -->
                        <div class="produto">
                            <img src="acai700ml.png" alt="700 ml">
                            <p>700 ML - R$25,90</p>
                            <label class="caixa-check">
                                <input type="checkbox" name="check_700ml" value="1" onchange="toggleHidden(this, 'produto_700ml', 'preco_700ml')">
                                <span class="checkmark"></span>
                            </label>
                            <input type="hidden" name="produto" id="produto_700ml" value="700ml" disabled>
                            <input type="hidden" name="preco" id="preco_700ml" value="25.90" disabled>
                        </div>

                        <!-- Produto 1L -->
                        <div class="produto">
                            <img src="acai1l.png" alt="1 L">
                            <p>1 L - R$32,90</p>
                            <label class="caixa-check">
                                <input type="checkbox" name="check_1l" value="1" onchange="toggleHidden(this, 'produto_1l', 'preco_1l')">
                                <span class="checkmark"></span>
                            </label>
                            <input type="hidden" name="produto" id="produto_1l" value="1L" disabled>
                            <input type="hidden" name="preco" id="preco_1l" value="32.90" disabled>
                        </div>

                    </div>

                    <!-- Botão de compra -->
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
    </div>
</body>
</html>




<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Produtos - Açaí</title>
</head>
<body>
<div class="pag">  
    <div class="fundo">
        <img src="titulop.png" class="titulo-img">
             FORMULÁRIO GERAL (fica aqui em volta de todos os produtos) 
        <form action="salvar_produto.php" method="post" class="form-geral">

        <div class="produtos">

            <div class="produto">
                <img src="acai200ml.png" alt="200 ml">
                <p>200 ML - R$9,90</p>
                <form action="salvar_produto.php" method="post">
                    <input type="hidden" name="produto" value="200ml">
                    <input type="hidden" name="preco" value="9.90">

                    <label class="caixa-check">
                        <input type="checkbox" name="produtos[]" value="200ml">
                        <span class="checkmark"></span>
                    </label>
                </form>
            </div>

            <div class="produto">
                <img src="acai300ml.png" alt="300 ml">
                <p>300 ML - R$14,90</p>
                <form action="salvar_produto.php" method="post">
                    <input type="hidden" name="produto" value="300ml">
                    <input type="hidden" name="preco" value="14.90">

                    <label class="caixa-check">
                        <input type="checkbox" name="produtos[]" value="300ml">
                        <span class="checkmark"></span>
                    </label>
                </form>
            </div>

            <div class="produto">
                <img src="acai500ml.png" alt="500 ml">
                <p>500 ML - R$17,90</p>
                <form action="salvar_produto.php" method="post">
                    <input type="hidden" name="produto" value="500ml">
                    <input type="hidden" name="preco" value="17.90">

                    <label class="caixa-check">
                        <input type="checkbox" name="produtos[]" value="500ml">
                        <span class="checkmark"></span>
                    </label>
                </form>
            </div>

            <div class="produto">
                <img src="acai700ml.png" alt="700 ml">
                <p>700 ML - R$25,90</p>
                <form action="salvar_produto.php" method="post">
                    <input type="hidden" name="produto" value="700ml">
                    <input type="hidden" name="preco" value="25.90">

                    <label class="caixa-check">
                        <input type="checkbox" name="produtos[]" value="700ml">
                        <span class="checkmark"></span>
                    </label>
                </form>
            </div>
           
            <div class="produto">
                <img src="acai1l.png" alt="1 L">
                <p>1 L - R$32,90</p>
                <form action="salvar_produto.php" method="post">
                    <input type="hidden" name="produto" value="1L">
                    <input type="hidden" name="preco" value="32.90">

                    <label class="caixa-check">
                        <input type="checkbox" name="produtos[]" value="1L">
                        <span class="checkmark"></span>
                    </label>
                </form>
            </div>
        </div>
            <button type="submit" class="btn-comprar">Comprar</button>
        </form>
    </div>
</div>
</body>
</html>-->

        <!--<div class="produtos">
        
            <div class="produto">
                <img src="acai200ml.png" alt="200 ml">
                <p>200 ML</p>
                <a href="acompanhamento.php?produto=200ml" class="btn-comprar">Comprar</a>
            </div>

            <div class="produto">
                <img src="acai300ml.png" alt="300 ml">
                <p>300 ML</p>
                <a href="acompanhamento.php?produto=300ml" class="btn-comprar">Comprar</a>
            </div>

            <div class="produto">
                <img src="acai500ml.png" alt="500 ml">
                <p>500 ML</p>
                <a href="acompanhamento.php?produto=500ml" class="btn-comprar">Comprar</a>
            </div>

            <div class="produto">
                <img src="acai700ml.png" alt="700 ml">
                <p>700 ML</p>
                <a href="acompan/hamento.php?produto=700ml" class="btn-comprar">Comprar</a>
            </div>

            <div class="produto">
                <img src="acai1l.png" alt="1 L">
                <p>1 L</p>
                <a href="acompanhamento.php?produto=1l" class="btn-comprar">Comprar</a>
            </div>
        </div>-->