<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php lesson five</title>

    <link rel="stylesheet" href="CSS/main.css">
</head>

<!-- создаем условные операторы -->
<body id="mag">
<p>
<?php

    $a = 64;
    $b = 'hello';
    if ($a > 64) {
        echo 'Первое условие верно!';
        echo '<br> Да, точно верно';
    }
    else if ($a < 64 || $b == 'hello') // символ || можно заменить на or
        echo 'Второе условие верно'; // если всего одна строчка условия, то фигурные скобки можно не писать
    else {
        echo 'Конец игры';
    }

    $aa = true;
    $bb = 76;
    if ($bb < 76 || $aa) { // в данном случае $aa эквивалентно записи: $aa == true
        echo '<br>True';
    } else {
        echo '<br>False';
    }

    $WeatherGood = false;
    $number = 1;
    // символ && (амперсанд) заменяет оператор: and
    if ($number == 1 && !$WeatherGood) { // в данном случае $WeatherGood эквивалентно записи: $WeatherGood == false
        echo '<br> Все сработало верно, погода плохая';
    }

    // условный оператор switch
    $x = 56;
    switch ($x) { // с помощью оператора switch проверяем случай (case), проверяем только на правильность условия
        ;case 57: // фигурные скобки не нужны, пишем через двоеточие
            echo '<br>Все нормально';
            break; // break писать обязательно при завершении условия
        case 56:
            echo '<br>Ошибка в условии';
            break;
    }

    $xx = 'hello';
    switch ($xx) {
        case 'toy':
            echo '<br>Первое условие верно';
        break;
        default: // выполняет функцию else, если ни одно условие не сработало
            echo '<br>Все условия неверные'; // break в default писать не нужно, это посл. условие
    }

?>
</p>
</body>
</html>