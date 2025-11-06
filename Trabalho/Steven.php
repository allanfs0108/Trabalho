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
        <a href="Perfil.php"><img src="imagens/Steven.png" alt="Logo" class="logo"></a>
        <img src="imagens/netflix logo.png" alt="Barra de pesquisa" class="barra">
        <a href="Lista3.php" class="btn-lista">
            <img src="imagens/Mais.png" alt="Adicionar" class="mais">
        </a>
    </div>

    <section class="categoria">
        <h1>Clássicos do cinema</h1>
        <div class="grid">
            <a href="" class="grid-item-link"><img src="imagens/chefão.jpg" alt="Dexter"></a>
            <a href="" class="grid-item-link"><img src="imagens/clube.webp" alt="Brooklyn 99"></a>
            <a href=""><img src="imagens/forrest.jpg" alt="Wandinha"></a>
            <a href=""><img src="imagens/pianista.webp" alt="The Office"></a>
            <a href=""><img src="imagens/ela.jpg" alt="Stranger Things"></a>
            <a href=""><img src="imagens/lista.jpg" alt="Breaking Bad"></a>
        </div>
    </section>

    <section class="categoria">
        <h1>Mais populares da semana</h1>
        <div class="grid">
            <a href=""><img src="imagens/withcer.jpg" alt="Click"></a>
            <a href=""><img src="imagens/monster.jpg" alt="Esposa de Mentirinha"></a>
            <a href=""><img src="imagens/caramelo.jpg" alt="Golfe"></a>
            <a href=""><img src="imagens/má.jpg" alt="O Grande"></a>
            <a href=""><img src="imagens/asia.jpg" alt="The Office"></a>
            <a href=""><img src="imagens/jogo.jpg" alt="Zumbi"></a>
        </div>
    </section>

</body>

</html>