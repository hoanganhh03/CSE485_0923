<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

// Mảng để lưu các số từ 100 đến 200 và chia hết cho 5
$result = [];

foreach ($array as $number) {
    if ($number >= 100 && $number <= 200 && $number % 5 == 0) {
        $result[] = $number;
    }
}

// Hiển thị các số tìm được
if (count($result) > 0) {
    echo "Các số từ 100 đến 200 và chia hết cho 5 là: ";
    echo implode(", ", $result);
} else {
    echo "Không tìm thấy số nào thỏa mãn yêu cầu.";
}
?>
    
</body>
</html>