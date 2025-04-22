<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "books";

    $conn = new pdo("mysql:host=$host;dbname=".$dbname, $user, $password);

?>
