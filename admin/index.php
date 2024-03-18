<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Status de Rastreamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #8B75EA;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
             width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #8B75EA;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Cadastro de Status de Rastreamento</h2>
    <form action="request.php" method="post">

        <label for="codigo_rastreamento">Código de Rastreamento:</label>
        <input type="text" id="codigo_rastreamento" name="codigo_rastreamento" required>

        <label for="status">Status de Rastreamento:</label>
        <select id="status" name="status" required>
            <option value="">Selecione o status</option>
            <option value="Em trânsito">Em trânsito</option>
            <option value="Entregue">Entregue</option>
            <option value="Aguardando retirada">Aguardando retirada</option>
            <option value="Devolvido">Devolvido</option>
        </select>

        <input type="submit" value="Cadastrar">
    </form>
</div>

</body>
</html>
