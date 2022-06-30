<?php 

    include_once("connection.php");

    $statement = $conn->prepare('SELECT * FROM users WHERE nik=:nik ');
    $statement->execute([
        'nik' => $_GET['nik']
    ]);
    
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
?>

<form action="update.php?nik=<?php echo $_GET['nik']; ?>" method="post">
    <input type="text" name="nik" placeholder="Nik" value="<?php echo $user['nik']; ?>"> <br/>
    <input type="text" name="name" placeholder="Name" value="<?php echo $user['name']; ?>"> <br/>
    <input type="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>"> <br/>
    <input type="number" name="phone" placeholder="Phone Number" value="<?php echo $user['phone']; ?>"> <br/>
    <button>Update</button>
</form>



