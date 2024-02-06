<?php

//На вход подается строка из чисел, разделенных пробелами.
//Переместите все нули в конец строки. Порядок остальных чисел должен сохраниться.
//Input
//7 0 39 0 282 2 4 0 45
//Output
//7 39 282 2 4 45 0 0 0
//
//$inputArray = [7, 0, 39, 0, 282, 2, 4, 0, 45];
//$zeroCount = 0;
//
//foreach ($inputArray as $value) {
//    if ($value != 0) {
//        echo $value . ' ';
//    }
//    else {
//        $zeroCount++;
//    }
//}
//
//echo str_repeat('0 ', $zeroCount);

$inputArray = [7, 0, 39, 0, 282, 2, 4, 0, 45];
$zeros = [];
$arrayWithoutZero = [];

foreach ($inputArray as $value) {
    if ($value != 0) {
        $arrayWithoutZero[] = $value;
    }
    else {
        $zeros[] = $value;
    }
}

$output = implode(' ', array_merge($arrayWithoutZero, $zeros));
echo $output;