<?php
//На вход подается строка целых уникальных (не повторяющихся) чисел,
//разделенных пробелами (elements).
//Следующая строка содержит число элементов в комбинации (k).
//1 ≤ k ≤ количество elements
//Найдите все возможные комбинации заданной длины. Выведите их в любом порядке.
//Пример
//Input
//1 2
//2
//Output
//1 1
//1 2
//2 1
//2 2

$nums = [1, 2];
$count = 3;

function find(array $array, $count)
{
    if ($count === 1) {
        return $array;
    }
    $lowLevelCombinations = find($array, $count - 1);
    $currentLevelCombinations = [];
    foreach ($array as $item) {
        foreach ($lowLevelCombinations as $lowLevelCombination) {
            $currentLevelCombinations[] = $item . ' ' . $lowLevelCombination;
        }
    }
    return $currentLevelCombinations;
}

foreach (find($nums, $count) as $combination) {
    echo $combination . PHP_EOL;
}
