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
        <a href="Perfil.php"><img src="imagens/Trevor.png" alt="Logo" class="logo"></a>
        <img src="imagens/netflix logo.png" alt="Barra de pesquisa" class="barra">
        <a href="Lista4.php" class="btn-lista">
            <img src="imagens/Mais.png" alt="Adicionar" class="mais">
        </a>
    </div>

    <section class="categoria">
        <h1>Continuar assistindo</h1>
        <div class="grid">
            <a href="" class="grid-item-link"><img src="imagens/umbrella.jpg" alt="Dexter"></a>
            <a href="" class="grid-item-link"><img src="imagens/arcane.jpg" alt="Brooklyn 99"></a>
            <a href=""><img src="imagens/emily.webp" alt="Wandinha"></a>
            <a href=""><img src="imagens/homem aranha.jpg" alt="The Office"></a>
            <a href=""><img src="imagens/henry.jpg" alt="Stranger Things"></a>
            <a href=""><img src="imagens/icarly.jpg" alt="Breaking Bad"></a>
        </div>
    </section>

    <section class="categoria">
        <h1>Animações para toda família</h1>
        <div class="grid">
            <a href=""><img src="imagens/familia.jpg" alt="Click"></a>
            <a href=""><img src="imagens/fuga.jpg" alt="Esposa de Mentirinha"></a>
            <a href=""><img src="imagens/totoro.webp" alt="Golfe"></a>
            <a href=""><img src="imagens/vivo.jpg" alt="O Grande"></a>
            <a href=""><img src="imagens/pquenos.jpg" alt="The Office"></a>
            <a href=""><img src="imagens/mar.jpg" alt="Zumbi"></a>
        </div>
    </section>

</body>

</html>