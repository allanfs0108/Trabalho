<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lista de Filmes</title>
<link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>
    body { background-color: #141414; color: white; }
    .navbar { background-color: #e50914 !important; }
    .card { background-color: #1c1c1c; border: none; color: white; }
    .card-title { font-size: 1.2rem; font-weight: bold; }
    .card-text { font-size: 0.9rem; }
    .add-card { background-color: #e50914; color: white; }
    .container-cards { display: flex; flex-wrap: wrap; gap: 20px; }
    .card img { height: 200px; object-fit: cover; }
    .btn-card { width: 100%; margin-top: 10px; }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-white" href="#">Netflix Filmes</a>
    <div class="ml-auto">
        <a href="logout.php" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</nav>

<div class="container mt-4">

    <!-- Card de adicionar filme -->
    <div class="card add-card mb-4 p-3">
        <h5 class="card-title">Adicionar Novo Filme</h5>
        <form action="add.php" method="POST">
            <div class="form-group">
                <input type="text" name="titulo" class="form-control" placeholder="Título" required>
            </div>
            <div class="form-group">
                <input type="text" name="diretor" class="form-control" placeholder="Diretor" required>
            </div>
            <div class="form-group">
                <input type="number" name="ano" class="form-control" placeholder="Ano" required>
            </div>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Gênero">
            </div>
            <div class="form-group">
                <select name="available" class="form-control">
                    <option value="1">Disponível</option>
                    <option value="0">Indisponível</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Adicionar Filme</button>
        </form>
    </div>

    <!-- Lista de filmes em cards -->
    <div class="container-cards">
        <?php
        $query = "SELECT * FROM filmes ORDER BY created_at DESC";
        $result = $conn->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/300x200.png?text='.$row['titulo'].'" class="card-img-top" alt="Capa Filme">
                        <div class="card-body">
                            <h5 class="card-title">'.htmlspecialchars($row['titulo']).'</h5>
                            <p class="card-text">
                                Diretor: '.htmlspecialchars($row['diretor']).'<br>
                                Ano: '.htmlspecialchars($row['ano']).'<br>
                                Gênero: '.htmlspecialchars($row['categoria']).'<br>
                                Disponível: '.($row['available'] ? "Sim" : "Não").'
                            </p>
                            <a href="edit.php?id='.$row['id'].'" class="btn btn-info btn-card"><i class="fas fa-marker"></i> Editar</a>
                            <a href="delete.php?id='.$row['id'].'" class="btn btn-danger btn-card"><i class="far fa-trash-alt"></i> Deletar</a>
                        </div>
                    </div>';
            }
        } else {
            echo '<p>Nenhum filme encontrado.</p>';
        }
        $conn->close();
        ?>
    </div>
</div>
</body>
</html>