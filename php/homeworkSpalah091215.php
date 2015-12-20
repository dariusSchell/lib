<?php
// Created by "Darius Schell"
// Date: 12/20/15
// Time: 2:09 AM

/*09.12.15*/
//4.1 Объявить пустой массив, заполнить массив значениями от 0 до 100,
//вывести массив на экран при помощи цикла и при помощи функции print_r
$massive41 = [0];
for ($massive41 = 0; $massive41 <= 100; $massive41++) {
    print_r($massive41);
};

//4.2 Объявить пустой массив, заполнить его случайными значениями при помощи функции mt_rand
//http://php.net/manual/ru/function.mt-rand.php , найти среднее арифметическое значение.
$massive42 = [0];
$sumKey42 = 0;
$sumValue42 = 0;
for ($massive42 = 0; $massive42 <= 30; $massive42++) {
    $massive42 += mt_rand(1, 3);
    $sumValue42 += $massive42;
    $sumKey42 += count($massive42);
    $midResult42 = $sumValue42 / $sumKey42;
    var_dump($massive42);
};
print_r($midResult42);

//5. Ознакомится с функциями для работы с массивами http://php.net/manual/en/ref.array.php ,
////выполнить задание 4.2 при помощи функции array_sum http://php.net/manual/en/function.array-sum.php
$massive50 = [0];
for ($i = 0; $i <= 3; $massive50[$i] = mt_rand(1, 99), $i++) {
    $average50 = array_sum($massive50) / count($massive50);
    var_dump($massive50);
};
print_r($average50);

//6. Заполнить массив случайными значениями, вывести их на экран при помощи цикла foreach.
$massive60 = [0];
for ($i = 0; $i <= 3; $massive60[$i] = mt_rand(1, 99), $i++) {
}
foreach ($massive60 as $m60) {
    var_dump($m60);
}
