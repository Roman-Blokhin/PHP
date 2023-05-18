<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>

<body>
<header>
    <!-- в шапке мы создаем ссылку: href="/" - на этот же файл, все равно, что мы прописали бы: lesson_9.php -->
    <a href="lesson_9.php">Главная</a> |
    <!-- также мы создаем ссылку на другой файл: about.php, через символ '|' -->
    <a href="about.php">Про нас</a>
</header>

<h1>Про нас</h1>

<?php
echo "<p>На этой странице будет информация о нашей компании</p>";
?>

<footer>
    Все права защищены &copy; 2050 <!-- прописываем символ копирования: &copy; -->
</footer>
</body>

</html>