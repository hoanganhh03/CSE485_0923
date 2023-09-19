<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài 2</title>
</head>
<body>
 <?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['Anh', 'Sơn', 'Thắng', 'tôi'];


    $result = '';
    $length = count($arrs);
    for ($i = 0; $i < $length; $i++) {
        $color = $arrs[$i];
        $name = $names[$i];
        $result .= "Màu $color là màu yêu thích của $name";
        if ($i < $length - 1) {
            $result .= ', ';
        }
    }

    echo $result;
        ?>

</body>
</html>