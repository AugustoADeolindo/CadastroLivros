<?php
require_once('../scripts/conexao.php');

$id = $_GET['id'] ?? null;

// Buscar o livro pelo ID
$stmt = $conn->prepare("SELECT * FROM livros WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$livro = $stmt->fetch(PDO::FETCH_ASSOC);

$id = $livro['id'];
$capa = $livro['capa'];
$titulo = $livro['titulo'];
$subtitulo = $livro['subtitulo'];
$ano = $livro['ano'];
$editora = $livro['editora'];
$volume = $livro['volume'];
$isbn = $livro['isbn'];
$valor = $livro['valor'];
$etal = $livro['etal'];
$NomeAutor1 = $livro['NomeAutor1'];
$SobreNomeAutor1 = $livro['SobreNomeAutor1'];
$NomeAutor2 = $livro['NomeAutor2'];
$SobreNomeAutor2 = $livro['SobreNomeAutor2'];
$NomeAutor3 = $livro['NomeAutor3'];
$SobreNomeAutor3 = $livro['SobreNomeAutor3'];
$categoria = $livro['categoria'];

// Atualizar os dados se o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $capa = $_POST['capa'];
    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $ano = $_POST['ano'];
    $editora = $_POST['editora'];
    $volume = $_POST['volume'];
    $isbn = $_POST['isbn'];
    $valor = $_POST['valor'];
    $etal = $_POST['etal'];
    $NomeAutor1 = $_POST['NomeAutor1'];
    $SobreNomeAutor1 = $_POST['SobreNomeAutor1'];
    $NomeAutor2 = $_POST['NomeAutor2'];
    $SobreNomeAutor2 = $_POST['SobreNomeAutor2'];
    $NomeAutor3 = $_POST['NomeAutor3'];
    $SobreNomeAutor3 = $_POST['SobreNomeAutor3'];
    $categoria = $_POST['categoria'];

    $sql = "UPDATE livros SET
        capa = :capa,
        titulo = :titulo,
        subtitulo = :subtitulo,
        ano = :ano,
        editora = :editora,
        volume = :volume,
        isbn = :isbn,
        valor = :valor,
        etal = :etal,
        NomeAutor1 = :NomeAutor1,
        SobreNomeAutor1 = :SobreNomeAutor1,
        NomeAutor2 = :NomeAutor2,
        SobreNomeAutor2 = :SobreNomeAutor2,
        NomeAutor3 = :NomeAutor3,
        SobreNomeAutor3 = :SobreNomeAutor3,
        categoria = :categoria
        WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':capa', $capa);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':subtitulo', $subtitulo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':editora', $editora);
    $stmt->bindParam(':volume', $volume);
    $stmt->bindParam(':isbn', $isbn);
    $stmt->bindParam(':valor', $valor);
    $stmt->bindParam(':etal', $etal);
    $stmt->bindParam(':NomeAutor1', $NomeAutor1);
    $stmt->bindParam(':SobreNomeAutor1', $SobreNomeAutor1);
    $stmt->bindParam(':NomeAutor2', $NomeAutor2);
    $stmt->bindParam(':SobreNomeAutor2', $SobreNomeAutor2);
    $stmt->bindParam(':NomeAutor3', $NomeAutor3);
    $stmt->bindParam(':SobreNomeAutor3', $SobreNomeAutor3);
    $stmt->bindParam(':categoria', $categoria);

    $stmt->execute();

    header("Location: ../pages/biblioteca.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
</head>
<body>
    <h1>Editar Livro</h1>

    <form method="POST">
        <label>Capa:</label><input type="text" name="capa" value="<?= $capa ?>"><br>
        <label>Título:</label><input type="text" name="titulo" value="<?= $titulo ?>"><br>
        <label>Subtítulo:</label><input type="text" name="subtitulo" value="<?= $subtitulo ?>"><br>
        <label>Ano:</label><input type="number" name="ano" value="<?= $ano ?>"><br>
        <label>Editora:</label><input type="text" name="editora" value="<?= $editora ?>"><br>
        <label>Volume:</label><input type="text" name="volume" value="<?= $volume ?>"><br>
        <label>ISBN:</label><input type="text" name="isbn" value="<?= $isbn ?>"><br>
        <label>Valor:</label><input type="text" name="valor" value="<?= $valor ?>"><br>
        <label>Etal:</label><input type="text" name="etal" value="<?= $etal ?>"><br>
        <label>Nome Autor 1:</label><input type="text" name="NomeAutor1" value="<?= $NomeAutor1 ?>"><br>
        <label>Sobrenome Autor 1:</label><input type="text" name="SobreNomeAutor1" value="<?= $SobreNomeAutor1 ?>"><br>
        <label>Nome Autor 2:</label><input type="text" name="NomeAutor2" value="<?= $NomeAutor2 ?>"><br>
        <label>Sobrenome Autor 2:</label><input type="text" name="SobreNomeAutor2" value="<?= $SobreNomeAutor2 ?>"><br>
        <label>Nome Autor 3:</label><input type="text" name="NomeAutor3" value="<?= $NomeAutor3 ?>"><br>
        <label>Sobrenome Autor 3:</label><input type="text" name="SobreNomeAutor3" value="<?= $SobreNomeAutor3 ?>"><br>
        <label>Categoria:</label><input type="text" name="categoria" value="<?= $categoria ?>"><br><br>

        <input type="submit" value="Salvar">
    </form><br>

    <a href="biblioteca.php">Voltar</a>
</body>
</html>
