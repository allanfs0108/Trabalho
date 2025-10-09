<?php
session_start();
if(!isset($_SESSION['user_id'])){
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

    <!-- Top Bar -->
    <div class="top-bar">
        <a href="Perfil.php"><img src="imagens/Dantley.png" alt="Logo" class="logo"></a>
        <img src="imagens/barra.webp" alt="Barra de pesquisa" class="barra">
        <a href="Lista.php" class="btn-lista">
            <img src="imagens/Mais.png" alt="Adicionar" class="mais">
        </a>
    </div>

    <!-- Séries premiadas -->
    <section class="categoria">
        <h1>Séries premiadas</h1>
        <div class="grid">
            <a href="Dexter.php"><img src="imagens/dexter.webp" alt="Dexter"></a>
            <img src="imagens/b99.jpg" alt="Brooklyn 99">
            <img src="imagens/wandinha.webp" alt="Wandinha">
            <img src="imagens/office.webp" alt="The Office">
            <img src="imagens/stranger.jpg" alt="Stranger Things">
            <img src="imagens/breaking.jpg" alt="Breaking Bad">
        </div>
    </section>

    <!-- Filmes de comédia -->
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