<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>bài 8</title>
</head>
<body>
    <?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

    $maxLength = 0;
    $minLength = PHP_INT_MAX;
    $longestString = '';
    $shortestString = '';
    
    foreach ($array as $string) {
      $length = strlen($string);
    
      if ($length > $maxLength) {
        $maxLength = $length;
        $longestString = $string;
      }
    
      if ($length < $minLength) {
        $minLength = $length;
        $shortestString = $string;
      }
    }
    
    echo "Chuỗi lớn nhất là " . $longestString . ", độ dài = " . $maxLength . "\n";
    echo "Chuỗi nhỏ nhất là " . $shortestString . ", độ dài = " . $minLength . "\n";
    ?>
</body>
</html>