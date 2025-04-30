<?php
    // Conexão com o Banco de Dados
    require_once('../scripts/conexao.php');

try{
    $sql = "SELECT id, capa, titulo, subtitulo, ano, editora, volume, isbn, valor, etal, NomeAutor1, SobreNomeAutor1, NomeAutor2, SobreNomeAutor2, NomeAutor3, SobreNomeAutor3, categoria FROM livros";
    $stmt = $pdo->query($sql);

    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) { 
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="../styles/biblioteca.css">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logotipo-container">
                <img class="logotipo" src="../assets/logotipo.png" alt="Logotipo">
            </div>
            <nav class="options-container">
                <a href="../index.html">Home</a>
                <a href="../index.html#form">Cadastrar Livro</a>
            </nav>
        </div>
    </header>

    <main>
        <section>
            <div class="table-container">
                <h1>Lista de Livros</h1>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Ano</th>
                                <th>Editora</th>
                                <th>Volume</th>
                                <th>1° Autor</th>
                                <th>2° Autor</th>
                                <th>3° Autor</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($livros as $livro): ?>
                                <tr id="linhas">
                                    <td><?= htmlspecialchars($livro['id']) ?></td>
                                    <td><?= htmlspecialchars($livro['titulo']) ?></td>
                                    <td><?= htmlspecialchars($livro['subtitulo']) ?></td>
                                    <td><?= htmlspecialchars($livro['ano']) ?></td>
                                    <td><?= htmlspecialchars($livro['editora']) ?></td>
                                    <td><?= htmlspecialchars($livro['volume']) ?></td>
                                    <td><?= htmlspecialchars($livro['NomeAutor1'] . ' ' . $livro['SobreNomeAutor1']) ?></td>
                                    <td><?= htmlspecialchars($livro['NomeAutor2'] . ' ' . $livro['SobreNomeAutor2']) ?></td>
                                    <td><?= htmlspecialchars($livro['NomeAutor3'] . ' ' . $livro['SobreNomeAutor3']) ?></td>
                                    <td><?= htmlspecialchars($livro['categoria']) ?></td>
                                    <td>R$ <?= number_format($livro['valor'], 2, ',', '.') ?></td>
                                    <td>
                                        <a href="../scripts/edit.php?id=<?= $livro['id'] ?>" class="button">Editar</a>
                                        <a href="../scripts/delete.php?id=<?= $livro['id'] ?>" class="button">Deletar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Todos os direitos reservados</p>
    </footer>
</body>
</html>