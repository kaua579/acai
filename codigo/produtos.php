<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Document</title>
</head>
<body>
    <img id="titulop" src="titulop.png">
    <div class="container">
        <h1></h1>

        <form action="comprar.php" method="post" class="produtos">

            <div class="produto">
                <input type="checkbox" name="produto[]" value="200ml">
                <img id= "Açai 200ml" src="acai200ml.png" >
                <p>200 ML</p>
            </div>

            <div class="produto">
                <input type="checkbox" name="produto[]" value="300ml">
                <img id="acai 300ml" src="acai300ml.png">
                <p>300 ML</p>
            </div>

            <div class="produto">
                <input type="checkbox" name="produto[]" value="500ml">
                <img id="acai 500ml" src="acai500ml.png">
                <p>500 ML</p>
            </div>

            <div class="produto">
                <input type="checkbox" name="produto[]" value="700ml">
                <img id="acai 700ml" src="acai700ml.png">
                <p>700 ML</p>
            </div>

            <div class="produto">
                <input type="checkbox" name="produto[]" value="1l">
                <img id="acai 1l" src="acai1l.png">
                <p>1 L</p>
            </div>
            
              <a href="cobertura.php">Comprar</a> <br><br>

        </form>
    </div>            
</body>
</html>