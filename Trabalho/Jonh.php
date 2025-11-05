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
        <a href="Perfil.php"><img src="imagens/John.png" alt="Logo" class="logo"></a>
        <img src="imagens/barra.webp" alt="Barra de pesquisa" class="barra">
        <a href="Lista.php" class="btn-lista">
            <img src="imagens/Mais.png" alt="Adicionar" class="mais">
        </a>
    </div>

    <section class="categoria">
        <h1>Ação e aventura</h1>
        <div class="grid">
            <a href="" class="grid-item-link"><img src="imagens/alerta.jpg" alt="Dexter"></a>
            <a href="" class="grid-item-link"><img src="imagens/rebel.jpg" alt="Brooklyn 99"></a>
            <a href=""><img src="imagens/VeF.png" alt="Wandinha"></a>
            <a href=""><img src="imagens/army.jpg" alt="The Office"></a>
            <a href=""><img src="imagens/jumanji.jpg" alt="Stranger Things"></a>
            <a href=""><img src="imagens/tartarugas.jpg" alt="Breaking Bad"></a>
        </div>
    </section>

    <section class="categoria">
        <h1>Séries de drama</h1>
        <div class="grid">
            <a href=""><img src="imagens/you.jpg" alt="Click"></a>
            <a href=""><img src="imagens/esposa.jpg" alt="Esposa de Mentirinha"></a>
            <a href=""><img src="imagens/ninguem.webp" alt="Golfe"></a>
            <a href=""><img src="imagens/baby.webp" alt="O Grande"></a>
            <a href=""><img src="imagens/ado.webp" alt="The Office"></a>
            <a href=""><img src="imagens/gambito.webp" alt="Zumbi"></a>
        </div>
    </section>

</body>

</html>