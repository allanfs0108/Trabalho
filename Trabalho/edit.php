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

// Pasta onde as imagens serão armazenadas
$uploadDir = "Capa de Filmes/";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = trim($_POST['titulo'] ?? $filme['titulo']);
    $diretor = trim($_POST['diretor'] ?? $filme['diretor']);
    $ano = intval($_POST['ano'] ?? $filme['ano']);
    $categoria = trim($_POST['categoria'] ?? $filme['categoria']);
    $available = isset($_POST['available']) ? intval($_POST['available']) : $filme['available'];

    // Tratamento da imagem
    $imagens = $filme['imagens']; // Mantém a imagem antiga por padrão
    if (isset($_FILES['imagens']) && $_FILES['imagens']['error'] === 0) {
        $fileTmpPath = $_FILES['imagens']['tmp_name'];
        $fileName = basename($_FILES['imagens']['name']);
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileExt, $allowedExt)) {
            $newFileName = uniqid() . "." . $fileExt;
            $destPath = $uploadDir . $newFileName;
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // Apaga a imagem antiga se existir
                if ($filme['imagens'] && file_exists($uploadDir . $filme['imagens'])) {
                    unlink($uploadDir . $filme['imagens']);
                }
                $imagens = $newFileName;
            } else {
                $_SESSION['message'] = "Erro ao fazer upload da imagem.";
                $_SESSION['message_type'] = "danger";
                header("Location: Lista.php");
                exit();
            }
        } else {
            $_SESSION['message'] = "Formato de imagem inválido. Use jpg, jpeg, png ou gif.";
            $_SESSION['message_type'] = "danger";
            header("Location: Lista.php");
            exit();
        }
    }

    $stmt = $conn->prepare("UPDATE filmes SET titulo=?, diretor=?, ano=?, categoria=?, available=?, imagens=? WHERE id=?");
    $stmt->bind_param("ssisisi", $titulo, $diretor, $ano, $categoria, $available, $imagens, $id);

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
    img { max-width: 150px; margin-bottom: 10px; }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-white" href="Lista.php">Netflix Filmes</a>
</nav>

<div class="container mt-5">
    <div class="card p-4">
        <h3 class="mb-4">Editar Filme</h3>
        <form method="POST" enctype="multipart/form-data">
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
            <div class="form-group">
                <label>Imagem Atual</label><br>
                <?php if ($filme['imagens'] && file_exists($uploadDir . $filme['imagens'])): ?>
                    <img src="<?= $uploadDir . $filme['imagens'] ?>" alt="Capa do Filme">
                <?php else: ?>
                    <p>Sem imagem</p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Alterar Imagem</label>
                <input type="file" name="imagens" class="form-control" accept="image/*">
            </div>
            <button type="submit" class="btn btn-save btn-block">Salvar Alterações</button>
            <a href="Lista.php" class="btn btn-secondary btn-block">Cancelar</a>
        </form>
    </div>
</div>
</body>
</html>
