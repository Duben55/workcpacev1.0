<?php
//На вход подается строка целых чисел, разделенных пробелами.
//Найдите максимальную разницу между двумя элементами строки при условии,
//что меньшее число должно находиться справа от большего
//Input
//1 6 4 3
//Output
//3

$inputArray = [1, 6, 4, 3, 10, 5, 111];
$result = null;

for ($i = 0; $i <= count($inputArray) - 2; $i++) {
    for ($j = $i + 1; $j <= count($inputArray) - 1; $j++) {
        if ($i < $j) {
            if ($inputArray[$i] - $inputArray[$j] > $result) {
                $result = $inputArray[$i] - $inputArray[$j];
            }
        }
    }
}

echo $result;
