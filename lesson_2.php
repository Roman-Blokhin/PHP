<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson two</title>
</head>

<body>

<!-- 1. работаем с переменными -->

<?php

    $number = 0; // создаем переменную, присваиваем значение
    $number = 45; // этой же переменной мы можем присвоить новое значение, оно заменяется
    echo $number; // выводим переменную
    $num = 90;
    echo '<br />'; // html код прописвается в ковычках
    $lol = $number - $num; // с переменными можно делать вычисления
    echo $lol;
    echo '<br /> Переменная; ' . $num . $number; // разные типы кода, или несколько значений прописваем через точку
    $bool = true; // можно присваивать будевые значения переменным
    $text = '0.5';
    echo '<br />';
    echo floatval($text) + $number; // мы приводим строку к типу float, к числу можно привести через intval()

    define('AGE', 24); // можно определить константу, значение не меняется ('имя', значение)
    echo '<br />' . AGE;

?>

</body>

</html>