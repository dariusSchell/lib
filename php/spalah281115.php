<?php
// Created by "Darius Schell"
// Date: 12/28/15
// Time: 7:02 PM
$vCheck = true;
$validate = ['firstName, lastName, email, phone, password'];
foreach ($validate as $vMassive) {
    if (!isset($_POST[$vMassive])) {
        $vCheck = false;
        break;
    }
}
?>

<form method="post">
    <input type="password" name="password"><br>
    <input type="hidden" name="hidden" value="mark"><br><!--if many pages to one script-->
    <textarea name="text1" value="<? if (isset($_POST['text1'])) {
        echo $_POST['text1'];
    } ?>"></textarea><br>
    <input type="submit">

    <?
    $radio = [1, 2, 3];
    foreach ($radio as $rMassive) {
        ?>
        <input type="radio" name="radio" value="<? echo $rMassive ?>">
        <? if (isset($_POST['radio']) && $_POST['radio'] == $rMassive) {
            echo 'checked';
        }
    }
    ?>

    <?
    if (isset($_POST['value']) && isset($_POST['numValue']) && is_numeric($_POST['numValue'])) {
        $sum = $_POST['numValue'] * 400;
        if ($_POST['value'] == 'Egypt') {
            $sum += $sum * 0.1;
        } elseif ($_POST['value'] == 'Italy') {
            $sum += 0.12;
        }
        if (isset($_POST['unValue'])) {
            $sum -= $sum * 0.05;
        }
        echo $sum;
    }
    ?>

    <br>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">
    </form>
    <?php print_r($_FILES);?>

    <?php
    $way = file_get_contents('');
    $argc = file ('');
    $bad = file_put_contents('');

    ?>

