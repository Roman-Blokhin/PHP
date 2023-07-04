<!doctype html>
<html lang="ru"
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?=$title;?> </title> <!-- прописывает переменную, которая установлена у нас во всех файлах со своим значением
    код php можно записать сокращенно, как: <?=$title;?> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5"> <!-- позволяет нам прикрепить крутой стиль дя нашего визуала -->

        <header>
            <!-- обязательно пропичсываем хедер и ссылки прикрепленных файлов в нем -->

            <!-- в шапке мы создаем ссылку: href="/" - на этот же файл, все равно, что мы прописали бы: lesson_9.php -->
            <a href="lesson_9.php">Главная</a>
            <!-- также мы создаем ссылку на другой файл: about.php, через символ '|' -->
            <a href="about.php">Про нас</a>
            <a href="contacts.php">Контакты</a>
            <a href="lessons.php">Уроки</a>
        </header>
