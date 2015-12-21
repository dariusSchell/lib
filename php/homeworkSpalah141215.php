<?php
// Created by "Darius Schell"
// Date: 12/20/15
// Time: 3:42 AM

/*14.12.15*/
//3. Упорядочить значения массива по возрастанию.
//Реализовать двумя способами: с помощью стандартной функции и при помощи алгоритма пузырька.
$massive30 = [9, 7, 3, 5, 1];
sort($massive30);
$massive30len = count($massive30);
for ($i = 0; $i < $massive30len; $i++) {
    var_dump($massive30[$i]);
}
// Пузырьковый алгоритм.
function bubbleSort(array $array)
{
    $size = sizeof($array);
    for ($i = 1; $i < $size; $i++){
        for ($x = $size - 1; $x >= $i; $x--){
            if ($array[$x - 1] > $array[$x]){
                $result = $array[$x - 1];
                $array[$x - 1] = $array[$x];
                $array[$x] = $result;
            }
        }
    }
    return $array;
}
$array = [9 , 7, 3, 5, 1, 12, 15, 18, 0];
$array = bubbleSort($array);
var_dump($array);


//4. Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым,
//если сумма первых трех цифр в номере билета равна сумме последних трех цифр.
//Найдите количество счастливых билетов и процент от общего числа билетов.

// Генерируем многомерные массивы.
$massive40 = [];
$massive40approved = 0;
for ($x = 0; $x < 12; $x++) {
    for ($y = 0; $y < 6; $y++) {
        $massive40[$x][$y] = mt_rand(1, 3);
    }
}
// Проходим по циклу сравнивая значения.
foreach ($massive40 as $m40) {
    if ($m40[0] + $m40[1] + $m40[2]
        == $m40[3] + $m40[4] + $m40[5]
    ) {
        $massive40approved++;
    }
}
// Выводим общее количество билетов, счастливых билетов, и соотношение.
$massive40percent = ($massive40approved / count($massive40)) * 100;
var_dump($massive40);
var_dump($massive40approved);
print_r($massive40percent);
