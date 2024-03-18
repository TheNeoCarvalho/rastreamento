<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 80%;
      margin: 0 auto;
      text-align: center;
      padding-top: 100px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    img {
      width: 200px;
      margin-top: 20px;
      margin-bottom: 30px;
    }
    h1 {
      font-size: 36px;
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      margin: 8px;
      font-size: 18px;
      text-decoration: none;
      background-color: #8B75EA;
      color: #fff;
      border-radius: 5px;
    }
    .button:hover {
      background-color: #8B75EA;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Bem-vindo à Página Inicial</h1>
    <img width="200" src="https://pedidos.store/_img/rastrear-pedido.jpg" alt="">
    <a href="admin/index.php" class="button">Acesso Admin</a>
    <a href="site/index.php" class="button">Acesso ao Site</a>
  </div>

</body>
</html>
