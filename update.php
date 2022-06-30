<?php

    include_once('connection.php');

    $nik = $_POST['nik'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $statement = $conn->prepare('UPDATE users SET nik=:nik, 
	                                            name=:name,
                                                email=:email,
                                                phone=:phone
                                                WHERE nik=:nik');                            
    $statement->execute([
        'nik' => $nik,
		'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'nik' => $nik
    ]);

    header('location: index.php');