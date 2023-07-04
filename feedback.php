<?php
    $title = "Обратная связь";
    require "blocks/header.php";
?>

<h1 class="mt-5">Обратная связь</h1> <!-- class="mt-5" от bootstrap дает нам отступ сверху -->

<form action="feedback_post.php" method="post">
    <input type="text" name="username" placeholder="Введите имя.." class="form-control">
    <input type="email" name="useremail" placeholder="Введите почту.." class="form-control">
    <input type="text" name="texttheme" placeholder="Введите тему сообщения.." class="form-control">
    <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>

<?php
    require "blocks/footer.php";
?>
