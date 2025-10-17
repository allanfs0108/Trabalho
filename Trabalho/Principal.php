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
        <img src="imagens/barra.webp" alt="Barra de pesquisa" class="barra">
        <a href="Lista.php" class="btn-lista">
            <img src="imagens/Mais.png" alt="Adicionar" class="mais">
        </a>
    </div>

    <section class="categoria">
        <h1>Séries premiadas</h1>
        <div class="grid">
            <a href="Dexter.php" class="grid-item-link"><img src="imagens/dexter.jpg" alt="Dexter"></a>
            <a href="Brooklyn.php" class="grid-item-link"><img src="imagens/b99.jpg" alt="Brooklyn 99"></a>
            <img src="imagens/wandinha.webp" alt="Wandinha">
            <img src="imagens/office.webp" alt="The Office">
            <img src="imagens/stranger.jpg" alt="Stranger Things">
            <img src="imagens/breaking.jpg" alt="Breaking Bad">
        </div>
    </section>

    <section class="categoria">
        <h1>Filmes de comédia</h1>
        <div class="grid">
            <img src="imagens/click.jpg" alt="Click">
            <img src="imagens/esposa.jpg" alt="Esposa de Mentirinha">
            <img src="imagens/golfe.webp" alt="Golfe">
            <img src="imagens/grande.jpg" alt="O Grande">
            <img src="imagens/office.webp" alt="The Office">
            <img src="imagens/zumbi.jpg" alt="Zumbi">
        </div>
    </section>

</body>

</html>