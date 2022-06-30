<?php

    include_once('connection.php');

    $nik = $_GET['nik'];

    $statement = $conn->prepare('DELETE FROM users WHERE nik=:nik');                             
    $statement->execute([
        'nik' => $nik
    ]);

    header('location: index.php');