<?php
    $conn = mysqli_connect('172.19.0.3',"root","database123","Trucorp");
    session_start();
    $sql = "SELECT *FROM users";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>jabatan</th>
    </tr>
    <?php while($data = mysqli_fetch_assoc($result)): ?>
    <br>
    <tr>
        <td><?php echo $data["ID"];?></td>
        <td><?php echo $data["Nama"];?></td>
        <td><?php echo $data["Alamat"];?></td>
        <td><?php echo $data["Jabatan"];?></td>
    </tr>
    <?php endwhile;?>
</body>
</html>
