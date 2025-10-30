<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once 'conn.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $diretor = $_POST['diretor'];
    $ano = $_POST['ano'];
    $categoria = $_POST['categoria'];
    $available = $_POST['available'];

    // Diretório de destino das capas
    $diretorioDestino = "Capa de Filmes/";
    $nomeImagem = "";

    // Verifica se um arquivo foi enviado
    if (isset($_FILES['imagens']) && $_FILES['imagens']['error'] == 0) {
        // Garante que o diretório existe
        if (!is_dir($diretorioDestino)) {
            mkdir($diretorioDestino, 0777, true);
        }

        // Gera um nome único para a imagem
        $nomeImagem = uniqid() . "_" . basename($_FILES["imagens"]["name"]);
        $caminhoCompleto = $diretorioDestino . $nomeImagem;

        // Move o arquivo para o diretório
        if (!move_uploaded_file($_FILES["imagens"]["tmp_name"], $caminhoCompleto)) {
            echo "<script>alert('Erro ao enviar a imagem.'); window.location='lista.php';</script>";
            exit();
        }
    }

    // Insere o filme no banco de dados
    $stmt = $conn->prepare("INSERT INTO filmes (titulo, diretor, ano, categoria, available, imagens, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssisis", $titulo, $diretor, $ano, $categoria, $available, $nomeImagem);

    if ($stmt->execute()) {
        echo "<script>alert('Filme adicionado com sucesso!'); window.location='lista.php';</script>";
    } else {
        echo "<script>alert('Erro ao adicionar o filme.'); window.location='lista.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>