<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Treinadores - TechFit</title>
    <link rel="stylesheet" href="styletreinador.css">
</head>
<body>

<div class="container">
    <h2>Escolha seu Treinador</h2>

    <form method="POST">
        <select name="treinador" required>
            <option value="">Selecione um treinador</option>
            <option value="Rafael Costa">Rafael Costa</option>
            <option value="Camila Brros">Camila Barros</option>
            <option value="Bruno Sales">Bruno Sales</option>
            <option value="Sofia Mendes">Sofia Mendes</option>
            <option value="Lucas Pereira">Lucas Pereira</option>
            <option value="Fernanda Garcia">Fernanda Garcia</option>
        </select>

        <button type="submit" name="escolher">Confirmar Treinador</button>
    </form>

    <?php
    if (isset($_POST['escolher'])) {
        $treinador = $_POST['treinador'];
        echo "<div class='mensagem'>Treinador <strong>$treinador</strong> escolhido com sucesso!</div>";
    }
    ?>

    <a href="index2.php" class="voltar">← Voltar para a página principal</a>
</div>

</body>
</html>