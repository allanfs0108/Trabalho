<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Netflix Fake</title>
  <style>
    body {
      background-color: black;
      margin: 0;
      text-align: center;
      /* centraliza horizontalmente */
    }

    .logo {
      margin-top: 20px;
    }

    .perfis {
      margin-top: 40px;
      /* espaço entre logo e perfis */
    }

    img {
      width: 600px;
      height: auto;
    }

    .img1 {
      width: 900px;
      /* largura menor para a imagem de perfis */
      height: auto;
    }
  </style>
</head>

<body>
  <br><br><br><br><br>
  <!-- Logo em cima -->
  <div class="logo">
    <img src="imagens/netflix logo.png" alt="Logo Netflix">
  </div>

  <!-- Perfis embaixo -->
  <div class="perfis">
    <img src="imagens/perfil.jpg" usemap="#mapa" alt="Perfis Netflix" class="img1">

    <map name="mapa">
      <area shape="rect" coords="29,90,195,251" href="Michelle.php" alt="Quadrado clicável">
      <area shape="rect" coords="225,90,389,251" href="Trevor.php" alt="Quadrado clicável">
      <area shape="rect" coords="416,90,580,251" href="Principal.php" alt="Quadrado clicável">
      <area shape="rect" coords="610,90,773,251" href="Jonh.php" alt="Quadrado clicável">
      <area shape="rect" coords="803,90,966,251" href="Steven.php" alt="Quadrado clicável">

    </map>
  </div>
</body>

</html>