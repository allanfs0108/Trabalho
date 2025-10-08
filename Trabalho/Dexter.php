<?php
// Você pode iniciar sessão se quiser usar variáveis de login, etc.
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dexter</title>
</head>
<style>
    .dexter {
        position: absolute;
        bottom: 400px;
        /* distancia do rodapé */
        left: 950px;
        /* distancia da esquerda */
        width: 800px;
        /* tamanho da logo */
    }
</style>

<body style="background-color: black;">

    <!-- Botão de Voltar -->
    <a href="Principal.php">
        <img src="Seta.png" alt="Voltar" width="80px">
    </a>
    <br>

    <!-- Vídeo -->
    <table>
        <tr>
            <td>
                <iframe src="videoplayback.mp4" frameborder="0" width="800px" height="400px"></iframe>
            </td>
            <td>
                <img src="Poster.webp" alt="" width="600px" class="dexter">
            </td>
        </tr>
    </table>

    <!-- Título e Descrição -->
    <h2 style="color: white;">Dexter</h2>
    <p style="color: white;">
        De dia, o gentil Dexter é um analista de sangue para a polícia de Miami. Mas à <br>
        noite, ele é um assassino em série que só atinge outros assassinos.
    </p>

            <h3 style="color: white; margin-right: 20px;">Episódios</h3>
        

    <!-- Tabela de Episódios -->
    <table>
        <tr>
            <td>
                <img src="ep 1.jpg" alt="Episódio 1" width="300px">
                <p style="color: white;">1. Dexter</p>
            </td>
            <td>
                <img src="crocodile.jpg" alt="Episódio 2" width="300px">
                <p style="color: white;">2. Crocodile</p>
            </td>
            <td>
                <img src="popping.jpg" alt="Episódio 3" width="300px">
                <p style="color: white;">3. Popping Cherry</p>
            </td>
            <td>
                <img src="boy.jpg" alt="Episódio 4" width="300px">
                <p style="color: white;">4. Let's Give the Boy a Hand</p>
            </td>
            <td>
                <img src="american.jpg" alt="Episódio 5" width="360px">
                <p style="color: white;">5. Love American Style</p>
            </td>
            <td>
                <img src="return.jpg" alt="Episódio 6" width="360px">
                <p style="color: white;">6. Return to Sender</p>
            </td>
        </tr>
    </table>

</body>

</html>