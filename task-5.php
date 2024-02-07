<?php
//На вход подается строка целых чисел, разделенных пробелами.
//Нужно найти последовательность подряд идущих чисел, у которой сумма элементов будет максимальной.
//Вывести нужно максимальную сумму подряд идущих элементов.
//Input
//-2 1 -3 4 -1 2 1 -5 4
//Output
//6

$nums = [1, 6, -2, 56, -32, 5];
$numsCount = count($nums);
$maxSumCurrent = $nums[0];
$maxSumTotal = $nums[0];

for ($i = 1; $i < $numsCount; $i++) {
    $num = $nums[$i];
    $maxSumCurrent += $num;
    if ($maxSumCurrent < $num) {
        $maxSumCurrent = $num;
    }
    if ($maxSumCurrent > $maxSumTotal) {
        $maxSumTotal = $maxSumCurrent;
    }
}

echo $maxSumTotal;
