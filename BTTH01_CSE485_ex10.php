<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai0  </title>
</head>
<body>
<?php
function convertToUppercase($item) {
    if (is_string($item)) {
        return strtoupper($item);
    }
    return $item;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

// Chuyển đổi mảng $arr1 thành mảng ký tự hoa
$result1 = array_map('convertToUppercase', $arr1);
var_dump($result1);

// Chuyển đổi mảng $arr2 thành mảng ký tự hoa
$result2 = array_map('convertToUppercase', $arr2);
var_dump($result2);

// Chuyển đổi mảng $arr3 thành mảng ký tự hoa
$result3 = array_map('convertToUppercase', $arr3);
var_dump($result3);
?>
    
</body>
</html>