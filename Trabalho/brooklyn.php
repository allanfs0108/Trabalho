<?php
// session_start(); // Use se quiser controlar login
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brooklyn Nine-Nine</title>
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
        <h2>Brooklyn Nine-Nine </h2>
        <p>
            Brooklyn Nine-Nine é uma comédia policial sobre a equipe de detetives da fictícia <br>
            99ª Delegacia de Nova York, liderada pelo sério e intelectual Capitão Raymond Holt. <br>
            A série gira em torno das travessuras do talentoso, mas imaturo, detetive Jake Peralta <br> 
            e de como ele se adapta às regras e à liderança de Holt. Os episódios misturam casos <br> 
            procedurais com o desenvolvimento de relacionamentos e piadas entre os personagens. 
        </p>
    </section>

    <!-- Lista de episódios -->
    <section class="episodios">
        <h3>Episódios</h3>
        <div class="episodios-grid">
            <div class="ep">
                <img src="imagens/Piloto.jpg" alt="Episódio 1">
                <p>1. Piloto</p>
            </div>
            <div class="ep">
                <img src="imagens/Acompanhado.jpg" alt="Episódio 2">
                <p>2. Bem Acompanhado</p>
            </div>
            <div class="ep">
                <img src="imagens/Limbo.jpg" alt="Episódio 3">
                <p>3. No Limbo</p>
            </div>
            <div class="ep">
                <img src="imagens/lesgista.jpg" alt="Episódio 4">
                <p>4. A Legista</p>
            </div>
            <div class="ep">
                <img src="imagens/abutre.jpg" alt="Episódio 5">
                <p>5. O Abutre</p>
            </div>
            <div class="ep">
                <img src="imagens/halloween.jpg" alt="Episódio 6">
                <p>6. Halloween</p>
            </div>
            <div class="ep">
                <img src="imagens/48 hours.jpg" alt="Episódio 7">
                <p>7. 48 Horas</p>
            </div>
            <div class="ep">
                <img src="imagens/escola.jpg" alt="Episódio 8">
                <p>8. Velha Escola</p>
            </div>
            <div class="ep">
                <img src="imagens/sal.jpg" alt="Episódio 9">
                <p>9. A Pizzaria do Sal</p>
            </div>
            <div class="ep">
                <img src="imagens/graças.jpg                                                                                                                      " alt="Episódio 10">
                <p>10. Ação de Graças</p>
            </div>
        </div>
    </section>
</body>

</html>