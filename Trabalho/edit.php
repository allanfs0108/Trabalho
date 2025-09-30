<?php
session_start();
require_once 'conn.php';

if (!isset($_GET['id'])) {
    header("Location: Lista.php");
    exit();
}

$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM filmes WHERE id = $id");
$filme = $result->fetch_assoc();

if (!$filme) {
    $_SESSION['message'] = "Filme não encontrado.";
    $_SESSION['message_type'] = "danger";
    header("Location: Lista.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = trim($_POST['titulo'] ?? $filme['titulo']);
    $diretor = trim($_POST['diretor'] ?? $filme['diretor']);
    $ano = intval($_POST['ano'] ?? $filme['ano']);
    $categoria = trim($_POST['categoria'] ?? $filme['categoria']);
    $available = isset($_POST['available']) ? intval($_POST['available']) : $filme['available'];

    $stmt = $conn->prepare("UPDATE filmes SET titulo=?, diretor=?, ano=?, categoria=?, available=? WHERE id=?");
    $stmt->bind_param("ssisii", $titulo, $diretor, $ano, $categoria, $available, $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Filme atualizado com sucesso!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Erro ao atualizar filme: " . $stmt->error;
        $_SESSION['message_type'] = "danger";
    }

    $stmt->close();
    $conn->close();
    header("Location: Lista.php");
    exit();
}
