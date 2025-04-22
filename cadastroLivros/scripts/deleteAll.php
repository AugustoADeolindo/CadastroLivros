<?php
require_once('../scripts/conexao.php');

$id = $_GET['id'] ?? null;

// Verifica se o ID foi passado
if (!$id) {
    echo "ID do livro não informado.";
    exit;
}

// Buscar o livro pelo ID
$sql = "SELECT * FROM livros WHERE id = :id";
$stmt = $conn->prepare($sql);
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
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: ../pages/biblioteca.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deletar Livro</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1>Deletar Livro</h1>

    <label for="question">Tem certeza que deseja deletar o livro <strong><?= htmlspecialchars($livro['titulo']) ?></strong>?</p>

    <form method="POST" id="question">
        <input type="submit" value="Deletar">
    </form><br>

    <a href="biblioteca.php">Voltar</a>
</body>
</html>
