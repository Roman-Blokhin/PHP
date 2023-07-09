<?php
    session_start();
    $title = "Обратная связь";
    require "blocks/header.php";
?>

<h1 class="mt-5">Обратная связь</h1> <!-- class="mt-5" от bootstrap дает нам отступ сверху -->

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
    require "blocks/footer.php";
?>
