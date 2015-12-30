<form method="post">
    <input type="number" name="number">
    <p>
        <input type="submit">
</form>

<?php
if (isset($_POST['number']) &&
    is_numeric($_POST['number']) &&
    strlen($_POST['number']) == 3
) {
    $number = $_POST['number'];
    $n1 = intval($number / 100);
    $n2 = intval(($number / 100) / 10);
    $n3 = intval($number % 10);
    $average = $n1 + $n2 + $n3;
    $sum = $number[0] + $number[1] + $number[2];
    echo "Получено $number." . "<p>";
    echo "Сумма отдельных чисел - $sum" . "<p>";
    echo "Среднее арифмитическое - $average" . "<p>";
}

$link = fopen('text.txt', 'a+');
$pointer = fseek($link, 0, SEEK_SET);
$str = fgets($link);
for ($i = 0; $i < 1; $i++) {
    $str = fgets($link);
}
echo "Строка номер $i это - $str" . "<p>";

$file = fopen('text.txt', 'a+');
while (!feof($file)) {
    $str0 = fgets($file);
}
echo "Конечная строка это - $str0" . "<p>";

$file1 = fopen('text1.txt', 'r');
$file2 = fopen('text2.txt', 'r');
$file3 = fopen('text3.txt', 'r');
while (!feof($file1)) {
    $str1 = fgets($file1);
    fseek($file2, 0);
    while (!feof($file2)) {
        $str2 = fgets($file2);
        fseek($file3, 0);
        while (!feof($file3)) {
            $str3 = fgets($file3);
            if ($str1 == $str2 && $str2 == $str3) {
                echo "Общие строки это - $str1" . "<p>";
                break;
            }
        }
    }
}

?>
