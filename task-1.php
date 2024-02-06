<?php

//На вход подается строка из чисел, разделенных пробелами.
//Переместите все нули в конец строки. Порядок остальных чисел должен сохраниться.
//Input
//7 0 39 0 282 2 4 0 45
//Output
//7 39 282 2 4 45 0 0 0
//
$arr = array(7, 0, 39, 0, 282, 2, 4, 0, 45);
//
$zero_count = 0;
foreach ($arr as $value) {
    if ($value != 0) echo $value . ' ';
    else $zero_count++;
}
echo str_repeat('0 ', $zero_count);
