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

?>
</p>
</body>
</html>