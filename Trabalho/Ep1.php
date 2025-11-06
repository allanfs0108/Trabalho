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
<style>
    iframe {
        display: block;
        margin: 0 auto;
        border-radius: 10px;
        width: 1000px;
    }
</style>
<body>
    <!-- Botão de Voltar -->
    <a href="Dexter.php" class="voltar">
        <img src="imagens/Seta.png" alt="Voltar">
    </a>

    <!-- Container do vídeo e pôster -->
    <section class="video-section">
        <div class="video-container">
            <iframe width="1000" height="500" src="https://www.youtube.com/embed/j5GxlFxdcbQ?si=sEboXfbUF5bQXi_h" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>



</body>

</html>