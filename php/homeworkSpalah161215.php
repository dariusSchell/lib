<?php
// Created by "Darius Schell"
// Date: 12/20/15
// Time: 6:02 AM

/*16.12.15*/
//4. В данной строке найти количество цифр. Замените в строке все вхождения 'wrong' на 'right'.
$char40 = 'Sorry, I was wrong, after 091215, and before 161215';
// Заменяем точные значения в строке.
$strReplace40 = str_replace('wrong', 'right', $char40);
var_dump($strReplace40);
// Заменяем значения по регулярному выражению.
$pregReplace40 = preg_replace('/[^\d]/', '', $char40);
$strlen40 = strlen($pregReplace40);
var_dump($strlen40);

//5. Найдите количество вхождения 'Wake up' в строку.
$char50 = 'Wake up, my dear friend! Wake up, Neo';
$substr50 = substr_count($char50, 'Wake up');
var_dump($substr50);
// and
$char50 = 'Wake up, my dear friend! Wake up, Neo';
$pregMatch50 = preg_match("/Wake up/", $char50, $result);
var_dump($result);

//6. Исключить из строки группы символов, расположенные между символами «/*», «*/» включая границы .
// Не знаю как решить. Хочу решить возле доски. Можно?

//7. Дана строка, состоящая из слов, разделенных символами,
//которые перечислены во второй строке. Показать все слова.
$char70 = "So,now_we_go_to_bad.Ok!?";
$char70symbols = [',', '_', '.', '!', '?'];
$strReplace70 = str_replace($char70symbols, ' ', $char70);
var_dump($strReplace70);
// Как альтернатива регулярным выражениям. Был уже пример с ними.
