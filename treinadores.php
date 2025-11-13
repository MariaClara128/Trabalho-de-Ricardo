<?php
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Centro Esportivo TechFit - Nossos Funcionários</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<style>
:root {
  --cor-primaria: #00e6e6;
  --cor-secundaria: #098DAC;
  --cor-destaque: #04C260;
  --cor-fundo: #000000ff;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: var(--cor-fundo);
  color: #000000ff;
}

main {
  padding: 40px 20px;
}

/* ========================= */
/*     SEÇÃO FUNCIONÁRIOS    */
/* ========================= */
#funcionarios {
  max-width: 1200px;
  margin: 60px auto;
  padding: 40px;
  background: #000000ff;
  border-radius: 30px;
  box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

#funcionarios h2 {
  text-align: center;
  font-size: 3em;
  margin-bottom: 60px;
  color: black;
  background-color: var(--cor-primaria);
  padding: 20px;
  border-radius: 20px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.97);
}

.bloco-func {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  background: #080808ff;
  border: 2px solid var(--cor-secundaria);
  margin-bottom: 50px;
  padding: 30px;
  border-radius: 25px;
  box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
}

.bloco-func img {
  max-width: 300px;
  border-radius: 20px;
  flex: 1 1 300px;
  object-fit: cover;
}

.bloco-func div {
  flex: 1 1 500px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.bloco-func h3 {
  color: var(--cor-secundaria);
  font-size: 2em;
  margin-bottom: 10px;
}

.bloco-func p {
  font-size: 1.1em;
  color: #ffffffff;
  text-align: justify;
  text-indent: 30px;
  line-height: 1.6;
}

.bloco-func:nth-child(even) {
  flex-direction: row-reverse;
}

/* Botão de ação */
.cta {
  text-align: center;
  margin-top: 60px;
}

.botao {
  display: inline-block;
  background: var(--cor-primaria);
  color: white;
  padding: 18px 50px;
  font-size: 1.5em;
  border-radius: 50px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.botao:hover {
  background: var(--cor-destaque);
}

/* Responsivo */
@media (max-width: 768px) {
  .bloco-func {
    flex-direction: column !important;
    align-items: center;
    text-align: center;
  }

  .bloco-func img {
    max-width: 100%;
  }

  #funcionarios h2 {
    font-size: 2em;
  }
}

footer {
  background: #000000ff;
  text-align: center;
  padding: 20px;
  font-size: 16px;
  color: #333;
  margin-top: 40px;
}
</style>
</head>

<body>
<main>
  <section id="funcionarios">
    <h2>Nossos Funcionários</h2>

    <!-- FUTSAL -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgEFAhP9Z9vRQlwMT8xqBSPt7uDu1VtGBRxlNmP0wxekZdhLcxyZnlPEdzhXRaF2YZR0Q0CDlmeWeFOnAxVytDbDFSP8Kqp3eNBswzVCqE3AMXM_4FiixTxr5dmlUTcyDygHSurTvWRlSUrqzpsBvAvk12RqqiIJfpmAfX2k2jU7ZVjeUp0QIzd99fkC-XY" alt="Treinadores de Futsal">
      <div>
        <h3>Treinadores de Futsal
            (Pública/Particular)</h3>
        <p><b>Caua Oliveira</b> — Conhecido por sua visão de jogo e passes milimétricos, Caua ensina tática e controle de bola com excelência.</p>
        <p><b>Patrícia Rocha</b> — Goleadora nata e defensora implacável, inspira seus alunos com garra e técnica refinada.</p>
      </div>
    </div>

    <!-- BASQUETE -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi6uWc-zJ2FdSMqEhYOnbzSyBrjqeXWwCedngZ_VM66TsAQZfVC1aWCr5gkA-SC2duO9ckAzmZFEvqFYdscZHajjChG4LmMDOosFM-V7e7xZsivZYg7-FsrGQqZNvivkEfKfzuMwwVljSr5A-PR8tg-kqJBKIQxLWzDQwclm9WIafUd-w51unqAXM0L184x" alt="Treinadores de Basquete">
      <div>
        <h3>Treinadores de Basquete</h3>
        <p><b>Rafael Silva</b> — Ex-jogador profissional, foca em fundamentos sólidos e estratégias de equipe.</p>
        <p><b>Camila Mendes</b> — Instrutora energética e técnica, trabalha resistência física e mental com foco na defesa.</p>
      </div>
    </div>

    <!-- VÔLEI DE PRAIA -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgLRprIIPq13t-YtKRjQBZVn8CywNdsYIrf_rqg6ZZrF6Eg3UeLPAD35lFVQzNfDV3kjiZfhrbE76Qz-OtoUgScgye90TMJCKVUnDfdYGW9Kbdx1sGagEKBQxhRiGFxNUYLMGJ7t25hkF6A9EZaEAQrZXtjzdJwYYaURb06IiTffWaeixH_l21CXn8Hm3iu" alt="Treinadores de Vôlei de Praia">
      <div>
        <h3>Treinadores de Vôlei de Praia (Pública/Particular)</h3>
        <p><b>Ricardo Guedes</b> — Ex-atleta profissional, especialista em defesa e estratégias de vento na areia.</p>
        <p><b>Fernanda Diniz</b> — Potência na rede e especialista em ataques explosivos e bloqueio.</p>
      </div>
    </div>

    <!-- VÔLEI DE Quadra-->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiXlOeSfpgEXN2e3qLAMnLGzWBSGxlgiHmqAWRBNLrV6v7Wfb3tiqXRduHmUu0lisF83rvU6YZAV4rMby9BkW2JPFK1yW4a34FL-mIO_0Xgynr0nb87PaRMn_v_-IAOHn1bHKEgXrpnkV18i0qotlKano3MMUXUc1M7qkJobCc2v6NduQzkxOZLKKiewXA1" alt="Treinadores de Vôlei de Quadra">
      <div>
        <h3>Treinadores de Vôlei de Quadra</h3>
        <p><b>Felipe Castro</b> — Felipe é especialista em levantamentos precisos e estratégicos, com ampla experiência no vôlei de alto nível. Ele ensina visão de jogo, toque apurado e comunicação eficaz para formar equipes vencedoras..</p>
        <p><b>Clara Lacerda</b> — Clara é especialista em bloqueios e ataques potentes, reconhecida por sua técnica impecável e presença marcante na rede. Ela inspira seus alunos a desenvolver força, agilidade e confiança para dominar a quadra.</p>
      </div>
    </div>
    <!-- Handebol -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEj30FhEC0y1KZXK6MHb1zV9Kfxwsk07cpwq_B_PXbzTKKWjUPF5nxr47iWlydcEBaxZVZMQg6gd0yQ6AwUomoAnlYKX-AHw1mzeYSGiy_AJtD170L2i7EmfO1RgtDwMskrdKjg5yKf-J9D-cuBo-Jzk70W2DrAraRxYRTeVB9KzZu5yvdy5ByE5x0qB31Ao" alt="Instrutores de handebol">
      <div>
        <h3>Instrutores de Handebol</h3>
        <p><b>Gabriel Almeida</b> — Gabriel é especialista em bloqueios e ataques potentes, reconhecido por sua técnica impecável e presença marcante na rede. Ele inspira seus alunos a desenvolver força, agilidade e confiança para dominar a quadra.</p>
        <p><b>Aline Ferreira</b> — Carol é ex-goleira de destaque, admirada por sua inteligência tática e excelência defensiva. Com visão privilegiada de jogo, ensina posicionamento, marcação e ritmo, formando atletas com leitura apurada e disciplina exemplar.</p>
      </div>
    </div>

    <!-- JIU-JÍTSU -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEj4HA-NVd_83lvvjvjdWfBLRH5swyM0tEXkLVSEPevLvlWcqOya87USTwYt3mnG9kTUqUseAGDFzk5pXnnDPm5paJSnDURz38LZjlZ0G0laRlZmrYnuIDgnvxRdhVPlPMtn6pPTPa4jtWud3g1ZGd38FmchnngeO0pzyQA0kdsDUA_IR9mR9RIdPIrvH5pW" alt="Instrutores de Jiu-Jítsu">
      <div>
        <h3>Instrutores de Jiu-Jítsu</h3>
        <p><b>Mestre Rodrigo Sales</b> — Faixa preta renomado, ensina técnica e filosofia do Jiu-Jítsu com foco em eficiência e paciência.</p>
        <p><b>Bianca Castro</b> — Especialista em estrangulamentos e guarda, destaca técnica sobre força e respeito mútuo.</p>
      </div>
    </div>

 <!-- KARATER -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjmtdeyFpCYDj0ogRpCH3UqVtlY_Aj0q9tcPTbMwJIFcqY93I-bBC00qDAVoE1Y2agytOoj3_rrXEOwSRwwTPA3imcu7nogvM3jRtOuzZplOwW0Fbu29vrkRtBnLmwLYC-m_pikL6FdhTEptTT9JuFzP1mcOkfhLVaBzFyUDfroJ88wRiKqzEC5TIGA2TWv" alt="Instrutores de Karatê">
      <div>
        <h3>Instrutores de Karatê</h3>
        <p><b>Sensei Johnny Lawrence</b> — Sensei Hiroshi Tanaka é um mestre renomado em katas, conhecido por sua técnica precisa e disciplina mental. Ele busca formar atletas com excelência técnica e caráter sólido
        <p><b> Sensei Lívia Medeiros</b> — Lívia é especialista em agilidade, defesa pessoal e kumitê, destacando-se pelo ensino da velocidade, estratégia e autoconfiança. Sua missão é inspirar alunos a superar desafios com técnica e resiliência.</p>
      </div>
    </div>
     <!-- NATAÇÃO-->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjffjpdeHu_oI1apL8lM7nZ9L2xDExYTBgV2DjGeia3NjE4eEtlmKdR4CVCnpgSc1tTGukRKDN5GGXbn5a34mwdY8S6M03DQUIb0O1mqbQvVcGg9gNl55OoRglqb3EZZXnauSoch0JEPztwx8nSD6qOB48XO9lNR8ua2IcsMegzeqGZbeuM_vWTx4NsFUoP" alt="Instrutores de Natação">
      <div>
        <h3>Professora Ana Soares
</h3>
        <p><b>Ana é instrutora especializada em natação para bebês, conduzindo aulas seguras e divertidas em piscina aquecida sem cloro. Com experiência e certificação pediátrica, ela promove o desenvolvimento motor, o vínculo afetivo e a adaptação positiva dos pequenos ao meio aquático.</p>
    
      </div>
    </div>
    <!-- NATAÇÃO -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhIZ-CyykcuaAHRv3ocVoRVv65q8SZPrdTwTaEtFEwwTUdbvXDOo19DL9bqz3QO6UomYriMb8-IaXCkycTr0myuq78cjD92KTN0CHxcAecDM15yNjhVLZqEzaXl0gbRR2_lGOktLjh5muWiNYIQJWBaWL57Cp220wZvh8r7D_ez1tR9O3VNT5ibHFZCmbTD" alt="Instrutores de Natação">
      <div>
        <h3>Instrutores de Natação (Adultos, Criança e adoslecentes)</h3>
        <p><b>Professor Caio Nogueira</b> — Caio é especialista em performance e técnica de nado para jovens e adultos. Com experiência em natação competitiva, ele aprimora os quatro estilos, focando em resistência, velocidade e eficiência na água.<p>
        <p><b>Professora Bianca Silva</b> — Bianca é responsável pela iniciação e desenvolvimento aquático infantil. Com aulas lúdicas e progressivas, ela ajuda as crianças a ganhar confiança, coordenação e segurança na água, preparando-as para níveis mais avançados.</p>
      </div>
    </div>

    <!-- PERSONAIS -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi8NeKuQCx6hThvvlsvJeOHKirftFlPpiYWbhzWIx6sQwq9tDIT4g2LEAhvsXYx46viNpOzGM9depjUeTUM6HQ4zoRAfJ161AUky0g5Nfo5cuM9aG8GSfWyRmEBx_YCvQhoenicywQoBUGUm8Djijkp-MIDaRI35Hxz4oDXAg1ar-N9oHRrSj-P6fSV-eGo" alt="Personais">
      <div>
        <h3>Personais</h3>
        <p><b>Rafael Costa</b> — Especialista em hipertrofia e definição muscular, com foco em execução perfeita e resultados reais.</p>
        <p><b>Camila Barros</b> — Focada em resistência e preparação física, inspira superação e força mental em seus alunos.</p>
      </div>
    </div>

    <!-- PERSONAIS -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjpLOlWC10eVWhnpR7-8BHGZKE2ql1K6A9N9PCL7iXni0pvlZ0hmmsaZTgZke7xpf1mbMavM_er-aJvYoIOaJxErsJw9MKLxBeDOu3zQFvFJ5BpymFxEBpzUjqWBVQbgnEGrdOvujfpSMwZ7oJ7zZxiB0BHO2DlsrPooGRe0BpZYKcWVCmj0uF85bu0O8a6" alt="Personais">
      <div>
        <h3>Personais</h3>
        <p><b> Bruno Sales</b> —Bruno é especialista em treinamento funcional e HIIT, conhecido por sua energia contagiante e paixão por motivar. Suas aulas são dinâmicas, desafiadoras e voltadas para resultados rápidos e um estilo de vida saudável.</p>
        <p><b>Sofia Mendes</b> —Sofia é especialista em cinesiologia e biomecânica, criando treinos personalizados que aumentam o desempenho e previnem lesões. Ela ensina seus alunos a compreender o corpo e a treinar com técnica e propósito.</p>
      </div>
    </div>
    <!-- PERSONAIS -->
    <div class="bloco-func">
      <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjC2nmMSrxYPRQ0jaHImgc2tTnCAuseQI30N9M815U56UF-ZcMrtrjmDYpz00-oHA-FIcedIhSLGVSQfX_fCx3tsvhs8HoSMCDzkvabmA6Lm58XUg2Y5DbNdwQllPO6BPfc4aakyvNdxIuCjQ3pmlMSHNJWEPZlQgwgJhl1IMA6kBw1_xd7JzjZ-0wAvwQj" alt="Personais">
      <div>
        <h3>Personais</h3>
        <p><b> Lucas Pereira</b> —Lucas tem uma abordagem holística do bem-estar, unindo força, flexibilidade e equilíbrio. Especialista em pilates, yoga e mobilidade, ele cria treinos que integram corpo e mente, promovendo postura, alívio de dores e funcionalidade diária.</p>
        <p><b>Fernanda Garcia</b> —Fernanda é especialista em massagem, treinamento funcional e core stability. Com foco no peso corporal, ela melhora força, coordenação e agilidade, oferecendo treinos intensos e dinâmicos que elevam a performance e quebram a rotina.</p>
      </div>
    </div>

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



<footer>Centro Esportivo TechFit © 2025</footer>
</body>
</html>
