<?php
// Inicia a sessão e verifica se o usuário está logado
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
        <a href="Perfil.php"><img src="Dantley.png" alt="Logo" width="100px"></a>
        <img src="barra.webp" alt="Barra de pesquisa" width="275px">
    </div>

    <!-- Botão para Lista.php -->
    <a href="Lista.php">
        <img src="Mais.png" alt="" width="75px" style="position: absolute; top: 55px; right: 300px;">
    </a>

    <!-- Séries premiadas -->
    <table>
        <tr>
            <td colspan="6"><h1 style="color: white;">Séries premiadas</h1></td>
        </tr>
        <tr>
            <td><a href="Dexter.php"><img src="dexter.webp" alt="" width="350px"></a></td>
            <td><img src="b99.jpg" alt="" width="300px"></td>
            <td><img src="wandinha.webp" alt="" width="300px"></td>
            <td><img src="office.webp" alt="" width="300px"></td>
            <td><img src="stranger.jpg" alt="" width="300px"></td>
            <td><img src="breaking.jpg" alt="" width="350px"></td>
        </tr>
    </table>

    <!-- Filmes de comédia -->
    <table>
        <tr>
            <td colspan="6"><h1 style="color: white;">Filmes de comédia</h1></td>
        </tr>
        <tr>
            <td><img src="click.jpg" alt="" width="315px"></td>
            <td><img src="esposa.jpg" alt="" width="315px"></td>
            <td><img src="golfe.webp" alt="" width="300px"></td>
            <td><img src="grande.jpg" alt="" width="315px"></td>
            <td><img src="office.webp" alt="" width="300px"></td>
            <td><img src="zumbi.jpg" alt="" width="285px"></td>
        </tr>
    </table>

</body>
</html>