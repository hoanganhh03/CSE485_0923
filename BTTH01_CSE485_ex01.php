<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

function calculateOperations($arr) {
    $sum = array_sum($arr);
    $product = array_product($arr);
    $diff = $arr[0];
    $quotient = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        $diff -= $arr[$i];
        $quotient /= $arr[$i];
    }

    return array(
        'sum' => $sum,
        'product' => $product,
        'difference' => $diff,
        'quotient' => $quotient,
    );

}

$result = calculateOperations($arrs);

// Hiển thị kết quả theo định dạng yêu cầu
echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $result['sum'] . "\n";
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $result['product'] . "\n";
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $result['difference'] . "\n";
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $result['quotient'] . "\n";
?>