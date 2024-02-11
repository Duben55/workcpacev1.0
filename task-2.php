<?php
//На вход подается строка целых чисел, разделенных пробелами.
//Найдите максимальную разницу между двумя элементами строки при условии,
//что меньшее число должно находиться справа от большего

$inputArray = [-10, 16, 4, 3, 10, 5, -3];
$result = null;
$countArray = count($inputArray);
foreach ($inputArray as $key => $value){
    for ($j = $key + 1; $j <= $countArray - 1; $j++) {
        if ($value - $inputArray[$j] > $result) {
            $result = $value - $inputArray[$j];
        }
    }
}

echo $result;
