<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alapollos Açaíteria</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, Helvetica, sans-serif;
      background: linear-gradient(120deg, #6a0d91 50%, #a75eb5 50%);
    }

    .container {
      text-align: center;
    }

    .logo img {
      width: 160px;
      margin-bottom: 20px;
    }

    .title {
      font-size: 28px;
      font-weight: bold;
      color: #3a2b2b;
    }

    .subtitle {
      font-size: 16px;
      margin-bottom: 30px;
      color: #3a2b2b;
    }

    .btn {
      display: block;
      width: 200px;
      margin: 10px auto;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      background-color: #325d1a;
      color: white;
      transition: background 0.2s;
    }

    .btn:hover {
      background-color: #264914;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="logo.png" alt="Logo Alapollos">
    </div>
    <div class="title">ALAPOLLOS</div>
    <div class="subtitle">AÇAÍTERIA</div>
    <button class="btn">Cadastrar</button>
    <button class="btn">Log in</button>
  </div>
</body>
</html>
