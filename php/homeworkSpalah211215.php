<!DOCTYPE HTML>
<html lang="en">
<body>
<div>
    <?php
    //7. Сформировать ссылки на страницу с передачей дня недели,
    //если передан день недели то вывести его. Сделать при помощи $_GET
    for ($i = 1; $i < 8; $i++) { ?>
        <a href="homeworkSpalah211215.php?page=<? echo $i ?>">День недели номер <? echo $i ?><br></a>
    <?php }
    if (isset ($_GET['page'])) {
        $day = $_GET['page'];
        switch ($day) {
            case 1:
                print 'Сегодня Понедельник';
                break;
            case 2:
                print 'Сегодня Вторник';
                break;
            case 3:
                print 'Сегодня Среда';
                break;
            case 4:
                print 'Сегодня Четверг';
                break;
            case 5:
                print 'Сегодня Пятница';
                break;
            case 6:
                print 'Сегодня Суббота';
                break;
            case 7:
                print 'Сегодня Воскресенье';
                break;
            default:
                print 'Некорректное значение';
                break;
        }
    }
    ?>

    <?php
    //8. Пользователь вводит свой возраст . Если он больше 80 лет,
    //то вывести 'Здравствуйте, уважаемый', иначе 'Успехов!' . Сделать при помощи формы .
    if (isset($_POST['age'])) {
        if ($_POST['age'] > 80) {
            print 'Здравствуйте, уважаемый';
        } else {
            print 'Успехов!';
        }
    }
    ?>
    <p>Введите свой возраст:</p>
    <form method="POST">
        <input type="number" name="age" value="">
        <input type="submit" value="check">
    </form>
</div>
</body>
</html>
