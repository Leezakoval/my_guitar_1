<?php
    $dsn = 'mysql:dbname=yk247;host=sql2.njit.edu';
    $username = 'yk247';
    $password = 'LYwFlun7';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>