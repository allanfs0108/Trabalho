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
<iframe width="560" height="315" src="https://www.youtube.com/embed/RMmGQNNl164?si=DW43WxWQq-gmuyPi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>        </div>
    </section>

    <!-- Título e descrição -->
    <section class="descricao">
        <h2>Stranger Things</h2>
        <p>
            Quando um garoto desaparece, uma pequena cidade descobre um mistério envolvendo<br>
            experimentos secretos, forças sobrenaturais terríveis e uma estranha garota.
        </p>
    </section>

    <!-- Lista de episódios -->
    <section class="episodios">
        <h3>Episódios</h3>
        <div class="episodios-grid">
            <div class="ep">
                <a href="Ep1.php"><img src="imagens/will.jpg" alt="Episódio 1"></a>
                <p>T1.E1. Capítulo um: O desaparecimento de Will Byers</p>
            </div>
            <div class="ep">
                <img src="imagens/Estranha.jpg" alt="Episódio 2">
                <p>T1.E2. Capítulo dois: A estranha da Maple Street</p>
            </div>
            <div class="ep">
                <img src="imagens/caramba.jpg" alt="Episódio 3">
                <p>T1.E3. Capítulo três: Caramba</p>
            </div>
            <div class="ep">
                <img src="imagens/corpo.jpg" alt="Episódio 4">
                <p>T1.E4. Capítulo quatro: O Corpo</p>
            </div>
            <div class="ep">
                <img src="imagens/pulga.jpg" alt="Episódio 5">
                <p>T1.E5. Capítulo cinco: A Pulga e o Acrobata</p>
            </div>
            <div class="ep">
                <img src="imagens/monstro.jpg" alt="Episódio 6">
                <p>T1.E6. Capítulo seis: O Monstro</p>
            </div>
            <div class="ep">
                <img src="imagens/banheira.jpg" alt="Episódio 7">
                <p>T1.E7. Capítulo sete: A Banheira</p>
            </div>
            <div class="ep">
                <img src="imagens/mundo.jpg" alt="Episódio 8">
                <p>T1.E8. Capítulo oito: O Mundo Invertido</p>
            </div>
            <div class="ep">
                <img src="imagens/madmax.jpg" alt="Episódio 9">
                <p>T2.E1. Capítulo um: MADMAX</p>
            </div>
            <div class="ep">
                <img src="imagens/doces.jpg" alt="Episódio 10">
                <p>T2.E2. Capítulo dois: Doces ou Travessuras, Esquisito</p>
            </div>
        </div>
    </section>
</body>

</html>