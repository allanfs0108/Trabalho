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
            <iframe width="560" height="315" src="https://www.youtube.com/embed/_-Nv0JOcGxg?si=5wtYPus7kUs1FYN_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Título e descrição -->
    <section class="descricao">
        <h2>Breaking Bad</h2>
        <p>
            Um professor de química do ensino médio diagnosticado com câncer de pulmão começa a fabricar<br>
            metanfetamina para garantir o futuro de sua família. </p>
    </section>

    <!-- Lista de episódios -->
    <section class="episodios">
        <h3>Episódios</h3>
        <div class="episodios-grid">
            <div class="ep">
                <a href="Ep1.php"><img src="imagens/1pilot.jpg" alt="Episódio 1"></a>
                <p>T1 E1. Pilot</p>
            </div>
            <div class="ep">
                <img src="imagens/cat.jpg" alt="Episódio 2">
                <p>T1 E2. Cat’s in the Bag…</p>
            </div>
            <div class="ep">
                <img src="imagens/river.jpg" alt="Episódio 3">
                <p>T1 E3. …And the Bag’s in the River</p>
            </div>
            <div class="ep">
                <img src="imagens/cancer.jpg" alt="Episódio 4">
                <p>T1 E4. Cancer Man</p>
            </div>
            <div class="ep">
                <img src="imagens/gray.jpg" alt="Episódio 5">
                <p>T1 E5. Gray Matter</p>
            </div>
            <div class="ep">
                <img src="imagens/crazy.jpg" alt="Episódio 6">
                <p>T1 E6. Crazy Handful of Nothin'</p>
            </div>
            <div class="ep">
                <img src="imagens/stuff.jpg" alt="Episódio 7">
                <p>T1 E7. A No-Rough-Stuff-Type Deal</p>
            </div>
            <div class="ep">
                <img src="imagens/seven.jpg" alt="Episódio 8">
                <p>T2 E1. Seven Thirty-Seven</p>
            </div>
            <div class="ep">
                <img src="imagens/grilled.jpg" alt="Episódio 9">
                <p>T2 E2. Grilled</p>
            </div>
            <div class="ep">
                <img src="imagens/bee.jpg" alt="Episódio 10">
                <p>T2 E3. Bit by a Dead Bee</p>
            </div>
        </div>
    </section>
</body>

</html>