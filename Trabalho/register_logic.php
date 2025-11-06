<?php
session_start();
require_once 'conn.php';

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Método inválido");
    }

    // Pega os dados do formulário
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $confirmPassword = $_POST['confirmPassword'] ?? null;

    // Valida campos
    if (!$email || !$password || !$confirmPassword) {
        throw new Exception("Todos os campos são obrigatórios");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Email inválido");
    }
    if ($password !== $confirmPassword) {
        throw new Exception("As senhas não coincidem");
    }

    // Verifica se o email já existe
    $stmt_check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->store_result();
    if ($stmt_check->num_rows > 0) {
        throw new Exception("Este email já está cadastrado");
    }
    $stmt_check->close();

    // Hash da senha
    $hashedPassword = password_hash($password, PASSWORD_ARGON2I);

    // Insere no banco
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    if (!$stmt) throw new Exception("Erro ao preparar consulta: " . $conn->error);

    $stmt->bind_param("ss", $email, $hashedPassword);
    if ($stmt->execute()) {
        // Cria sessão do usuário automaticamente
        $_SESSION['user_id'] = $stmt->insert_id;
        $_SESSION['email'] = $email;

        $_SESSION['message'] = "Cadastro realizado com sucesso!";
        $_SESSION['message_type'] = "success";

        // Redireciona direto para Perfil.php
        header("Location: Perfil.php");
        exit();
    } else {
        throw new Exception("Erro ao cadastrar usuário: " . $stmt->error);
    }

} catch (Exception $e) {
    $_SESSION['message'] = $e->getMessage();
    $_SESSION['message_type'] = "danger";
    header("Location: register_form.php"); // página do formulário de registro
    exit();
} finally {
    $conn->close();
}
?>