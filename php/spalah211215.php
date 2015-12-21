<?php
// Created by "Darius Schell"
// Date: 12/21/15
// Time: 7:23 PM

$char = 'start /* comment */ finish';
$start = strpos($char, '/*');
$end = strpos($char, '*/');
$charRefactor = substr($char, $start, $end - $start);
$charReplace = str_replace($charRefactor, '', $char);
var_dump($charReplace);
///
function lesson($x, $y, $z)
{
    return $x * $y * $z;
}

var_dump(lesson(1, 10, 5));
///
function massiveSum(array $massive)
{
    $mSum = 0;
    foreach ($massive as $mKey => $mValue) {
        if (is_array($mValue) == false) {
            $mSum += $mValue;
        } else {
            $mSum += massiveSum($mValue);
        }
    }
    return $mSum;
}

$array = [10, [1, 2, 3, [4, 5, 6, [8, 9, 10]]]];
$arrayAdv = [5, [3, 6, 9], [12, 15, 18]];
var_dump(massiveSum($arrayAdv));
///
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

    <title>lessonStack</title>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="shortcut icon" href="" type="image/x-icon"/>-->

</head>
<body>
<div>
    <?php
    for ($i = 1; $i < 6; $i++) {
        print_r('<a href="index.php?page=' . $i . '">Page' . $i . '</a> <br/>');
        print_r("<a href=\"index.php?page=$i\">Page$i</a><br />");
    }
    ?>
    <?php
    for ($i = 1; $i < 6; $i++) { ?>
        <a href="spalah211215.php?page=<? echo $i ?>">Page <? echo $i ?></a>
    <?php } ?>
    <?
    var_dump($_GET);
    ?>
    <?php
    //    if (isset ($_GET['id']) && is_int($_GET['id'])){
    //        $id = $_GET['id'];
    //    }
    ?>
    <form action="" method="POST">
        <input type="text" name="name">
        <input type="submit" value="value">
    </form>
    <?php
    $name = $_POST['name'];
    var_dump($name);
    ?>
</div>
</body>
</html>
