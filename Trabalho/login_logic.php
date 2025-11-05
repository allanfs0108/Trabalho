<?php
session_start();
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!$email || !$password) {
        $_SESSION['message'] = "Todos os campos são obrigatórios";
        $_SESSION['message_type'] = "danger";
        header("Location: login.php");
        exit();
    }

    // Busca o usuário no banco
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            // Login bem-sucedido
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;
            header("Location: Perfil.php");
            exit();
        } else {
            $_SESSION['message'] = "Senha incorreta";
            $_SESSION['message_type'] = "danger";
        }
    } else {
        $_SESSION['message'] = "Email não cadastrado";
        $_SESSION['message_type'] = "danger";
    }

    $stmt->close();
    $conn->close();
    header("Location: login.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>