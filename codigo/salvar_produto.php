<?php
session_start();

// Verifica se as variáveis "produto" e "preco" foram enviadas pelo formulário (via método POST)
if (isset($_POST['idproduto'])) {

    // Se o produto e o preço existirem no POST, salva esses valores dentro da sessão.
    // Assim, eles ficam guardados temporariamente no servidor, sem aparecer na URL.

    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    if (!empty($_POST['idproduto'])) {
        $_SESSION['carrinho'] = $_POST['idproduto'];
    }

    header("Location: acompanhamento.php");
    exit();
} else {
    // Caso o formulário não tenha enviado os dados esperados (produto e preço),
    // mostra uma mensagem de erro para o usuário.
    echo "Erro: produto não informado.";
}
