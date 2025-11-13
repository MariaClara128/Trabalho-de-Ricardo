<?php
require_once 'config/db.php'; // conexão com o banco Techfit

$mensagem = ''; // variável para exibir depois do cadastro

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $plano = $_POST['plano'];
    $ajuda = $_POST['ajuda'] ?? null;
    $documento = null;
    $codigo = ['P8650'];

    // Se for público e recebe ajuda, faz upload do documento
    if ($plano === 'publico' && $ajuda === 'sim' && isset($_FILES['documento'])) {
        $pasta = "uploads/";
        if (!is_dir($pasta)) mkdir($pasta);
        $documento = $pasta . basename($_FILES['documento']['name']);
        move_uploaded_file($_FILES['documento']['tmp_name'], $documento);
    }

    // Se for particular, gera código
    if ($plano === 'particular') {
        $codigo = "P" . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
    }

    // Salva no banco
    $sql = "INSERT INTO cadastros (nome, email, plano, ajuda_governo, documento, codigo_particular, data_cadastro)
            VALUES (?, ?, ?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nome, $email, $plano, $ajuda, $documento, $codigo);
    $stmt->execute();

    if ($plano === 'particular') {
        $mensagem = "Cadastro realizado com sucesso!<br>Seu código de acesso é:<br><strong>$codigo</strong>";
    } else {
        $mensagem = "Cadastro realizado com sucesso!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro | TechFit</title>
    <link rel="stylesheet" href="css/cadastro/style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro de Participante</h2>

        <form method="POST" enctype="multipart/form-data">
            <label>Nome:</label>
            <input type="text" name="nome" required>

            <label>E-mail:</label>
            <input type="email" name="email" required>

            <label>Tipo de Plano:</label>
            <select name="plano" id="plano" required>
                <option value="">Selecione...</option>
                <option value="publico">Público</option>
                <option value="particular">Particular</option>
            </select>

            <div id="campo-ajuda" style="display:none;">
                <label>Você recebe ajuda do governo?</label>
                <select name="ajuda" id="ajuda">
                    <option value="">Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>

            <div id="campo-documento" style="display:none;">
                <label>Envie seu documento (imagem ou PDF):</label>
                <input type="file" name="documento" accept=".jpg,.jpeg,.png,.pdf">
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <!-- Alerta: plano alterado -->
    <div id="msgPlano" class="alerta" style="display:none;">
        <div class="caixa-alerta">
            <p>Como você não recebe ajuda, seu plano foi alterado para <strong>PARTICULAR</strong>.</p>
            <button onclick="fecharAlerta()">Ok</button>
        </div>
    </div>

    <!-- Mensagem de sucesso -->
    <?php if (!empty($mensagem)): ?>
        <div class="alerta" id="mensagemFinal">
            <div class="caixa-alerta">
                <h3>TechFit</h3>
                <p><?php echo $mensagem; ?></p>
                <button onclick="window.location.href='cadastro.php'">Voltar</button>
            </div>
        </div>
    <?php endif; ?>

    <script>
        const plano = document.getElementById('plano');
        const campoAjuda = document.getElementById('campo-ajuda');
        const ajuda = document.getElementById('ajuda');
        const campoDocumento = document.getElementById('campo-documento');

        plano.addEventListener('change', () => {
            if (plano.value === 'publico') {
                campoAjuda.style.display = 'block';
            } else {
                campoAjuda.style.display = 'none';
                campoDocumento.style.display = 'none';
            }
        });

        ajuda.addEventListener('change', () => {
            if (ajuda.value === 'sim') {
                campoDocumento.style.display = 'block';
            } else if (ajuda.value === 'nao') {
                plano.value = 'particular';
                campoAjuda.style.display = 'none';
                campoDocumento.style.display = 'none';
                document.getElementById('msgPlano').style.display = 'flex';
            }
        });

        function fecharAlerta() {
            document.getElementById('msgPlano').style.display = 'none';
        }
    </script>
</body>
</html>
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
