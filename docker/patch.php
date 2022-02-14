<?php
    $conn = mysqli_connect('172.19.0.3',"root","database123","Trucorp");
    session_start();
    $sql = "SELECT COUNT(*)FROM users";
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
    
    <p>total user</p> <?php $result;?>
</body>
</html>
