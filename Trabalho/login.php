<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login Netflix</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <!-- Logo -->
  <div class="logo">
    <img src="netflix logo.png" alt="Logo Netflix">
  </div>

  <!-- Login -->
  <div class="login-container">
    <h2>Login</h2>
    <form action="Perfil.php" method="POST">
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Senha" required>
      <button type="submit">Entrar</button>
    </form>
    <a href="register.php">Cadastre-se</a>
  </div>
</body>
</html>