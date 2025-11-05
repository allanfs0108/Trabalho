<?php
session_start();
if(isset($_SESSION['user_id'])){
    // Se já estiver logado, redireciona para a página principal
    header("Location: Perfil.php");
    exit();
}
?>
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
        <img src="imagens/netflix logo.png" alt="Logo Netflix">
    </div>

    <!-- Login -->
    <div class="login-container">
        <h2>Login</h2>

        <!-- Mensagem de erro/sucesso -->
        <?php
        if(isset($_SESSION['message'])){
            echo "<div class='alert alert-{$_SESSION['message_type']}'>{$_SESSION['message']}</div>";
            unset($_SESSION['message'], $_SESSION['message_type']);
        }
        ?>

        <form action="login_logic.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <a href="register.php">Cadastre-se</a>
    </div>
</body>
</html>