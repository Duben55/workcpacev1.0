<?php
//На вход подается строка из чисел, разделенных пробелами.
//Переместите все нули в конец строки. Порядок остальных чисел должен сохраниться.

$inputArray = [7, 0, 39, 0, 282, 2, 4, 0, 45];
$zeros = [];
$arrayWithoutZero = [];

foreach ($inputArray as $value) {
    if ($value != 0) {
        $arrayWithoutZero[] = $value;
    } else {
        $zeros[] = $value;
    }
}

$output = implode(' ', array_merge($arrayWithoutZero, $zeros));
echo $output;
