<?php
session_start();
require_once 'conn.php';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') throw new Exception("Método inválido");

    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $confirmPassword = $_POST['confirmPassword'] ?? null;

    if (!$email || !$password || !$confirmPassword) throw new Exception("Todos os campos são obrigatórios");
    if ($password !== $confirmPassword) throw new Exception("As senhas não coincidem");

    $hashedPassword = password_hash($password, PASSWORD_ARGON2I);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    if (!$stmt) throw new Exception("Erro ao preparar consulta: " . $conn->error);

    $stmt->bind_param("ss", $email, $hashedPassword);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Cadastro realizado com sucesso!";
        $_SESSION['message_type'] = "success";
        header("Location: login.php");
        exit();
    } else {
        throw new Exception("Erro ao cadastrar usuário: " . $stmt->error);
    }
} catch(Exception $e){
    $_SESSION['message'] = $e->getMessage();
    $_SESSION['message_type'] = "danger";
    header("Location: register.php");
    exit();
} finally {
    $conn->close();
}
?>