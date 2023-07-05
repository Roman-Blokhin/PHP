<!-- здесь будут обрабатываться данные с формы обратной связи feedback.php -->

<?php
    session_start(); // запускаем сессии
    $user_name = htmlspecialchars(trim ($_POST["username"])); // в качестве параметра принимает строку и удаляет из нее все html теги
    $user_email = htmlspecialchars(trim ($_POST["useremail"]));
    $user_theme = htmlspecialchars(trim ($_POST["texttheme"]));
    $texttheme = htmlspecialchars(trim ($_POST["message"])); 
