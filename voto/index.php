<!DOCTYPE html>
<html>

<head>
    <title>Verificação de idade para votar</title>
</head>

<body>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém a idade do textarea
        $idade = isset($_POST['idade']) ? intval($_POST['idade']) : 0;

        // Verifica se a pessoa pode votar
        $podeVotar = ($idade > 16);

        // Exibe a mensagem correspondente
        if ($podeVotar) {
            echo "<p>Você pode votar!</p>";
        } else {
            echo "<p>Você não pode votar.</p>";
        }
    }
    ?>

    <!-- Formulário com textarea -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="idade">Digite sua idade:</label>
        <textarea id="idade" name="idade"></textarea>
        <br>
        <input type="submit" value="Verificar">
    </form>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</body>

</html>