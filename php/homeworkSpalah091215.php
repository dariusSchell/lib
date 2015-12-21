<?php
// Created by "Darius Schell"
// Date: 12/20/15
// Time: 2:09 AM

/*09.12.15*/
//4.1 Объявить пустой массив, заполнить массив значениями от 0 до 100,
//вывести массив на экран при помощи цикла и при помощи функции print_r
$massive41 = [];
for ($i = 0; $i <= 100; $massive41[$i] = $i++) {
}
print_r($massive41);

//4.2 Объявить пустой массив, заполнить его случайными значениями при помощи функции mt_rand
//http://php.net/manual/ru/function.mt-rand.php , найти среднее арифметическое значение.
$massive42 = [];
$sum42 = 0;
for ($i = 0; $i <= 10; $i++) {
    $massive42[$i] = mt_rand(1, 9);
    $sum42 += $massive42[$i];
    $count42 = count($massive42);
    $percent42 = $sum42 / $count42;
}
var_dump($massive42);
print_r($percent42);

//5. Ознакомится с функциями для работы с массивами http://php.net/manual/en/ref.array.php ,
////выполнить задание 4.2 при помощи функции array_sum http://php.net/manual/en/function.array-sum.php
$massive50 = [];
for ($i = 0; $i <= 3; $i++) {
    $massive50[$i] = mt_rand(1, 99);
    $average50 = array_sum($massive50) / count($massive50);
}
var_dump($massive50);
print_r($average50);

//6. Заполнить массив случайными значениями, вывести их на экран при помощи цикла foreach.
$massive60 = [];
for ($i = 0; $i <= 3; $i++) {
    $massive60[$i] = mt_rand(1, 99);
}
foreach ($massive60 as $m60) {
    var_dump($m60);
}
