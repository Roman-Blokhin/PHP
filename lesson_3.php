<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson three</title>

    <link rel="stylesheet" href="CSS/main.css"> <!-- также можно привязать файл css -->
</head>

<body class="magic">

<?php

    $x = 10;
    $y = 20;
    echo $x + $y . '<br />'; // с переменными можно выполнять любые функции
    echo $x - $y . '<br />';
    echo $x * $y . '<br />';
    echo $x / $y . '<br />';
    echo $x % $y . '<br />'; // в том числе и получение остатка от деления

    $x += 10; // мат. действия можно записывать сокращенно
    echo $x . '<br />';

    $x++; // прибавляет единицу
    $y--; // вычитает единицу
    echo $x . '<br />';
    echo $y . '<br />';

    echo M_PI . '<br />'; // можно обратиться ко встроеной константе - число ПИ
    echo M_E . '<br />'; // можно обратиться ко встроеной константе - число Е

    echo abs (-777) . '<br />'; // выводим число по модулю - не зависит от знака, будет положительное (встр. функц)
    echo ceil (3.1) . '<br />'; // округляет к большему (встр. функц)
    echo floor (5.9) . '<br />'; // округляет к меньшему (встр. функц)
    echo round (9.4357, 2) . '<br />'; // округляет по арифмет. правилам (встр. функц), пишем 2 числа после точки
    echo mt_rand (0, 20) . '<br />'; // выводит рандомное число в рамках указанного диапазона
    $rand = mt_rand (0, 20); // рандомное число можно заключить в переменную, а также произв. математ. действия
    echo $rand . '<br />';

    echo min (4, 1, -90, 8904, 84) . '<br />'; // выводит минимальное число из списка
    echo max (4, 1, -90, 8904, 84) . '<br />'; // выводит максимальное число из списка

?>

</body>
</html>