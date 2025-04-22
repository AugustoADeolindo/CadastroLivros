<?php
    // Conexão com o Banco de Dados
    require_once('../scripts/conexao.php');

    // Preparar a query
    $sql = "SELECT id, capa, titulo, subtitulo, ano, editora, volume, isbn, valor, etal, NomeAutor1, SobreNomeAutor1, NomeAutor2, SobreNomeAutor2, NomeAutor3, SobreNomeAutor3, categoria FROM livros";
    $stmt = $conn->query($sql);

    // Buscar todos os livros
    $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <img class="logotipo" src="../assets/logotipo.png" class="logoTipo">
            </div>
            <nav class="options-container">
                <a href="../scripts/save.php">Cadastrar Novo Livro</a>
                <a href="../scripts/logout.php">Sair</a>
            </nav>
        </div>
    </header>

    <main>
        <section>
            <div class="table-container">
                <h1>Lista de Livros</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Capa</th>
                            <th>Título</th>
                            <th>Subtítulo</th>
                            <th>Ano</th>
                            <th>Editora</th>
                            <th>Volume</th>
                            <th>Etal</th>
                            <th>Autor1</th>
                            <th>Autor2</th>
                            <th>Autor3</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($livros as $livro): ?>
                            <tr>
                                <td><?= $livro['id'] ?></td>
                                <td><img src="<?= $livro['capa'] ?>" alt="Capa do livro" class="book-cover"></td>
                                <td><?= $livro['titulo'] ?></td>
                                <td><?= $livro['subtitulo'] ?></td>
                                <td><?= $livro['ano'] ?></td>
                                <td><?= $livro['editora'] ?></td>
                                <td><?= $livro['volume'] ?></td>
                                <td><?= $livro['etal'] ?></td>
                                <td><?= $livro['NomeAutor1'] . ' ' . $livro['SobreNomeAutor1'] ?></td>
                                <td><?= $livro['NomeAutor2'] . ' ' . $livro['SobreNomeAutor2'] ?></td>
                                <td><?= $livro['NomeAutor3'] . ' ' . $livro['SobreNomeAutor3'] ?></td>
                                <td><?= $livro['categoria'] ?></td>
                                <td>
                                    <a href="../scripts/edit.php?id=<?= $livro['id'] ?>" class="button">Editar</a>
                                    <a href="../scripts/delete.php?id=<?= $livro['id'] ?>" class="button">Deletar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
