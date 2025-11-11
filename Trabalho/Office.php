<?php
// session_start(); // Use se quiser controlar login
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dexter</title>
    <link rel="stylesheet" href="dexter.css">
</head>

<body>
    <!-- Botão de Voltar -->
    <a href="Principal.php" class="voltar">
        <img src="imagens/Seta.png" alt="Voltar">
    </a>

    <!-- Container do vídeo e pôster -->
    <section class="video-section">
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/tNcDHWpselE?si=PKZ6aEMTkK98ECgy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Título e descrição -->
    <section class="descricao">
        <h2>The Office</h2>
        <p>
            Esta comédia de sucesso mostra o cotidiano dos funcionários descontentes de um escritório de<br>
            papel, liderados pelo iludido chefe Michael Scott. </p>
    </section>

    <!-- Lista de episódios -->
    <section class="episodios">
        <h3>Episódios</h3>
        <div class="episodios-grid">
            <div class="ep">
                <a href="Ep1.php"><img src="imagens/pilot.jpg" alt="Episódio 1"></a>
                <p>T1.E1. Pilot</p>
            </div>
            <div class="ep">
                <img src="imagens/diversity.jpg" alt="Episódio 2">
                <p>T1.E2. Diversity Day</p>
            </div>
            <div class="ep">
                <img src="imagens/health.jpg" alt="Episódio 3">
                <p>T1.E3. Health Care</p>
            </div>
            <div class="ep">
                <img src="imagens/alliance.jpg" alt="Episódio 4">
                <p>T1.E4. The Alliance</p>
            </div>
            <div class="ep">
                <img src="imagens/basketball.jpg" alt="Episódio 5">
                <p>T1.E5. Basketball</p>
            </div>
            <div class="ep">
                <img src="imagens/hot.jpg" alt="Episódio 6">
                <p>T1.E6. Hot Girl</p>
            </div>
            <div class="ep">
                <img src="imagens/dundies.jpg" alt="Episódio 7">
                <p>T2.E1. The Dundies</p>
            </div>
            <div class="ep">
                <img src="imagens/sexual.jpg" alt="Episódio 8">
                <p>T2.E2. Sexual Harassment</p>
            </div>
            <div class="ep">
                <img src="imagens/office.jpg" alt="Episódio 9">
                <p>T2.E3. Office Olympics</p>
            </div>
            <div class="ep">
                <img src="imagens/fire.jpg" alt="Episódio 10">
                <p>T2.E4. The Fire</p>
            </div>
        </div>
    </section>
</body>

</html>