<?php
require_once 'config/db.php';

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $query = "SELECT * FROM cadastros WHERE codigo_particular = '$codigo'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // ✅ Se o código for válido, redireciona para o index
        header("Location: index2.php");
        exit;
    } else {
        // ❌ Caso contrário, mostra mensagem de erro
        $mensagem = "<div class='msg-erro'>❌ Código inválido! Tente novamente.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login | TechFit</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <style>
        body {
            background-color: #0d0d0d;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container-cadastro {
            background-color: #111;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 0 15px #00e6e6;
            text-align: center;
            width: 350px;
        }

        h2 {
            color: #00e6e6;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #bfbfbf;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
            outline: none;
        }

        button {
            width: 100%;
            background-color: #00e6e6;
            border: none;
            color: #0d0d0d;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #00cccc;
        }

        .msg-erro {
            background-color: #ff5050;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: bold;
            box-shadow: 0 0 10px #ff5050;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }
    </style>
</head>
<body>
    <main class="container-cadastro">
        <h2>Login - Plano Particular</h2>
        <form method="POST">
            <label>Digite seu código:</label>
            <input type="text" name="codigo" required placeholder="Insira seu código de acesso">
            <button type="submit">Entrar</button>
            <?php echo $mensagem; ?>
        </form>
    </main>
</body>
</html>