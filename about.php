<?php
    $title = "Про нас"; // 2. устанавливаем переменную для отображения названия страницы, вносим изменения в хедер ОБЯЗАТЕЛЬНО
    require "blocks/header.php";
?>

<div class="container mt-5"> <!-- 8. помещаем нашу форму в div, чтобы подключить класс. Класс container встроен в
    подключенные стили bootstrapcdn, а mt-5 делает отступ нашего блока сверху -->
    <h1>Про нас</h1>
    <form action="check_post.php" method="post"> <!-- 3. создаем форму для передачи данных методом post -->
        <!-- 5. создаем ввод данных, type указывает, что будет введено, присваиваем имя через name, placeholder прописывает,
        что будет написано в нашем поле для ввода, подключаем класс со стилями для красоты форм -->
        <input type="text" name="user_name" placeholder="Введите имя" class="form-control"><br>
        <input type="email" name="user_email" placeholder="Введите email" class="form-control"><br>
        <input type="password" name="user_password" placeholder="Введите пароль" class="form-control"><br>
        <!-- 6. создаем форму для текста, который может отправить нам пользователь -->
        <textarea name="user_message" placeholder="Введите сообщение" class="form-control"></textarea><br>
        <!-- 7. саму кнопку для отправки можно создать через input или через тег button, через input указываем type="submit",
         чтобы кнопка не просто нажималась, а именно отправляла данные на сервер, перезагружая нашу страницу -->
        <input type="submit" value="Отправить" class="btn btn-success"><br>
    </form>
</div>

<?php
    require "blocks/footer.php";
?>

<!-- 1. подключили хедер и футер из других файлов -->

<!-- 4. если не прописать атрибут action="", или оставить его пустым, то обработка данных будет происходить на этой странице,
но мы создаем отдельный файл для этого и подключаем его через action=""

