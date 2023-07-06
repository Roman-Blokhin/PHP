<?php
    session_start();
    $title = "Обратная связь";
    require "blocks/header.php";
?>

<h1 class="mt-5">Обратная связь</h1> <!-- class="mt-5" от bootstrap дает нам отступ сверху -->

<!-- value="" нам нужен для того, чтобы значение переданное в сессии оставалось в поле ввода после обработки данных -->

<form action="feedback_post.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION ["username"]?>" placeholder="Введите имя.." class="form-control">
    <input type="email" name="useremail" value="<?=$_SESSION ["useremail"]?>" placeholder="Введите почту.." class="form-control">
    <input type="text" name="texttheme" value="<?=$_SESSION ["texttheme"]?>" placeholder="Введите тему сообщения.." class="form-control">
    <textarea name="message" placeholder="Введите сообщение" class="form-control"><?=$_SESSION ["message"]?></textarea>

    <!-- в textarea не прописываем value, сессии прописываем между тегами открытия и закрытия -->

    <button type="submit" class="btn btn-success">Отправить</button>
</form>

<?php
    require "blocks/footer.php";
?>
