<?php
$array = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
];

$sumA  = 0;
$sumB  = 0;

$count = count($array);
foreach ($array as $key => $nodes) {
    foreach ($nodes as $subKey => $value) {
        $sumA += $array[$key][$key];
    }
    $sumB += $array[$key][$count - 1];
    $count--;
}
echo $sumA - $sumB;

