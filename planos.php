<?php
require_once 'config/db.php'; // deve definir $conn (mysqli)
session_start();
$usuario_id = $_SESSION['id'] ?? $_SESSION['usuario_id'] ?? 1; // ajuste conforme seu sistema

$mensagem = '';
$erro = '';

// função PHP para obter preço de um esporte
function preco_esporte($nome) {
    $nome = trim($nome);
    $m = [
        "Basquete" => 70,
        "Futsal" => 70,
        "Vôlei" => 70,
        "Vôlei de Praia" => 50,
        "Handebol" => 50,
        "Natação Bebês" => 130,
        "Natação Crianças" => 90,
        "Natação Jovens" => 110,
        "Natação Adultos" => 110,
        "Jiu Jitsu" => 90,
        "Karatê" => 75,
    ];
    return $m[$nome] ?? 0;
}

// preço fixos
$PRECO_ACADEMIA = 120;
$PRECO_NUTRI = 60;
$DESCONTO_ACADEMIA = 30;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // qual formulário foi enviado (plan1|plan2|plan3)
    $which = $_POST['form_plan'] ?? '';
    $planoLabel = '';
    $esportes = [];

    if ($which === 'plan1') {
        // 1 esporte
        $planoLabel = $_POST['plano_tipo_1'] ?? '1 Esporte';
        $e1 = $_POST['esporte1_1'] ?? '';
        if (!$e1) $erro = "Selecione o esporte para o Plano 1.";
        else $esportes = [$e1];
        $qAcademy = isset($_POST['academia_1']);
        $qTreino = isset($_POST['treino_1']);
        $qNutri = isset($_POST['nutri_1']);
    } elseif ($which === 'plan2') {
        $planoLabel = $_POST['plano_tipo_2'] ?? '2 Esportes';
        $e1 = $_POST['esporte1_2'] ?? '';
        $e2 = $_POST['esporte2_2'] ?? '';
        if (!$e1 || !$e2) $erro = "Selecione os 2 esportes para o Plano 2.";
        else $esportes = [$e1, $e2];
        $qAcademy = isset($_POST['academia_2']);
        $qTreino = isset($_POST['treino_2']);
        $qNutri = isset($_POST['nutri_2']);
    } elseif ($which === 'plan3') {
        $planoLabel = $_POST['plano_tipo_3'] ?? '3 Esportes';
        $e1 = $_POST['esporte1_3'] ?? '';
        $e2 = $_POST['esporte2_3'] ?? '';
        $e3 = $_POST['esporte3_3'] ?? '';
        if (!$e1 || !$e2 || !$e3) $erro = "Selecione os 3 esportes para o Plano 3.";
        else $esportes = [$e1, $e2, $e3];
        $qAcademy = isset($_POST['academia_3']);
        $qTreino = isset($_POST['treino_3']);
        $qNutri = isset($_POST['nutri_3']);
    } else {
        $erro = "Formulário inválido.";
    }

    if (!$erro) {
        // calcula preço no servidor (repetir lógica do JS para segurança)
        $soma_esportes = 0;
        foreach ($esportes as $sp) $soma_esportes += preco_esporte($sp);

        $total = $soma_esportes;
        if ($qAcademy) $total += $PRECO_ACADEMIA;
        if ($qNutri) $total += $PRECO_NUTRI;
        // desconto fixo se academia escolhida
        if ($qAcademy) $total -= $DESCONTO_ACADEMIA;
        // Treino personalizado não adiciona valor por enquanto

        // Insere no DB (prepared statement)
        $stmt = $conn->prepare("INSERT INTO planos_usuarios (usuario_id, plano, esporte, valor_total, data_cadastro) VALUES (?, ?, ?, ?, NOW())");
        if ($stmt) {
            $esportes_text = implode(', ', $esportes);
            $stmt->bind_param("issd", $usuario_id, $planoLabel, $esportes_text, $total);
            if ($stmt->execute()) {
                $mensagem = "✅ Plano cadastrado com sucesso! Valor total: R$ " . number_format($total, 2, ',', '.');
            } else {
                $erro = "Erro ao salvar: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $erro = "Erro na query: " . $conn->error;
        }
    }
}
?>

<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Planos - TechFit</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
/* básico, você pode mover para css/planos/style.css */
*{box-sizing:border-box}
body{font-family:Inter, Poppins, sans-serif; background:black; color:#111; margin:0; padding:30px}
.container{max-width:1200px;margin:0 auto;display:flex;gap:24px;align-items:flex-start}
.left, .right{background:#fff;border-radius:12px;padding:20px;box-shadow:0 6px 20px rgba(10,10,10,0.06)}
.left{width:380px}
.right{flex:1}
h1{margin:0 0 16px;color:black}
.tabela{width:100%;border-collapse:collapse}
.tabela th, .tabela td{padding:10px;border-bottom:1px solid #eee;text-align:left}
.tabela th{background:black;color:#fff;border-radius:6px 6px 0 0}
.planos-grid{display:flex;gap:16px;flex-wrap:wrap}
.plano-card{width:calc(33.333% - 10.666px);background:linear-gradient(180deg,#ffffff,#f8fbfd);border-radius:10px;padding:14px;border:1px solid #e6eef5;box-shadow:0 4px 14px rgba(11,71,113,0.06)}
.plano-card h3{margin:0 0 8px;color:b}
.plano-card p{margin:0 0 12px;color:#4b6b79;font-size:0.9rem}
.select, .select-multi{width:100%;padding:8px;border:1px solid #d0e1ea;border-radius:6px;margin-bottom:8px}
.checkbox-row{display:flex;gap:8px;align-items:center;margin-bottom:8px}
.checkbox-row label{font-size:0.9rem;color:black}
.btn{display:inline-block;padding:10px 12px;border-radius:8px;background:black;color:#fff;border:none;cursor:pointer;width:100%;font-weight:600;margin-top:6px}
.pricing{margin-top:12px;background:#eef7fb;padding:10px;border-radius:8px;border:1px solid #d7eef9}
.alert{padding:10px;border-radius:8px;margin-bottom:12px}
.sucesso{background:#e6f7ea;color:#145a2b;border:1px solid #c7ecd4}
.erro{background:#fff0f0;color:#7a1b1b;border:1px solid #f4c7c7}
@media (max-width:900px){
.plano-card{width:100%}
.container{flex-direction:column}
.left{width:100%}
}
</style>
</head>
<body>

<div class="container">
    <!-- Tabela de preços -->
    <div class="left">
        <h1>Tabela de Preços</h1>
        <table class="tabela">
            <tr><th>Esporte</th><th>Valor (R$)</th></tr>
            <tr><td>Basquete</td><td>70,00</td></tr>
            <tr><td>Futsal</td><td>70,00</td></tr>
            <tr><td>Vôlei</td><td>70,00</td></tr>
            <tr><td>Vôlei de Praia</td><td>50,00</td></tr>
            <tr><td>Handebol</td><td>50,00</td></tr>
            <tr><td>Natação Bebês</td><td>130,00</td></tr>
            <tr><td>Natação Crianças</td><td>90,00</td></tr>
            <tr><td>Natação Jovens</td><td>110,00</td></tr>
            <tr><td>Natação Adultos</td><td>110,00</td></tr>
            <tr><td>Jiu Jitsu</td><td>90,00</td></tr>
            <tr><td>Karatê</td><td>75,00</td></tr>
            <tr><th>Academia</th><td>120,00</td></tr>
            <tr><th>Nutricionista</th><td>60,00</td></tr>
            <tr><th>Desconto (Academia)</th><td>-30,00</td></tr>
        </table>
        <p style="font-size:0.9rem;color:#556">Ex.: Basquete (70) + Academia (120) - desconto 30 => <strong>R$160,00</strong></p>
    </div>

    <!-- Cards de planos -->
    <div class="right">
        <h1>Escolha seu Plano</h1>

        <?php if ($mensagem): ?>
            <div class="alert sucesso"><?= htmlspecialchars($mensagem) ?></div>
        <?php endif; ?>
        <?php if ($erro): ?>
            <div class="alert erro"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>

        <div class="planos-grid" id="planosGrid">
            <!-- PLANO 1 (1 esporte) -->
            <div class="plano-card">
                <h3>Plano 1 — 1 Esporte</h3>
                <p>Escolha 1 esporte e a variação</p>

                <form method="post" onsubmit="return confirmarCalculo(event, 'plan1')">
                    <input type="hidden" name="form_plan" value="plan1">
                    <label>Tipo de plano</label>
                    <select name="plano_tipo_1" class="select" required>
                        <option value="1 Esporte">Somente esporte</option>
                        <option value="1 Esporte + Academia">+ Academia</option>
                        <option value="1 Esporte + Academia + Treino Personalizado">+ Academia + Treino</option>
                        <option value="1 Esporte + Academia + Treino + Nutricionista">+ Academia + Treino + Nutri</option>
                    </select>

                    <label>Esporte</label>
                    <select name="esporte1_1" class="select" data-plan="1" data-index="1" onchange="calcularPlan(1)" required>
                        <option value="">Selecione...</option>
                        <option>Basquete</option><option>Futsal</option><option>Vôlei</option><option>Vôlei de Praia</option>
                        <option>Handebol</option><option>Natação Bebês</option><option>Natação Crianças</option><option>Natação Jovens</option>
                        <option>Natação Adultos</option><option>Jiu Jitsu</option><option>Karatê</option>
                    </select>

                    <div class="checkbox-row">
                        <input type="checkbox" id="academia_1" name="academia_1" onchange="calcularPlan(1)">
                        <label for="academia_1">Academia (R$120)</label>
                    </div>
                    <div class="checkbox-row">
                        <input type="checkbox" id="treino_1" name="treino_1">
                        <label for="treino_1">Treino Personalizado (incluso)</label>
                    </div>
                    <div class="checkbox-row">
                        <input type="checkbox" id="nutri_1" name="nutri_1" onchange="calcularPlan(1)">
                        <label for="nutri_1">Nutricionista (R$60)</label>
                    </div>

                    <div class="pricing" id="pricing_1">Total: R$ 0,00</div>
                    <button class="btn" type="submit">Selecionar Plano</button>
                </form>
            </div>

            <!-- PLANO 2 (2 esportes) -->
            <div class="plano-card">
                <h3>Plano 2 — 2 Esportes</h3>
                <p>Escolha 2 esportes e a variação</p>

                <form method="post" onsubmit="return confirmarCalculo(event, 'plan2')">
                    <input type="hidden" name="form_plan" value="plan2">
                    <label>Tipo de plano</label>
                    <select name="plano_tipo_2" class="select" required>
                        <option value="2 Esportes">Somente esportes</option>
                        <option value="2 Esportes + Academia">+ Academia</option>
                        <option value="2 Esportes + Academia + Treino Personalizado">+ Academia + Treino</option>
                        <option value="2 Esportes + Academia + Treino + Nutricionista">+ Academia + Treino + Nutri</option>
                    </select>

                    <label>Esporte 1</label>
                    <select name="esporte1_2" class="select" data-plan="2" data-index="1" onchange="calcularPlan(2)" required>
                        <option value="">Selecione...</option>
                        <option>Basquete</option><option>Futsal</option><option>Vôlei</option><option>Vôlei de Praia</option>
                        <option>Handebol</option><option>Natação Bebês</option><option>Natação Crianças</option><option>Natação Jovens</option>
                        <option>Natação Adultos</option><option>Jiu Jitsu</option><option>Karatê</option>
                    </select>

                    <label>Esporte 2</label>
                    <select name="esporte2_2" class="select" data-plan="2" data-index="2" onchange="calcularPlan(2)" required>
                        <option value="">Selecione...</option>
                        <option>Basquete</option><option>Futsal</option><option>Vôlei</option><option>Vôlei de Praia</option>
                        <option>Handebol</option><option>Natação Bebês</option><option>Natação Crianças</option><option>Natação Jovens</option>
                        <option>Natação Adultos</option><option>Jiu Jitsu</option><option>Karatê</option>
                    </select>

                    <div class="checkbox-row">
                        <input type="checkbox" id="academia_2" name="academia_2" onchange="calcularPlan(2)">
                        <label for="academia_2">Academia (R$120)</label>
                    </div>
                    <div class="checkbox-row">
                        <input type="checkbox" id="treino_2" name="treino_2">
                        <label for="treino_2">Treino Personalizado (incluso)</label>
                    </div>
                    <div class="checkbox-row">
                        <input type="checkbox" id="nutri_2" name="nutri_2" onchange="calcularPlan(2)">
                        <label for="nutri_2">Nutricionista (R$60)</label>
                    </div>

                    <div class="pricing" id="pricing_2">Total: R$ 0,00</div>
                    <button class="btn" type="submit">Selecionar Plano</button>
                </form>
            </div>

            <!-- PLANO 3 (3 esportes) -->
            <div class="plano-card">
                <h3>Plano 3 — 3 Esportes</h3>
                <p>Escolha 3 esportes e a variação</p>

                <form method="post" onsubmit="return confirmarCalculo(event, 'plan3')">
                    <input type="hidden" name="form_plan" value="plan3">
                    <label>Tipo de plano</label>
                    <select name="plano_tipo_3" class="select" required>
                        <option value="3 Esportes">Somente esportes</option>
                        <option value="3 Esportes + Academia">+ Academia</option>
                        <option value="3 Esportes + Academia + Treino Personalizado">+ Academia + Treino</option>
                        <option value="3 Esportes + Academia + Treino + Nutricionista">+ Academia + Treino + Nutri</option>
                    </select>

                    <label>Esporte 1</label>
                    <select name="esporte1_3" class="select" data-plan="3" data-index="1" onchange="calcularPlan(3)" required>
                        <option value="">Selecione...</option>
                        <option>Basquete</option><option>Futsal</option><option>Vôlei</option><option>Vôlei de Praia</option>
                        <option>Handebol</option><option>Natação Bebês</option><option>Natação Crianças</option><option>Natação Jovens</option>
                        <option>Natação Adultos</option><option>Jiu Jitsu</option><option>Karatê</option>
                    </select>

                    <label>Esporte 2</label>
                    <select name="esporte2_3" class="select" data-plan="3" data-index="2" onchange="calcularPlan(3)" required>
                        <option value="">Selecione...</option>
                        <option>Basquete</option><option>Futsal</option><option>Vôlei</option><option>Vôlei de Praia</option>
                        <option>Handebol</option><option>Natação Bebês</option><option>Natação Crianças</option><option>Natação Jovens</option>
                        <option>Natação Adultos</option><option>Jiu Jitsu</option><option>Karatê</option>
                    </select>

                    <label>Esporte 3</label>
                    <select name="esporte3_3" class="select" data-plan="3" data-index="3" onchange="calcularPlan(3)" required>
                        <option value="">Selecione...</option>
                        <option>Basquete</option><option>Futsal</option><option>Vôlei</option><option>Vôlei de Praia</option>
                        <option>Handebol</option><option>Natação Bebês</option><option>Natação Crianças</option><option>Natação Jovens</option>
                        <option>Natação Adultos</option><option>Jiu Jitsu</option><option>Karatê</option>
                    </select>

                    <div class="checkbox-row">
                        <input type="checkbox" id="academia_3" name="academia_3" onchange="calcularPlan(3)">
                        <label for="academia_3">Academia (R$120)</label>
                    </div>
                    <div class="checkbox-row">
                        <input type="checkbox" id="treino_3" name="treino_3">
                        <label for="treino_3">Treino Personalizado (incluso)</label>
                    </div>
                    <div class="checkbox-row">
                        <input type="checkbox" id="nutri_3" name="nutri_3" onchange="calcularPlan(3)">
                        <label for="nutri_3">Nutricionista (R$60)</label>
                    </div>

                    <div class="pricing" id="pricing_3">Total: R$ 0,00</div>
                    <button class="btn" type="submit">Selecionar Plano</button>
                </form>
            </div>

        </div> <!-- end planos-grid -->
    </div> <!-- end right -->
</div> <!-- end container -->

<script>
// mapas de preço (mesma lógica do PHP)
const precoEsporte = {
    "Basquete": 70,
    "Futsal": 70,
    "Vôlei": 70,
    "Vôlei de Praia": 50,
    "Handebol": 50,
    "Natação Bebês": 130,
    "Natação Crianças": 90,
    "Natação Jovens": 110,
    "Natação Adultos": 110,
    "Jiu Jitsu": 90,
    "Karatê": 75
};
const PRECO_ACADEMIA = 120;
const PRECO_NUTRI = 60;
const DESCONTO_ACADEMIA = 30;

function formatBR(v){
    return v.toLocaleString('pt-BR', {minimumFractionDigits:2, maximumFractionDigits:2});
}

function calcularPlan(planNumber){
    // pega selects do plano
    const container = document.querySelectorAll(`[data-plan="${planNumber}"]`);
    let soma = 0;
    container.forEach(sel => {
        const val = sel.value;
        if (val && precoEsporte[val] !== undefined) soma += precoEsporte[val];
    });

    const academia = document.getElementById('academia_' + planNumber)?.checked || false;
    const nutri = document.getElementById('nutri_' + planNumber)?.checked || false;
    // treino ignora preço

    let total = soma;
    if (academia) total += PRECO_ACADEMIA;
    if (nutri) total += PRECO_NUTRI;
    if (academia) total -= DESCONTO_ACADEMIA;

    const priceEl = document.getElementById('pricing_' + planNumber);
    if (priceEl) priceEl.textContent = "Total: R$ " + formatBR(total);
    return total;
}

// confirmação no envio: recalc e permite envio (ou bloqueia)
function confirmarCalculo(e, planKey){
    // planKey: 'plan1' | 'plan2' | 'plan3'
    e.preventDefault();
    const num = planKey === 'plan1' ? 1 : (planKey === 'plan2' ? 2 : 3);
    const total = calcularPlan(num);

    // mostra um confirm com valor (pode mudar p/ modal)
    if (!confirm("Confirma seleção do plano? Valor total: R$ " + formatBR(total))) {
        return false;
    }

    // antes de enviar, criamos um input hidden com valor_total para o servidor (opcional)
    const form = e.target;
    let inp = form.querySelector('input[name="valor_total"]');
    if (!inp) {
        inp = document.createElement('input');
        inp.type = 'hidden';
        inp.name = 'valor_total';
        form.appendChild(inp);
    }
    inp.value = total;

    // envia o formulário (submissão normal)
    form.submit();
    return true;
}

// inicializa pricing demos
document.addEventListener('DOMContentLoaded', function(){
    calcularPlan(1); calcularPlan(2); calcularPlan(3);
});
</script>
<!-- Botão de voltar -->
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


