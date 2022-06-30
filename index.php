<?php include_once("connection.php"); ?>  
<a href="create.php">+ Add User</a>

<table border="1" cellspacing="0" cellpadding="10">
<caption class="title">Data User ID Aplikasi Penjualan CITRA ELEKTRONIK Divisi Elektronik</caption>
	<thead>
    <tr>
        <th>Nik</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Action</th>
    </tr>
    </thead>
    <?php $query = $conn->query('SELECT * FROM users'); ?>

    <?php if($query->rowCount() > 0): ?>
        <?php 
            $no = 1; 
            foreach($query->fetchAll(PDO::FETCH_ASSOC) AS $row): 
        ?>  
            <tr>
                <td> <?php echo $row['nik']; ?> </td>
                <td> <?php echo $row['name']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['phone']; ?> </td>
                <td> 
                    <a href="edit.php?nik=<?php echo $row['nik']; ?>">Edit</a>
                    <a href="delete.php?nik=<?php echo $row['nik']; ?>">Delete</a>
                </td>
            </tr>
        <?php 
            $no++; 
            endforeach; 
        ?>
    <?php else: ?>        
        <tr>
            <th colspan="5">Belum ada data user</th>
        </tr>		
    <?php endif; ?>

</table>
//sikilan web...... !
<tfoot>
	<tr>
		<th>Note: NIK boleh di edit</th>
	</tr>
</tfoot>



