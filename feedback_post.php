<!-- здесь будут обрабатываться данные с формы обратной связи feedback.php -->

<?php
    session_start(); // запускаем сессии
    $user_name = htmlspecialchars(trim ($_POST["username"])); // в качестве параметра принимает строку и удаляет из нее все html теги
    $user_email = htmlspecialchars(trim ($_POST["useremail"]));
    $user_theme = htmlspecialchars(trim ($_POST["texttheme"]));
    $message = htmlspecialchars(trim ($_POST["message"]));

    // прописываем, что мы обращаемся к сессиям, после обработки данных от пользователя, даннные останутся в форме

    $_SESSION ["username"] = $user_name;
    $_SESSION ["useremail"] = $user_email;
    $_SESSION ["texttheme"] = $user_theme;
    $_SESSION ["message"] = $message;

    // напишем проверки для полей ввода данных

    if (strlen($user_name) <= 1) {
        $error_username = "Введите корректное имя";
    }
    else if (strlen($user_email) < 5 || strpos($user_email, "@") == false) { // strpos - ищет в переменной конкретный символ
        $error_email = "Введите корректный email";
    }
    else if (strlen($user_theme) < 5) {
        $error_user_theme = "Тема менее 5 символов";
    }
    else if (strlen($message) < 15) {
        $error_message = "Сообщение менее 15 символов";
    }
