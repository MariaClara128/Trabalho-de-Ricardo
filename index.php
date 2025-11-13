<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Centro Esportivo TechFit</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inicio/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiwP0DDxMmfNvRfArEKbO49OavRQ8vOMM3A6pQZhYWggkZXYWUqAvFjVH_dWR6WH6OtJesS3IDLDadsxS7y4CzNuCsdVFIPfO7j6yJ72udeP-J3cV08sBSMx0hQLXp5JxOYYgOoQN1AIqcgFgFxjirp3KBptBi2eaOa12AjS49oubdpwItgi92MnNyqK-KY=w200-h185"  
                 style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;" 
                 alt="Logo TechFit">
        </div>

        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="planos.php">Planos</a>
            <a href="treinadores.php">Treinadores</a>
            <a href="horarios.php">Horários Particular</a>
            <a href="horarioss.php">Horários Pública</a>
            <a href="contato.php">Contato</a>
            <a href="cadastro.php" class="login-btn">Cadastro</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

<section class="apresentacao">
    <div class="conteudo-apresentacao">
        <div class="texto">
            <h1>Bem-vindo à <span class="destaque">TechFit</span></h1>
            <h2>Nosso Centro Esportivo</h2>
            <p>
                A <strong>TechFit</strong> é um centro esportivo dedicado a unir tecnologia, saúde e performance.
                Aqui, cada treino é pensado para que você alcance o seu melhor, seja no esporte ou na vida.
            </p>
        </div>
        <div class="imagem">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi40GOFpiExrejG8chxcBsQC4WP5XVGxUrHjOWP6FtCntxPjsbx_aUI1eiNUYcsReQ8tF4-UHPORkEIVR_CPsetaCO4vPYAmJViUnQ_Uyk_HI_UzvY5675KxqvFxWLzDuiVEADeOBBKtwzDNH4uSlXL1foVML18TIqWEhHKrPKmVCNWY_92iLXp_LkxS7Ba" alt="Fachada da TechFit">
        </div>
    </div>
</section>

    <!-- Seção 2 - Estrutura -->
    <section class="estrutura">
        <h2>Nossa Estrutura</h2>
        <p>
            A TechFit conta com quadras amplas, piscina profissional, salas de treino equipadas e um ambiente 
            preparado para receber atletas, estudantes e famílias. Nossos espaços foram pensados para proporcionar 
            conforto, segurança e o melhor desempenho em cada modalidade.
        </p>
        <div class="galeria">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjVtd3T6pj1X9NzOEk4rQ3VSEW2Qptlb883KQEGXVZ0BwCW8md0ZJ2mfafFC_wQ2bNIZkzdZzHixtLi_kmCGDKBr3kC8Wkgd_vaKVB_mtmgddTTCxq8pVGj8E0ABpieJ-mSXxRG_hQWquLR0XIciwABFnx6i_WNmTMixqfgiG6L76xbJet-OgfdzR3EBq_p" alt="Academia">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiBnItvqdtX9AF3KQZ4zTih43GgO-zkM3L9oQpzjF2D-DxCfYSBuLewU86LxjaROcsD-PioZUWV-G_t9TZ8j4k0nC-55M2jVWQLeRQnezb3obXY2d2j39cQN_t27juPGHYwzwqpRkIfsS6kuJU3tJxrXkzyAT08cneyGDyjXTVfq2rF8ZNahfsC8PlOBY9u" alt="Recepção">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjTTUJVAPZ99G_EpqFjtkK_iyhm5SLfUgIJSz5NuZF4ScIkW2qnRPfGWeVNsVUfaZB9VvZRzM1IkbC_FAmfXSKW7x9zj7My7K-xuSVj5SLQWjC88FMZ7LcDl2EXMuxbu-XpwRpJv-CJHaA4NldnqVE7NI9rEaXoEE9iholvQQ_sV9IjK_F2Jr6NZQhV6tJY" alt="Enfermaria">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEj02gtVByDiJRrMpGhP4a7YjPhpn0--SqJ2InqAS1Pxz9TvW1MU5Dmr9gdyRKbkT-wBnWM-gZhYeH-oaIoqvKLvn2ySMing_atIG8KvZnBMVLpi5gX40ux-TDndvrFSFKB6JgZjseIQlubk363Co3RaMHAWWblH_VRXInZ7iTUsV9k1O4k9k7csN2jSfuok" alt="Sala de massagem">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgeBEd580LFlHaxwvykqX_0R2rmoziNDX1HGUDd7y_b-rZns-qHagmtq3v6w--fEBBjbXdvCkBsFRRNvBYQW9yTWZXHswOz94Y2LdaQ-Bu5la0Ulcw_YNvMdxcIhMMEbKjlCodKHyaBYYexWw8cY0uArH58cfdSOZbFzrxa1q5zrb1fRTV_1kfZ8w7HyUk6" alt="Sala de pilates">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjCn1leIliJoSMWetwDlhoNCvKu0nzTEMKU9ZaPrj9DKDSKqGQxZXVD6ugUY1eAVOtb35BaxvJPXO7VE3o06LvsTvXPqwP5VdkQbzURng1ugYVuG2e6gXPu7oSde7Ga12tw_U0svqBXIo9nZKSm22ZBRUFNJUF9M3OSjG-3mxZgViwlaa1zWzwets_yAJ9r" alt="Refeitorio">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjsRrj3MslH6dXQlyB-MKUvn2m5jzpn9stY5mrW9I_Arc-BChDui9UlRvVlgexer4lw4fwg-p1yON0hk_YDH6JzIVDcZfBfwYpCay_0-pJyYFT04HUcs9nK6kJ0CX6Y_TdCx35QbCQN-IAbQnEl3oi-kkpIW4QFigT8j95Z4kr7puPJQLkvHsKa-YaBzHhs" alt="Escritorio">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgJWMcK1a3gDMzn5qTZP-OguxpI0X7Eg3TFgSHw_gH4epMh9G2Q-C2sT6AfawYiBCScmVKkbUDsp4-DZ7RMN4Vqm7YJT2GbmYkOjTG5q-U2mEJIQm135GuMWWPVvgQn6cAJXH6WhWg-LK7k0U5BgUE2TxdyFZezPENvCJ46KXzpIe5SNIRuLhrZ19hN36mH" alt="Sala Nutricionista">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEh3C9HUGdAhyt4rpCGEE3aVxgL8MgpG8fYidnkG54Ymd_GkN-FsbeMqoTwDsMzq2iJxcxHpAC9036AMpq50bWtZi2TXfB_oIGkXdovcYCUj-jffRmMrEk8s2BN1LsUHOVZKR6rEZJHhUTNj2rIr8LMobq3Kn71enhyoaXe6l1VhNTlQE_hLFaC6E0xvn_jW" alt="Banheiro Feminino">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiG_YChg0MCaS1FYMZZxYJ4i33Dz7VeMnVbdqDZBLqrym77tGGlhKyuGnLphzbLQlFG4Hv0iW0mH_sTu0Mna-FWg8LomZydhLeDcE76ehPoPIWiY8B3p6r-qIo-9_pIA7FduvgHXZjkKiTZRvhwBJYuyVjiwWoRHOXpCoC-tKhKKRItXPAXcMOrZSN2pvbX" alt="Banheiro Masculino">
          
        </div>
    </section>

    <!-- Seção 3 - Modalidades -->
    <section class="modalidades">
        <h2>Estrutura Esportiva</h2>
        <div class="cards">

            <div class="card">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhd7R9tm-cDsB-dGDwEVaUcyjGOmW-yKWRQTeSQv7M82AISO6Fc2q-A2Jvcx6kKIbsbMeD30KiyS7UMr5k8uHc_IrsRUCCASVO9cSHcc1WB6d1akYl8ML1cLWKsF6ShMzYx95eC9RzX827GX2l9-_WaB6RIzI-LOGoyhfcf1OUd_h6hoeO2GTrOp8SKc18y" alt="Volei de praia">
                <h3>Vôlei de Praia</h3>
                <p>Disponível para <span class="publico">Público</span> e <span class="particular">Particular</span>.</p>
            </div>

             <div class="card">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjsB6UgyrBrNN0EM9SMz94vPG7VqSdlCNuNjZv8GvF3MJk-v67R5DoOZk0n5aINVeSGgMZnCIa-N406HXnwzw8H6rDsz0GFseRd2HfynHjt9zmiq2_67a7xl4rCIsAL21fJ0mm197UGCetWBy1M2HsFoT4UQIP6FWHEjLUx5txMSqcbnOPxWaEyxs7uEgNm" alt="Volei de Quadra">
                <h3>Vôlei de Quadra</h3>
                <p>Exclusiva para o plano <span class="particular">Particular</span>.</p>
            </div>


            <div class="card">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgBrctG7QZP30HRnka5DtTudC3tvia2ZgJYmkgUoAq2jZHkz9uGfpCkxiBRf5H8BxAwqcu8ClPTVwchBj7yp7f-kGud_fuSjR5P-ko2OfTi9qCNO_hg2Ro5GVtMYzBQ0_Z7IuES47KdqG3Q0-rQ1L6eZZz6QNq7v20x61djfUcrrN-iboitHnkwhug1QYHb" alt="Quadra de Futsal">
                <h3>Futsal</h3>
                <p>Disponível para <span class="publico">Público</span> e <span class="particular">Particular</span>.</p>
            </div>

            <div class="card">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEitu6EGLenQEZUwdkC5DhSmp3r6ELaehwH1PAY-PhqBKGbDJtODyeh5urkDDI6TXcYaN5XmQ-d065QSBvxlJic0h_-x-Zcw713-mL-ocDOm4GcbSdtj-MEPSYGFyHpDiTZmqtTlyd3_mKf4Co0oweOEIcW9DUizyFikHUncQHifFiLE8BjkIU1Gp5UvxiEA" alt="Quadra de Basquete">
                <h3>Basquete</h3>
                <p>Exclusiva para o plano <span class="particular">Particular</span>.</p>
            </div>

            <div class="card">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjROwtwugFszvj5Wie6Wcifft73q_KkE7a96TZxl99M3-UZFAlckQZXzJpYo7Y4V8xJzxPGuVngG5RPTILTqMO54hRkdqlJBJfaG36gzzc7GxJtStP-NewTO9ycZ9jUnS3EqhI8q3649UsZQ4R4dPb9ADpZBOWg2Yvs9FdQ7AJWwocrzBj4nVzBWh8QHtN7" alt="Natação">
                <h3>Natação Criança/Adultos</h3>
                <p>Exclusiva para o plano <span class="particular">Particular</span>.</p>
            </div>

            
            <div class="card">
                 <img src="https://blogger.googleusercontent.com/img/a/AVvXsEh_CFi6GePmcZ_-6C2jDuzWEiZ5PVTv4-Kdg_FQnqgRtggzuSYzEzNU4lvClq1J7HVe8L5-vfn4k4VGDzkCu_hCrQGMk7Ke5t1_1WCfeHSMUnXvftcGtJh5bU4Brql19fakX4SilskHzeP4Wac9aFDf8SfPa7q8s48SgwXPhXLk7yBT7lqyh7biR7O7sbNk" alt="Natação">
                <h3>Natação Bebês</h3>
                <p>Exclusiva para o plano <span class="particular">Particular</span>.</p>
            </div>

            <div class="card">
                 <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjVJE2xqfFhBsfBsxK5yZM6xfcMya54jzmSSLtlHtbtJ_iUDDQydIohcbDe51naLfPWqvrVcaTjPyNnGWldRLm8SuJ0XYhijMpH30V_3DFdgNUlOPKVe2xZAa_zOYGHpykn6gaikUDn472DEA99ANZ04ZTLXsvC2ADdSZAKqPgSNElTHN0zWWYMQGus9qXv" alt="Sala">
                <h3>Jiu-Jitsu</h3>
                <p>Exclusiva para o plano <span class="particular">Particular</span>.</p>
            </div>

            <div class="card">
                <img src="https://blogger.googleusercontent.com/img/a/AVvXsEj_mh7EQs2XmRoGz9oDbJ9KyecZ_OjvCcNQe1iWAoQOjsjJqYSZ3ZkwsqH_ZjY5AQxN3Y4m5i2DVqV6UnaSovD3O18ev6nhtBAd1i42QHyCgI_PBVEYhPPErrOwTiHVQsl--rWyVoLdJYtkdGLktv806DioZJTnHh7E3k5hPIqkAtwIDB_o-iqVLGqYnFa6" alt="Sala">
                <h3>Karatê</h3>
                <p>Exclusiva para o plano <span class="particular">Particular</span>.</p>
            </div>
        </div>
        <!-- Seção 2 - Estrutura -->
    <section class="estrutura">
        <h2>Nossas Ações</h2>
        <div class="galeria">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiawZ70PYuVlG0Dl8uR35J8Rq6PWPnfRUMOzIPjJHjMJ7uNpAfXtbP8h-aSPLJ-fqleZmMPSFQ4GRmqRNxCmJ_oHWPi90pMl7ZXPndx8bkL1BSKTRYAFFdioAZaekT5jew0uNJanKPnEDejs7cauZFkR8Xbcer3eAEBky54aRLTGcHKmNrSqmwJGYN7ZNIP" alt="Ações">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjiw9UYQtKXDPCV7x1eGc6F470y4HhYIKu5h-koHfP702u0ovGUqvyUK1_BMBU_ajztCUFp7ZG6abZAFfjKOnL9KuQ3aJ6YxChdeiALF60tQM4lNmGQNqfcs5_Cf84nxEJxePnRtHAkRBCi8CurmWA3w9QhsZJkAqsFFHL5d3Ugy7LtxWJWugfjFfhfvOQR" alt="Ações">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhMej0hzzgwurosknSQvzi4iD2pPW4J0TO01fZu7Hdcj_miqJNtOHxmf03ox8Wt-4NGf6wCHXY9opIMnsfjVW6UieMER_AUsqz7rTrKz_xIzCy1n-obBeBDyDhWQqozT7nWIcsAOQEitSLn1jpWYhw4bALsLjtpf6OkbgA4mGVpsEVqOjS_N0WHyT8ZIkJD" alt="Ações">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEg_o68qYXzKCekAy2-BTru1oya2s11LVvJImd3dP0XLZaodCmZ2ikpNwzrg0SDZpuJwJ1C0jyTB9mL0QNu2cjVVSgiwd9zCD3WMAWNU0hA3EWl4QVoXin5g409XGVLHIgCxwDVNtLD9EWiqDhkq-_Y9t8hp1OTKoldoeRxsPf1xKrm1TSaTXyF-d4Klxk8_" alt="Ações">
            
          
        </div>
    </section>
    </section>
</body>
</html>
</html>
