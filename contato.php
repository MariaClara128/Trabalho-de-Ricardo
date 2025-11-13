<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | Sua Empresa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="hero">
    <h1>Fale Conosco</h1>
    <p>Envie sua mensagem e nossa equipe entrará em contato com você.</p>
</section>

<form method="POST" action="enviar.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required style="width:100%;padding:8px;border-radius:5px;border:none;">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required style="width:100%;padding:8px;border-radius:5px;border:none;">

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" rows="5" required style="width:100%;padding:8px;border-radius:5px;border:none;"></textarea>

    <button type="submit">Enviar Mensagem</button>

    <?php if (isset($_GET['sucesso'])): ?>
        <p class="msg-sucesso">Mensagem enviada com sucesso! ✅</p>
    <?php elseif (isset($_GET['erro'])): ?>
        <p class="msg-erro">Erro ao enviar a mensagem. ❌</p>
    <?php endif; ?>
</form>
<a href="index.php" class="btn-voltar">⬅ Voltar ao Início</a>
<style>
.btn-voltar {
    display: inline-block;
    background: #111;
    color: #fff;
    text-decoration: none;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 600;
    transition: background 0.3s;
    margin-bottom: 20px;
}
.btn-voltar:hover {
    background: #333;
}
</style>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mensagem = htmlspecialchars(trim($_POST["mensagem"]));

    // E-mail da sua empresa
    $destinatario = "seuemail@empresa.com"; 
    $assunto = "Nova mensagem de contato de $nome";
    $corpo = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";

    $cabecalhos = "From: $email\r\nReply-To: $email\r\n";

    if (mail($destinatario, $assunto, $corpo, $cabecalhos)) {
        header("Location: contato.php?sucesso=1");
        exit;
    } else {
        header("Location: contato.php?erro=1");
        exit;
    }
}
?>
<style>
.btn-voltar {
    display: inline-block;
    background: #111;
    color: #fff;
    text-decoration: none;
    padding: 10px 18px;
    border-radius: 8px;
    font-weight: 600;
    transition: background 0.3s;
    margin-bottom: 20px;
}
.btn-voltar:hover {
    background: #333;
}
</style>

