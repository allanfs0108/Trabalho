<?php
session_start();
if(isset($_SESSION['user_id'])){
    // Se já estiver logado, redireciona para a página principal
    header("Location: Principal.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Netflix</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- Logo -->
    <div class="logo">
        <img src="netflix logo.png" alt="Logo Netflix">
    </div>

    <!-- Formulário de registro -->
    <div class="login-container">
        <h2>Cadastro</h2>

        <!-- Mensagem de erro/sucesso -->
        <?php
        if(isset($_SESSION['message'])){
            echo "<div class='alert alert-{$_SESSION['message_type']}'>{$_SESSION['message']}</div>";
            unset($_SESSION['message'], $_SESSION['message_type']);
        }
        ?>

        <form action="register_logic.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="password" name="confirmPassword" placeholder="Confirme a Senha" required>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="login.php">Já tenho uma conta</a>
    </div>
</body>
</html>