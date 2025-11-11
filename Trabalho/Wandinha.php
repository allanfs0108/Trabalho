<?php
// session_start(); // Use se quiser controlar login
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wandinha</title>
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
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4vi6ZWe_3Yc?si=XMI7WzDQEDi81TdR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Título e descrição -->
    <section class="descricao">
        <h2>Wandinha</h2>
        <p>
            Inteligente, sarcástica e um pouco morta por dentro, Wandinha Addams investiga uma onda de<br>
            assassinatos enquanto faz novos amigos — e inimigos — na Academia Nevermore. </p>
    </section>

    <!-- Lista de episódios -->
    <section class="episodios">
        <h3>Episódios</h3>
        <div class="episodios-grid">
            <div class="ep">
                <a href="Ep1.php"><img src="imagens/quarta.jpg" alt="Episódio 1"></a>
                <p>1. Filha de Quarta é Cheia de Tristeza</p>
            </div>
            <div class="ep">
                <img src="imagens/número.jpg" alt="Episódio 2">
                <p>2. Tristeza é o Número Mais Solitário</p>
            </div>
            <div class="ep">
                <img src="imagens/amiga.jpg" alt="Episódio 3">
                <p>3. Amiga ou Tristeza</p>
            </div>
            <div class="ep">
                <img src="imagens/noite.jpg" alt="Episódio 4">
                <p>4. Que Noite Triste!</p>
            </div>
            <div class="ep">
                <img src="imagens/planta.jpg" alt="Episódio 5">
                <p>5. Você Colhe o que Planta (de Tristeza)</p>
            </div>
            <div class="ep">
                <img src="imagens/outra.jpg" alt="Episódio 6">
                <p>6. Uma Tristeza por Outra</p>
            </div>
            <div class="ep">
                <img src="imagens/você.jpg" alt="Episódio 7">
                <p>7. Se Você Ainda Não Me Conhece (de Tristeza)</p>
            </div>
            <div class="ep">
                <img src="imagens/assassinato.jpg" alt="Episódio 8">
                <p>8. Um Assassinato de Tristezas</p>
            </div>
        </div>
    </section>
</body>

</html>