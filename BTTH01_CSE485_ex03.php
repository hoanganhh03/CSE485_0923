<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

$result = "Ngôn ngữ lập trình web bao gồm: ";
$lastIndex = count($arrs) - 1;

foreach ($arrs as $index => $language) {
    if ($index < $lastIndex) {
        $result .= $language . ', ';
    } else {
        $result .= 'và ' . $language . '.';
    }
}

echo $result;
?>