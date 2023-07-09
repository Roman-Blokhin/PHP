<!-- здесь будут обрабатываться данные с формы обратной связи feedback.php -->

<?php
    session_start(); // запускаем сессии

    unset ($_SESSION ["user__name"]); // при заходе на страницу сессии будут очищаться + очистятся поля ввода
    unset ($_SESSION ["usere__mail"]);
    unset ($_SESSION ["text__theme"]);
    unset ($_SESSION ["message__"]);

    unset ($_SESSION ["error_username"]);
    unset ($_SESSION ["error_email"]);
    unset ($_SESSION ["error_user_theme"]);
    unset ($_SESSION ["error_message"]);

    function redirect() { // прописываем функуию для возврата на страницу обратной связи после обработки данных
        header('Location: feedback.php');
        exit;
    }

    $user_name = htmlspecialchars(trim($_POST["username"])); // в качестве параметра принимает строку и удаляет из нее все html теги
    $user_email = htmlspecialchars(trim($_POST["useremail"]));
    $user_theme = htmlspecialchars(trim($_POST["texttheme"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // прописываем, что мы обращаемся к сессиям, после обработки данных от пользователя, даннные останутся в форме

    $_SESSION ["user__name"] = $user_name;
    $_SESSION ["usere__mail"] = $user_email;
    $_SESSION ["text__theme"] = $user_theme;
    $_SESSION ["message__"] = $message;

    // напишем проверки для полей ввода данных

    if (strlen($user_name) <= 1) {
        $_SESSION ["error_username"] = "Введите корректное имя"; /* если возникает ошибка, то мы устанавливаем это значение внутри сессии,
        чтобы вывести их в форме обратной связи */
        redirect(); // вызываем функцию
    }
    else if (strlen($user_email) < 5 || strpos($user_email, "@") == false) { // strpos - ищет в переменной конкретный символ
        $_SESSION ["error_email"] = "Введите корректный email";
        redirect();
    }
    else if (strlen($user_theme) < 5) {
        $_SESSION ["error_user_theme"] = "Тема менее 5 символов";
        redirect();
    }
    else if (strlen($message) < 15) {
        $_SESSION ["error_message"] = "Сообщение менее 15 символов";
        redirect();
    }
    else {
        redirect();
    }
