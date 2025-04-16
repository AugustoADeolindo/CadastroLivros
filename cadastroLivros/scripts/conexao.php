<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "livros";

    $conn = new pdo("mysql:host=$host;dbname=".$dbname, $user, $pass);

?>