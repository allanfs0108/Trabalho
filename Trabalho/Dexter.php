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
            <iframe src="videoplayback.mp4" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Título e descrição -->
    <section class="descricao">
        <h2>Dexter</h2>
        <p>
            De dia, o gentil Dexter é um analista de sangue para a polícia de Miami.<br>
            Mas à noite, ele é um assassino em série que só atinge outros assassinos.
        </p>
    </section>

    <!-- Lista de episódios -->
    <section class="episodios">
        <h3>Episódios</h3>
        <div class="episodios-grid">
            <div class="ep">
                <img src="imagens/ep 1.jpg" alt="Episódio 1">
                <p>1. Dexter</p>
            </div>
            <div class="ep">
                <img src="imagens/crocodile.jpg" alt="Episódio 2">
                <p>2. Crocodile</p>
            </div>
            <div class="ep">
                <img src="imagens/popping.jpg" alt="Episódio 3">
                <p>3. Popping Cherry</p>
            </div>
            <div class="ep">
                <img src="imagens/boy.jpg" alt="Episódio 4">
                <p>4. Let's Give the Boy a Hand</p>
            </div>
            <div class="ep">
                <img src="imagens/american.jpg" alt="Episódio 5">
                <p>5. Love American Style</p>
            </div>
            <div class="ep">
                <img src="imagens/return.jpg" alt="Episódio 6">
                <p>6. Return to Sender</p>
            </div>
            <div class="ep">
                <img src="imagens/ep 1.jpg" alt="Episódio 1">
                <p>1. Dexter</p>
            </div>
            <div class="ep">
                <img src="imagens/crocodile.jpg" alt="Episódio 2">
                <p>2. Crocodile</p>
            </div>
            <div class="ep">
                <img src="imagens/popping.jpg" alt="Episódio 3">
                <p>3. Popping Cherry</p>
            </div>
            <div class="ep">
                <img src="imagens/boy.jpg" alt="Episódio 4">
                <p>4. Let's Give the Boy a Hand</p>
            </div>
        </div>
    </section>
</body>

</html>