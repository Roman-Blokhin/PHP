<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson seven</title>

    <link rel="stylesheet" href="CSS/main.css">
</head>

<!-- Цикл for, while и do while. Операторы циклов -->
<body class="der">
<?php
    for ($i = 0; $i <= 10; $i ++) {// цикл for. в скобках пишем (значение переменной; условие; как изменится переменная)
        echo $i  . ' '; // если одна строчка кода в цикле, фигурные скобки не нужны
    }

    echo '<br>';
    $a = 10;
    while ($a <= 100) { // условие прописываем в круглых скобках, а параметры изменения в фигурных
        echo $a . ' ';
        $a = $a + 10;
    }

    echo '<br>';
    $q = 10;
    $qq = 'Hello world';
    do {
        echo  $qq;
    } while ($q < 10); // цикл do while сначала 1 раз выполняет условие, а потом начинает проверять цикл

    echo '<br>';
    for ($el=100; $el>10; $el /=2) {

        if ($el<=15) {
            echo 'Game Over';
            break; // прерывает цикл на определенном условии
        }
        if ($el % 2 == 0)
            continue; // не выполняет код, перепрыгивая через оставшееся действие, начиная новую итерацию цикла

        echo $el.'<br>';
    }

    echo '<br>';
    // используем цикл for для того, чтобы перебрать массив
    $list = [3, 7, 90.76, 'hero', 43, 'frog'];
    for ($i = 0; $i < count($list); $i ++) { // задаем знач. элемента, используем функц. подсчета count и увелич. элемент на 1
        echo "Элемент $i: $list[$i] <br>"; // выводим номер элемента по индексу и сам элемент по индексу, перебирая массив
    }

    echo '<br>';
    // выведем все элементы ассоциативного массива
    $lili = ['age' => '34', 'name' => 'Robert', 'hobby' => 'music'];
    // цикл ащкуфср () идеально подходит для работы с массивами и перебора его элементов
    foreach ($lili as $item => $value) // обязательно указываем as, переменная item отвечает за ключ, а value за значение
        echo "Ключ: $item. Значение: $value <br>";

    echo '<br>';
    // цикл foreach () перебирает также одномерные массивы
    $loy = [6, 8, 3, 0];
    foreach ($loy as   $ii => $value)
        echo "Индекс: $ii; Значения: $value <br>"; //можем вывести и индекс, и значение
?>
</body>
</html>