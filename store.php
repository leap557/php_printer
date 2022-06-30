<?php

    include_once('connection.php');
    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $statement = $conn->prepare('INSERT INTO users (nik, name, email, phone)
                                            VALUES (:nik, :name, :email, :phone)');
                                
    $statement->execute([
        'nik' => $nik,
		'name' => $name,
        'email' => $email,
        'phone' => $phone
    ]);

    header('location: index.php');