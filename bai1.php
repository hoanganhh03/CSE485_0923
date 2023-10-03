<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai1</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "QuanLyBaiHat";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn ->connect_error){
        die("Kết nối đến cơ sở dữ liệu thất bại: ". $conn->connect_error);
    }

    $tentheloai = "Nhac POP";
    $sql = "INSERT INTO Theloai (tentheloai) VALUES ('$tentheloai')";

    if ($conn->query($sql) === TRUE) {
        echo "Thêm thể loại thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    
    // Thêm một bài hát vào bảng BaiHat và liên kết với thể loại đã thêm
    $tenBaiHat = "Love Story";
    $caSi = "Taylor Swift";
    $idTheLoai = 1; // Giả sử thể loại nhạc Pop có id là 1
    $sql = "INSERT INTO BaiHat (tenBaiHat, caSi, idTheLoai) VALUES ('$tenBaiHat', '$caSi', $idTheLoai)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Thêm bài hát thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    
    // Đóng kết nối
    $conn->close();
    ?>
    
</body>
</html>