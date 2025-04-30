<?php
require_once('../scripts/conexao.php');

$id = $_GET['id'] ?? null;

// Verifica se o ID foi passado
if (!$id) {
    echo "ID do livro não informado.";
    exit;
}

// Buscar o livro pelo ID
try{
    $sql = "SELECT * FROM livros WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $livro = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se o livro foi encontrado
    if (!$livro) {
        echo "Livro não encontrado.";
        exit;
    }

    // Deletar o livro se o formulário for enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "DELETE FROM livros WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header("Location: ../pages/biblioteca.php");
        exit;
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deletar Livro</title>
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/delete.css">
</head>
<body>
    <h1>AVISO</h1>

    <label for="question">Tem <b>certeza</b> que deseja deletar o livro <strong><?= htmlspecialchars($livro['titulo'].": ".$livro['subtitulo']) ?></strong>?</p>

    <form method="POST" id="question">
        <input type="submit" value="Sim">
    </form><br>

    <a href="../pages/biblioteca.php">Não</a>
</body>
</html>
