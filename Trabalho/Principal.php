<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="Principal.css">
</head>

<body style="background-color: black;">

    <div class="top-bar">
        <a href="Perfil.php"><img src="imagens/Dantley.png" alt="Logo" class="logo"></a>
        <img src="imagens/netflix logo.png" alt="Barra de pesquisa" class="barra">
        <a href="Lista.php" class="btn-lista">
            <img src="imagens/Mais.png" alt="Adicionar" class="mais">
        </a>
    </div>

    <section class="categoria">
        <h1>Séries premiadas</h1>
        <div class="grid">
            <a href="Dexter.php" class="grid-item-link"><img src="imagens/dexter.jpg" alt="Dexter"></a>
            <a href="Brooklyn.php" class="grid-item-link"><img src="imagens/b99.jpg" alt="Brooklyn 99"></a>
            <a href=""><img src="imagens/wandinha.webp" alt="Wandinha"></a>
            <a href=""><img src="imagens/office.webp" alt="The Office"></a>
            <a href=""><img src="imagens/stranger.jpg" alt="Stranger Things"></a>
            <a href=""><img src="imagens/breaking.jpg" alt="Breaking Bad"></a>
        </div>
    </section>

    <section class="categoria">
        <h1>Filmes de comédia</h1>
        <div class="grid">
            <a href=""><img src="imagens/click.jpg" alt="Click"></a>
            <a href=""><img src="imagens/esposa.jpg" alt="Esposa de Mentirinha"></a>
            <a href=""><img src="imagens/golfe.webp" alt="Golfe"></a>
            <a href=""><img src="imagens/grande.jpg" alt="O Grande"></a>
            <a href=""><img src="imagens/office.webp" alt="The Office"></a>
            <a href=""><img src="imagens/zumbi.jpg" alt="Zumbi"></a>
        </div>
    </section>

</body>

</html>