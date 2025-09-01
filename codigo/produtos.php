<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>PRODUTOS</h1>

        <form action="comprar.php" method="post" class="produtos">

            <div class="produto">
                <img src="" alt="Açaí 200ml">
                <p>200 ML</p>
                <input type="checkbox" name="produto[]" value="200ml">
            </div>

            <div class="produto">
                <img src="" alt="Açaí 300ml">
                <p>300 ML</p>
                <input type="checkbox" name="produto[]" value="300ml">
            </div>

            <div class="produto">
                <img src="" alt="Açaí 500ml">
                <p>500 ML</p>
                <input type="checkbox" name="produto[]" value="500ml">
            </div>

            <div class="produto">
                <img src="" alt="Açaí 700ml">
                <p>700 ML</p>
                <input type="checkbox" name="produto[]" value="700ml">
            </div>

            <div class="produto">
                <img src="" alt="Açaí 1 litro">
                <p>1 L</p>
                <input type="checkbox" name="produto[]" value="1l">
            </div>

            <button type="submit" class="botao-comprar">
                Comprar
            </button>

        </form>
    </div>            
</body>
</html>