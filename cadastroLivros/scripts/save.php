<?php
require_once('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aviso de Cadastro</title>
    <link rel="stylesheet" href="../styles/save.css">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="message-box">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo"];
            $subtitulo = $_POST["subtitulo"];
            $ano = $_POST["ano"];
            $editora = $_POST["editora"];
            $volume = $_POST["volume"];
            $isbn = $_POST["isbn"];
            $valor = $_POST["preco"];
            $autorNomeUm = $_POST["autorNomeUm"];
            $autorSobrenomeUm = $_POST["autorSobrenomeUm"];
            $autorNomeDois = $_POST["autorNomeDois"];
            $autorSobrenomeDois = $_POST["autorSobrenomeDois"];
            $autorNomeTres = $_POST["autorNomeTres"];
            $autorSobrenomeTres = $_POST["autorSobrenomeTres"];
            $categoria = $_POST["categoria"];

            $query = "INSERT INTO livros (
                titulo, subtitulo, ano, editora, volume, isbn, valor,
                NomeAutor1, SobreNomeAutor1,
                NomeAutor2, SobreNomeAutor2,
                NomeAutor3, SobreNomeAutor3,
                categoria
            ) VALUES (
                :titulo, :subtitulo, :ano, :editora, :volume, :isbn, :valor,
                :NomeAutor1, :SobreNomeAutor1,
                :NomeAutor2, :SobreNomeAutor2,
                :NomeAutor3, :SobreNomeAutor3,
                :categoria
            )";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':subtitulo', $subtitulo);
            $stmt->bindParam(':ano', $ano);
            $stmt->bindParam(':editora', $editora);
            $stmt->bindParam(':volume', $volume);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':valor', $valor);
            $stmt->bindParam(':NomeAutor1', $autorNomeUm);
            $stmt->bindParam(':SobreNomeAutor1', $autorSobrenomeUm);
            $stmt->bindParam(':NomeAutor2', $autorNomeDois);
            $stmt->bindParam(':SobreNomeAutor2', $autorSobrenomeDois);
            $stmt->bindParam(':NomeAutor3', $autorNomeTres);
            $stmt->bindParam(':SobreNomeAutor3', $autorSobrenomeTres);
            $stmt->bindParam(':categoria', $categoria);

            if ($stmt->execute()) {
                echo '<div class="success">📚 Livro cadastrado com sucesso!</div>';
            } else {
                echo '<div class="error">❌ Erro ao cadastrar o livro.</div>';
            }

            echo '<a href="../pages/biblioteca.php">Voltar para a biblioteca</a>';
        }
        ?>
    </div>
</body>
</html>