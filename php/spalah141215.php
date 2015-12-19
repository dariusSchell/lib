<?php
// Created by "Darius Schell"
// Date: 12/19/15
// Time: 9:40 AM

$x = 1;
$y = 101;
if ($y - 100 > $x) {
    print_r('true ');
} else {
    print_r('false ');
}

$massive = [-2, -1, 1, 2, 4, 8, 16, 32];
$min = $massive[0];
$max = $massive[0];
$maxIndex = false;
$minIndex = false;
foreach ($massive as $massiveSh => $massiveKey) {
    if ($massiveSh < $min) {
        $min = $massiveSh;
        $minIndex = $massiveKey;
    } else if ($massiveSh > $max) {
        $max = $massiveSh;
        $maxIndex = $massiveKey;
    }
}
$massive[$minIndex] = $max;
$massive[$maxIndex] = $min;
var_dump($massive);
