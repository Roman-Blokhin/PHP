<?php
    $title = "Уроки";
    require "blocks/header.php";
?>


<?php
    echo "<br>" . "<h3>Куки и сессии в PHP:</h3>";

    $user_name = "Roman"; // создаем переменную и помещаем значение
    setcookie("name", $user_name, time () + 60); /* прописываем функцию, чтобы сохранить в нее значение, передаем название клююча,
    значение и время в секундах*/
    // print_r($_COOKIE); // выводим все куки на экран в виде массива

    // setcookie("name", $user_name, time () - 60); // со знаком минус куки могут быть удалены
    echo $_COOKIE ["name"]; // выводим просто значение куки на экран

    /* куки подходят для авторизации. можно прописать условия, что если значение login == "",
    то нужно показать пользователю окно авторизации */



?>


<?php
    echo "<br> <br> <br> <br>";
    require "blocks/footer.php";
?>
