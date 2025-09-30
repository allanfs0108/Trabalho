<?php
session_start();
require_once 'conn.php';

try {
    if($_SERVER['REQUEST_METHOD'] !== 'POST') throw new Exception("Acesso inválido");

    $titulo = trim($_POST['titulo'] ?? '');
    $diretor = trim($_POST['diretor'] ?? '');
    $ano = intval($_POST['ano'] ?? 0);
    $categoria = trim($_POST['categoria'] ?? '');
    $available = isset($_POST['available']) ? intval($_POST['available']) : 1;

    if(!$titulo || !$diretor || !$ano){
        throw new Exception("Título, Diretor e Ano são obrigatórios.");
    }

    $stmt = $conn->prepare("INSERT INTO filmes (titulo, diretor, ano, categoria, available) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi", $titulo, $diretor, $ano, $categoria, $available);

    if($stmt->execute()){
        $_SESSION['message'] = "Filme '$titulo' adicionado com sucesso!";
        $_SESSION['message_type'] = "success";
    } else {
        throw new Exception("Erro ao adicionar filme: ".$stmt->error);
    }

    $stmt->close();
} catch(Exception $e){
    $_SESSION['message'] = $e->getMessage();
    $_SESSION['message_type'] = "danger";
} finally {
    $conn->close();
    header("Location: Lista.php");
    exit();
}
?>