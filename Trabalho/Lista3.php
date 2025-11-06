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
    .container-cards { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; }
    .card img { height: 200px; object-fit: cover; }
    .btn-card { width: 100%; margin-top: 10px; }

    /* TOPO: seta fixa à esquerda e logo centralizado */
    .header {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
    }

    .header .seta {
        position: absolute;
        left: 20px;
        width: 80px;
        transition: transform 0.2s;
    }

    .header .seta:hover {
        transform: scale(1.1);
    }

    .header .logo {
        max-width: 300px;
        width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .header .logo {
            max-width: 180px;
        }
        .header .seta {
            width: 60px;
            left: 10px;
        }
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand text-white" href="#">Netflix Filmes</a>
    <div class="ml-auto">
        <a href="logout.php" class="btn btn-dark"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
</nav>

<!-- TOPO com seta à esquerda e logo centralizado -->
<div class="header">
    <a href="Steven.php"><img src="imagens/Seta.png" alt="Voltar" class="seta"></a>
    <img src="imagens/netflix logo.png" alt="Netflix Logo" class="logo">
</div>

<div class="container mt-4">
    <!-- Card de adicionar filme -->
    <div class="card add-card mb-4 p-3">
        <h5 class="card-title">Adicionar Novo Filme</h5>
        <form action="add.php" method="POST" enctype="multipart/form-data">
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
            <div class="form-group">
                <label>Imagem de Capa (opcional)</label>
                <input type="file" name="imagens" class="form-control-file" accept="image/*">
            </div>
            <button type="submit" class="btn btn-dark btn-block">Adicionar Filme</button>
        </form>
    </div>

    <!-- Lista de filmes -->
    <div class="container-cards">
        <?php
        $query = "SELECT * FROM filmes ORDER BY created_at DESC";
        $result = $conn->query($query);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                // Caminho correto da pasta de capas
                $imagens = !empty($row['imagens']) 
                    ? 'Capa de Filmes/'.urlencode($row['imagens']) 
                    : 'https://via.placeholder.com/300x200.png?text='.urlencode($row['titulo']);

                echo '<div class="card" style="width: 18rem;">
                        <img src="'.$imagens.'" class="card-img-top" alt="Capa do Filme">
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
            echo '<p class="text-center">Nenhum filme encontrado.</p>';
        }
        $conn->close();
        ?>
    </div>
</div>
</body>
</html>
