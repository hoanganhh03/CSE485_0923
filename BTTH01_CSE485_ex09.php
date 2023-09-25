<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai9</title>
</head>
<body>
    <?php
    function convertToLowercase($arr) {
        foreach ($arr as &$value) {
          if (is_string($value)) {
            $value = strtolower($value);
          }
        }
      
        return $arr;
      }
      
      $arr1 = ['a', 'b', 'ABC'];
      $arr2 = ['1', 'B', 'C', 'E'];
      $arr3 = ['a', 0, null, false];
      
      $result1 = convertToLowercase($arr1);
      $result2 = convertToLowercase($arr2);
      $result3 = convertToLowercase($arr3);
      
      echo "Original Array 1: ";
      print_r($arr1);
      
      echo "Converted Array 1: ";
      print_r($result1);
      
      echo "Original Array 2: ";
      print_r($arr2);
      
      echo "Converted Array 2: ";
      print_r($result2);
      
      echo "Original Array 3: ";
      print_r($arr3);
      
      echo "Converted Array 3: ";
      print_r($result3);

    ?>
</body>
</html>