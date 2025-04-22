<?php

//Faz a conexão com o banco de dados
//O arquivo conexao.php deve conter o código para conectar ao banco de dados
// e deve ser incluído aqui
require_once('conexao.php');

//Variaveis com os dados do form de cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST["titulo"];
    $autorNomeUm = $_POST["autorNomeUm"];
    $autorNomeDois = $_POST["autorNomeDois"];
    $autorNomeTres = $_POST["autorNomeTres"];
    $editora = $_POST["editora"];
    $isbn = $_POST["isbn"];
    $subtitulo = $_POST["subtitulo"];
    $autorSobrenomeUm = $_POST["autorSobrenomeUm"];
    $autorSobrenomeDois = $_POST["autorSobrenomeDois"];
    $autorSobrenomeTres = $_POST["autorSobrenomeTres"];
    $categoria = $_POST["categoria"];
    $ano = $_POST["ano"];
    $volume = $_POST["volume"];
    $preco = $_POST["preco"];

    echo "Título: $titulo<br>";
    echo "Subtítulo: $subtitulo<br>";
}

//Prepara a query de insert
//A query de insert deve ter o mesmo nome dos campos do banco de dados
$query = "INSERT INTO livros (titulo, subtitulo, ano, editora, volume, isbn, valor, NomeAutor1, SobreNomeAutor1, NomeAutor2, SobreNomeAutor2, NomeAutor3, SobreNomeAutor3, categoria) VALUES (:titulo, :subtitulo, :ano, :editora, :volume, :isbn, :valor, :autorNomeUm, :autorSobrenomeUm, :autorNomeDois, :autorSobrenomeDois, :autorNomeTres, :autorSobrenomeTres, :categoria)"; 
$stmt = $conn -> prepare($query);

//Faz o bind dos parametros
$stmt -> bindParam(':titulo', $titulo);
$stmt -> bindParam(':subtitulo', $subtitulo);
$stmt -> bindParam(':ano', $ano);
$stmt -> bindParam(':editora', $editora);
$stmt -> bindParam(':volume', $volume);
$stmt -> bindParam(':isbn', $isbn);
$stmt -> bindParam(':valor', $valor);
$stmt -> bindParam(':NomeAutor1', $autorNomeUm);
$stmt -> bindParam(':SobreNomeAutor1', $autorSobrenomeUm);
$stmt -> bindParam(':NomeAutor2', $autorNomeDois);
$stmt -> bindParam(':SobreNomeAutor2', $autorSobrenomeDois);
$stmt -> bindParam(':NomeAutor3', $autorNomeTres);
$stmt -> bindParam(':SobreNomeAutor3', $autorSobrenomeTres);
$stmt -> bindParam(':categoria', $categoria);

//Executa a query
$stmt -> execute();


?>