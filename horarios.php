<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Horários | Centro Esportivo TechFit</title>
    <link rel="stylesheet" href="css/horarios/styke.css">
</head>
<body>

<main class="container-horarios">
     
    <!-- NATAÇÃO -->
    <div class="esporte-card">
        <h2>NATAÇÃO</h2>
        <p><strong>Dias:</strong> Domingo, Terça, Quarta, Sexta</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Bebês</h3>
                <p>10:00 - 11:00</p>
            </div>
            <div class="categoria">
                <h3>Crianças</h3>
                <p>6:30 - 7:30</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>7:30 - 8:30</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>8:30 - 9:30</p>
            </div>
        </div>
    </div>

    <!-- FUTEBOL -->
    <div class="esporte-card">
        <h2>FUTEBOL</h2>
        <p><strong>Dias:</strong> Domingo, Terça, Quinta</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Crianças</h3>
                <p>6:00 - 7:00</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>8:00 - 9:00</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>19:00 - 20:00</p>
            </div>
        </div>
    </div>

    <!-- VÔLEI -->
    <div class="esporte-card">
        <h2>VÔLEI</h2>
        <p><strong>Dias:</strong> Domingo, Quarta, Quinta, Sábado</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Crianças</h3>
                <p>7:00 - 8:00</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>8:00 - 9:00</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>19:00 - 20:00</p>
            </div>
        </div>
    </div>

    <!-- BASQUETE -->
    <div class="esporte-card">
        <h2>BASQUETE</h2>
        <p><strong>Dias:</strong> Segunda, Quarta, Sexta</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Crianças</h3>
                <p>8:00 - 9:00</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>15:00 - 16:00</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>19:00 - 20:00</p>
            </div>
        </div>
    </div>

    <!-- HANDEBOL -->
    <div class="esporte-card">
        <h2>HANDEBOL</h2>
        <p><strong>Dias:</strong> Terça, Quarta, Sexta</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Crianças</h3>
                <p>6:00 - 7:00</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>8:00 - 9:00</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>19:00 - 20:00</p>
            </div>
        </div>
    </div>

    <!-- JIU-JITSU -->
    <div class="esporte-card">
        <h2>JIU-JITSU</h2>
        <p><strong>Dias:</strong> Segunda, Quinta, Sexta, Sábado</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Crianças</h3>
                <p>8:00 - 9:00</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>17:00 - 18:00</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>19:00 - 20:00</p>
            </div>
        </div>
    </div>

    <!-- KARATÊ -->
    <div class="esporte-card">
        <h2>KARATÊ</h2>
        <p><strong>Dias:</strong> Segunda, Quinta, Sexta, Sábado</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Crianças</h3>
                <p>8:00 - 9:00</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>16:00 - 17:00</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>19:00 - 20:00</p>
            </div>
        </div>
    </div>

    <!-- VÔLEI DE PRAIA -->
    <div class="esporte-card">
        <h2>VÔLEI DE PRAIA</h2>
        <p><strong>Dias:</strong>Domingo, Sexta</p>
        <div class="categorias">
            <div class="categoria">
                <h3>Crianças</h3>
                <p>7:00 - 8:00</p>
            </div>
            <div class="categoria">
                <h3>Jovens</h3>
                <p>8:00 - 9:00</p>
            </div>
            <div class="categoria">
                <h3>Adultos</h3>
                <p>19:00 - 20:00</p>
            </div>
        </div>
    </div>
    <a href="index.php" class="btn-voltar">⬅ Voltar ao Início</a>
</main>
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
