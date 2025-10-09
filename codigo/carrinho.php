<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=        <ul>


            <?php
            $produtos = Produtos($conexao);

            foreach ($produtos as $produto):
            ?>
                <li>
                    <input type="checkbox" name="idproduto[]" value="<?php echo $produto['idproduto'] ?>"> R$ <span><?php echo $produto['preco_venda']; ?></span> -- <?php echo $produto['nome']; ?>

                    <input type="number" name="quantidade[<?php echo $produto['idproduto']; ?>]" value="1" min="1">
                </li>
            <?php endforeach; ?>
        </ul>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>