<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "BTTH01_CSE485";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
}

$sql = "CREATE DATABASE $database";
if ($conn->query($sql) === TRUE) {
    echo "Cơ sở dữ liệu BTTH01_CSE485 đã được tạo thành công";
} else {
    echo "Lỗi trong quá trình tạo cơ sở dữ liệu: " . $conn->error;
}

$conn->close();
?>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>