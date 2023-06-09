<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson eight</title>
</head>

<!-- Функции. Область видимости -->

<body>
<?php
    function info () { // прописываем function - создание, далее идет название, в фигурных скобках прописываем параметры
        echo 'Info printed <br>';
    }
    info (); // обращаемся к функции, выводя ее

// -----------------------------------------------------------------------------

    function doc ($word) { // создаем параметр $word - имя выбираем любое
        echo "$word <br>";
    }
    doc(45); // задаем значение для нашего параметра
    doc('Roman');
    doc(true);

    function math ($x, $y){
        return $x * $y; // возвращаем результат. используется для того, чтобы рез. записать в переменную и дальше использовать
    }
    $res = math (4, 12); // можем записать значение в переменную, при использовании return
    doc ($res); // можно вывести значение через другую функцию

// -----------------------------------------------------------------------------

    // создадим массив и через функцию выведем сумму всех элементов массива
    function summary ($arr) { // создаем функцию summary, вместо arr будет вставлен наш массив в с числами
        $sum = 0; // создаем переменную суммы со значением 0
        foreach ($arr as $value) { // перебираем каждый элемент в нашем будущем массиве
            $sum += $value; // складываем все элементы вместе
        }
        return $sum; // возвращаем сумму
    }
    $list = [4, 67, 90, 100]; // создаем тот самый массив с числами
    echo summary($list) . "<br>"; // присваиваем наш массив list в параметры нашей функции, как буд-то подставляем число в формулу
    echo summary([4, 909, 87]) . "<br>"; // соответственно, прописав функцию summary мы можем ее использовать много раз

// -----------------------------------------------------------------------------

    // область видимости
    function vio () { // 1. создаем функцию
        global $x; // 4. обращаемся к глобальной переменной, ранее созданной функции
        $x = 100; // 2. создаем локальную переменную; (5. после вызова глоб. переменной, присваиваем ей новое значение)
    }
    $x = 10; // 3. создаем глобальную переменную
    vio(); // 6. вызываем функцию
    echo $x . "<br>"; // 7. выводим на экран функцию

// -----------------------------------------------------------------------------

    // статическая переменная
    function click () {
        static $count; // используем static, чтобы зафиксировать значение во время сложения. Если уберем, счета не будет
        $count ++;
        echo $count . '<br>';
    }
    click ();
    click ();
    click ();
    click ();

// -----------------------------------------------------------------------------

    function name ($art = 10) { // аргумент по умолчанию. выводится при вызове функции, когда не прописывается аргумент
        echo "Value is " . $art . '<br>';
    }
    name (42);
    name ();
?>
</body>
</html>