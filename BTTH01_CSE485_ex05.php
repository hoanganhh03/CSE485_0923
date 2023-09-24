<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 mà có key là 'b'
$value1 = $a['b']['o']['b'];
echo $value1; // Kết quả: 3

// Lấy giá trị = 1 mà có key là 'c'
$value2 = $a['a']['c'];
echo $value2; // Kết quả: 1

// Lấy thông tin của phần tử có key là 'a'
$info = $a['a'];
print_r($info); // Kết quả: Array ( ['b'] => 0 ['c'] => 1 )
?>
</body>
</html>