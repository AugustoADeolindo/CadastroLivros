<?php
require_once('conexao.php');

//Variaveis com os dados do form de cadastro


$query = "DELETE * FROM livros";
$stmt = $conn -> prepare($query);

//Faz o bind dos parametros
$stmt -> bindParam();

$stmt -> execute();


?>