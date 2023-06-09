<!-- 1. если в коде только php, то закрывать тег не нужно
2. наша задача вывести весь массив данных, которые будут у нас отправлены в форму обратной связи, для этого используем:
print_r (_$POST) и используем метод $_POST
3. массив создается ассоциативный, есть ключи-значения -->

<?php
    /* print_r($_POST); */ /* чтобы вывести весь массив - все введенные данные, достаточно этой строчки */

    /* 4. но мы делаем проверку */
    $name = $_POST ['user_name'];
    $email = $_POST ['user_email'];
    $password = $_POST ['user_password'];


    if (trim ($name) == "") { /* 5. trim удаляет все пробелы до и после введенного значения */
        echo 'Вы не ввели имя пользователя';
    }
    else if (strlen (trim ($name)) <= 1) { /* 6. strlen - считает количество символов */
        echo "Такого имени не существует";
    }
    else if (trim($email) == "") { /* 7. проверяем, введена ли почта */
        echo "Вы не ввели email";
    }
    else if (trim($password) == "") { /* 8. проверяем, введен ли пароль */
        echo "Вы не ввели пароль";
    }
    else if (trim ($_POST ['user_message']) == "") { /* 9. проверяем, введено ли сообщение */
        echo "Вы не ввели комментарий";
    }
    else {
        $password = md5($password);
        /* 11. мы хешируем пароль, чтобы он был зашифрован для хранения в базе данных */
        /* в качестве хеширования можно использовать и др. кодировки, не "md5", а, к примеру, "sha1" */

        /* 13. чтобы выводить хешированный пароль через цикл foreach, нужно писать так: */
        $_POST ['user_password'] = sha1($password);

        echo "<h2>Первый вариант вывода данных:</h2> <p>$name</p> <p>$email</p> <p>$password</p> <p> $_POST[user_message]</p>";
        /* 10. мы выводим все нужные нам данные на экран, $_POST[user_message] пишем так,
        потому что не создавали переменную, дополнительно user_message в кавычки не заключаем.
        здесь используется хеширование пароля через переменную - пункт 11*/

        /* 12. можно также выводить все данные из формы через цикл foreach.
        здесь используется хеширование пароля через переменную - пункт 13 */
        echo "<h2>Второй вариант вывода данных:</h2>";
        foreach ($_POST as $key => $value) {
            echo "<p>$value</p>";
        }
    }
//        header('location: about.php');
//        exit; /* заканчивает код */
//        /* 13. с помощью header('location: ') мы указываем путь на страницу, на которую будет переведен пользователь
//        после отправки данных */

/* 14. данные мы можем передавать двумя методами: $_POST и $_GET. Метод $_GET передает все данные через url,
они отображаются в адресной строке, а в методе $_POST данные передаются скрыто. Чтобы поменять метод передачи данных,
нужно просто все $_POST в нашем коде заменить на $_GET, либо прописать так: print_r($_GET);
Для форм обратной связи обычно используют метод $_POST, а метод $_GET используют, когда нужно просто создать страницу
с динамическими параметрами (чтобы введенные данные выводились на странице) */

// ----------------------------------------------------------------------------------- //

    // 15. создаем файл, в котором будем хранить все данные, переданные через форму обратной связи
    $file = fopen ("fb.txt", "a");
    fwrite($file, "\n$name\n$email\n$password\n\n");
    fclose($file);

    /* fopen() - открывает файл, который мы указываем, если его нет, то создает. Второй параметр - a,
    говорит о том, что переданные будут добавлены в файл, w - данные будут записаны вместо существующих, r - прочитать документ.
    fwrite() - записывает данные, которые мы указываем как параметры.
    fclose() - закрывает документ после записи. Обязательное действие, чтобы не было утечки */
