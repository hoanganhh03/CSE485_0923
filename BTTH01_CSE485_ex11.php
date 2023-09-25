<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 11</title>
</head>
<body>
<?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3 trong mảng
unset($array[2]);

// Đảm bảo key của mảng là tuần tự
$array = array_values($array);

// Hiển thị mảng sau khi xóa
var_dump($array);
?>
</body>
</html>