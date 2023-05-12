<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP four lesson</title>

    <link rel="stylesheet" href="CSS/main.css">
</head>

<body id="magic">

<?php

    $text = 'Hello world';
    echo "Var: $text" . '!'; // в дв. ковычках можно прописать переменную, в одинарных, нет + объедин. с одинарн. кавычками
    echo '<br> <input type="text">'. '<br>'; // можно выводить любой код html

    $len = strlen($text); // встр. функц., которая считает кол-во символов в строке
    echo $len . '<br>';

    $rom = trim('      Привет, Герой!         '); // встр. функц. убирает все лишние пробелы в тексте
    echo $rom . '<br>';

    $reg = strtolower('HELlo WORLD'); // переводит латиницу в нижн. регистр
    echo $reg . '<br>';

    $rega = strtoupper('hello, hero!'); // переводит латиницу в верхн. регистр
    echo $rega . '<br>';

    $roma = strtolower(trim ('         HeLLo WORlD        ')); // можно объединять функции
    echo $roma . '<br>';

    $ro = 'body bilding';
    echo md5($ro); // можно захэшировать наш текст - перекодировать для безопасности и хранения на сервере

?>

</body>

</html>