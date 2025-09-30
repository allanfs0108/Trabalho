<?php
session_start();
require_once 'conn.php';

try {
    if(!isset($_GET['id'])) throw new Exception("ID inválido");

    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM filmes WHERE id=?");
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        $_SESSION['message'] = "Filme removido com sucesso!";
        $_SESSION['message_type'] = "success";
    } else {
        throw new Exception("Erro ao deletar filme: ".$stmt->error);
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