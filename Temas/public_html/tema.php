<?php
// Incluindo arquivo de conexão
header('Content-Type: text/html; charset=utf-8');
include_once "conexaoPDO.php";

$id = (int) $_GET['id'];

// Selecionando livros
$stmt = $bd->prepare('SELECT * FROM livro WHERE id_livro = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// Se executado
if ($stmt->execute()){
  // Alocando foto
  $livro = $stmt->fetchObject();
    
  // Se existir
  if ($livro != null){ 
    // Retornando conteudo
    echo $livro->foto;
  }
}
?>