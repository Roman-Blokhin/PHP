<?php
    session_start();
    $title = "Обратная связь";
    require "blocks/header.php";
?>

<h1 class="mt-5">Обратная связь</h1> <!-- class="mt-5" от bootstrap дает нам отступ сверху -->

<!-- делаем форму уведомления об отправке письма -->

<!-- класс text-success от bootstrap, который придает тексту зеленый цвет -->
<div class="text-success"><?=$_SESSION['success_mail']?></div>
<!-- прописываем сессию, которая выводит подтверждение отправки письма, прописана на странице feedback_post.php -->


<!-- value="" нам нужен для того, чтобы значение переданное в сессии оставалось в поле ввода после обработки данных -->

<form action="feedback_post.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION ["user__name"]?>" placeholder="Введите имя.." class="form-control">
    <div class="text-danger"><?=$_SESSION["error_username"]?></div> <br>
    <!-- прописываем условия, в которых текст об ошибке будет выводиться сразу в форме обр связи после поля ввода -->

    <input type="email" name="useremail" value="<?=$_SESSION ["usere__mail"]?>" placeholder="Введите почту.." class="form-control">
    <div class="text-danger"><?=$_SESSION["error_email"]?></div> <br>

    <input type="text" name="texttheme" value="<?=$_SESSION ["text__theme"]?>" placeholder="Введите тему сообщения.." class="form-control">
    <div class="text-danger"><?=$_SESSION["error_user_theme"]?></div> <br>

    <textarea name="message" placeholder="Введите сообщение" class="form-control"><?=$_SESSION ["message__"]?></textarea>
    <div class="text-danger"><?=$_SESSION["error_message"]?></div> <br>

    <!-- в textarea не прописываем value, сессии прописываем между тегами открытия и закрытия -->
    <!-- класс от bootstrap, позволяет сделать красный текст -->

    <button type="submit" class="btn btn-success">Отправить</button>
</form>

<?php

    unset ($_SESSION ["user__name"]); // при заходе на страницу/перезагрузке, сессии будут очищаться + очистятся поля ввода
    unset ($_SESSION ["usere__mail"]);
    unset ($_SESSION ["text__theme"]);
    unset ($_SESSION ["message__"]);

    unset ($_SESSION ["error_username"]);
    unset ($_SESSION ["error_email"]);
    unset ($_SESSION ["error_user_theme"]);
    unset ($_SESSION ["error_message"]);
    unset ($_SESSION["success_mail"]);

    require "blocks/footer.php";
?>
