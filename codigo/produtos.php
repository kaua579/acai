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

                <div class="produto">
                    <img src="acai200ml.png" alt="200 ml">
                    <p>200 ML - R$9,90</p>
                    <label class="caixa-check">
                        <input type="checkbox" name="idproduto[]" value="1" onchange="toggleHidden(this, 'produto_200ml', 'preco_200ml')">

                        <span class="checkmark"></span>
                    </label>
                </div>


                <div class="produto">
                    <img src="acai300ml.png" alt="300 ml">
                    <p>300 ML - R$14,90</p>
                    <label class="caixa-check">
                        <input type="checkbox" name="idproduto[]" value="2" onchange="toggleHidden(this, 'produto_300ml', 'preco_300ml')">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="produto">
                    <img src="acai500ml.png" alt="500 ml">
                    <p>500 ML - R$17,90</p>
                    <label class="caixa-check">
                        <input type="checkbox" name="idproduto[]" value="3" onchange="toggleHidden(this, 'produto_500ml', 'preco_500ml')">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <div class="produto">
                    <img src="acai700ml.png" alt="700 ml">
                    <p>700 ML - R$25,90</p>
                    <label class="caixa-check">
                        <input type="checkbox" name="idproduto[]" value="4" onchange="toggleHidden(this, 'produto_700ml', 'preco_700ml')">
                        <span class="checkmark"></span>
                    </label>
                </div>

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

        <script>
            function toggleHidden(checkbox, produtoId, precoId) {
                document.getElementById(produtoId).disabled = !checkbox.checked;
                document.getElementById(precoId).disabled = !checkbox.checked;
            }
        </script>
    </div>
    </div>

</body>

</html>