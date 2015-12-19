<?php
// Created by "Darius Schell"
// Date: 12/19/15
// Time: 8:37 AM

$array = [
    is_int(1), is_float(3.14159265359), is_bool(true),
    is_string("Hello world!"), is_null(null), pow(2, 8)
];
var_dump($array);

$arrayKeyValue = [
    "Key0" => "Value0", "Key1" => "Value1", "Key2" => "Value2",
    "Key3" => "Value3", "Key4" => "Value4"
];
var_dump($arrayKeyValue);

$arrayForeach = ['Value0', 'Value1', 'Value2', 'Value3'];
unset($arrayForeach[0]);
foreach ($arrayForeach as $value) {
    var_dump($value);
};

$arrayForeachAdv = [
    ['Value1', 'Value2', ['Value3', 'Value4', ['Value5', 'Value6']]],
];
foreach ($arrayForeachAdv as list ($a, $b, list($c, $d, list($x, $y)))) {
    var_dump($a, $b, $c, $d, $x, $y);
};
