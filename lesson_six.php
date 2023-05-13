<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP lesson six</title>

    <link rel="stylesheet" href="CSS/main.css">
</head>

<!-- Массивы данных. Одномерные и многомерные -->

<body class="deffence">
<?php
    $nums = array(2, 5, 7, 79, -70, 0); // создаем массив, array прописывать обязательно
    echo $nums [4] . '<br>'; // по индексу можем вызвать элемент массива
    $nums [0] = 666; // можно переназначить значение элемента
    echo $nums [0] . '<br>';

    $arr = ['hero', 5, 90.034, true, 3, 'toys']; // элементы могут быть разных типов, array можно заменить на кв. скобки []
    echo $arr[5] . '<br>';

    // ассоциативные массивы
    $list = ['age' => 45, 1 => 'Roman', 'hobby' => 'music']; // ключ => значение, ключ может быть люб. типа: str, int, float, bool
    echo $list ['age'] . '<br>'; // вызов производится по ключу
    $list ['hobby'] = 'sport'; // можно заменять значение, обращаясь к ключу
    echo $list ['hobby'] . '<br>'; // выводить можно только 1 элемент
    echo $list [1] . '<br>';

    /* мое представление, как будут храниться данные в базе данных в моей соц. сети
     * $list
     * - name
     * - surname
     * - age
     * - birthday
     * - email
     * - tel number
     */

    // многомерные массивы - массивы, в которых прописаны несколько массивов
    $matrix = [
        [1, 56, 78, 90, true],
        ['go', 'run', 65.08, 1],
        [1=>23, 2=>56, 3=>99]
    ];
    echo $matrix [2][3] . '<br>'; // так мы обращаемся к нужному элементу, сначала по индексу выбираем массив, затем элемент
    echo $matrix [0][1] . '<br>';
    $matrix[0][4] = 'false';
    echo $matrix [0][4];
?>
</body>
</html>