<?php
// Created by "Darius Schell"
// Date: 12/19/15
// Time: 9:43 AM

$names = "John, Jack, Daniel";
$substr = substr($names, 6, 4);
var_dump($substr);

$fruits = "Apple, Orange, Fruit, Juice";
$massiveReformatExp = explode(', ', $fruits);
$massiveReformatImp = implode(', ', $massiveReformatExp);
var_dump($massiveReformatExp);
var_dump($massiveReformatImp);

$strlen = strlen('fifth');
var_dump($strlen);

$time = "12.19.15 00:01";
$strpos = strpos($time, ':');
$substr1 = substr($time, $strpos + 1);
var_dump($substr1);
