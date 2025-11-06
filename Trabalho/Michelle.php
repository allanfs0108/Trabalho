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
        <a href="Perfil.php"><img src="imagens/Michelle - Copia.png" alt="Logo" class="logo"></a>
        <img src="imagens/netflix logo.png" alt="Barra de pesquisa" class="barra">
        <a href="Lista1.php" class="btn-lista">
            <img src="imagens/Mais.png" alt="Adicionar" class="mais">
        </a>
    </div>

    <section class="categoria">
        <h1>Continuar assistindo</h1>
        <div class="grid">
            <a href=""><img src="imagens/ursos.jpg" alt="Dexter"></a>
            <a href=""><img src="imagens/dandadan.jpg" alt="Brooklyn 99"></a>
            <a href=""><img src="imagens/grey.jpg" alt="Wandinha"></a>
            <a href=""><img src="imagens/umbrella.jpg" alt="The Office"></a>
            <a href=""><img src="imagens/peaky.jpg" alt="Stranger Things"></a>
            <a href=""><img src="imagens/dexter.jpg" alt="Breaking Bad"></a>
        </div>
    </section>

    <section class="categoria">
        <h1>Filmes de terror</h1>
        <div class="grid">
            <a href=""><img src="imagens/the silence.jpg" alt="The Silence"></a>
            <a href=""><img src="imagens/rua1.webp" alt="Esposa de Mentirinha"></a>
            <a href=""><img src="imagens/rua2.jpg" alt="Golfe"></a>
            <a href=""><img src="imagens/rua3.webp" alt="O Grande"></a>
            <a href=""><img src="imagens/panico.jpg" alt="The Office"></a>
            <a href=""><img src="imagens/baba.jpg" alt="Zumbi"></a>
        </div>
    </section>

</body>

</html>