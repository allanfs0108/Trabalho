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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Filme</title>
<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
<style>
    body { background-color: #141414; color: white; }
    .navbar { background-color: #e50914 !important; }
    .card { background-color: #1c1c1c; border: none; color: white; }
    .btn-save { background-color: #e50914; border: none; }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-white" href="Lista.php">Netflix Filmes</a>
</nav>

<div class="container mt-5">
    <div class="card p-4">
        <h3 class="mb-4">Editar Filme</h3>
        <form method="POST">
            <div class="form-group">
                <label>Título</label>
                <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars($filme['titulo']) ?>" required>
            </div>
            <div class="form-group">
                <label>Diretor</label>
                <input type="text" name="diretor" class="form-control" value="<?= htmlspecialchars($filme['diretor']) ?>" required>
            </div>
            <div class="form-group">
                <label>Ano</label>
                <input type="number" name="ano" class="form-control" value="<?= htmlspecialchars($filme['ano']) ?>" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <input type="text" name="categoria" class="form-control" value="<?= htmlspecialchars($filme['categoria']) ?>">
            </div>
            <div class="form-group">
                <label>Disponibilidade</label>
                <select name="available" class="form-control">
                    <option value="1" <?= $filme['available'] ? 'selected' : '' ?>>Disponível</option>
                    <option value="0" <?= !$filme['available'] ? 'selected' : '' ?>>Indisponível</option>
                </select>
            </div>
            <button type="submit" class="btn btn-save btn-block">Salvar Alterações</button>
            <a href="Lista.php" class="btn btn-secondary btn-block">Cancelar</a>
        </form>
    </div>
</div>
</body>
</html>