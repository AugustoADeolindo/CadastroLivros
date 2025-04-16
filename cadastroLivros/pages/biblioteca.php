<?php
    require_once('../scripts/conexao.php');

    $query = 'SELECT * FROM LIVROS';
    $stmt = $conn -> prepare($query);

    $stmt -> execute();
    while($linha = $stmt -> fetch(PDO::FETCH_ASSOC)){

    }

?>