<?php
   session_start();//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    if (isset($_POST['day'])) { $day = $_POST['day']; if ($day == '') { unset($day);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['value'])) { $value=$_POST['value']; if ($value =='') { unset($value);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($day) or empty($value)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $day = stripslashes($day);
    $day = htmlspecialchars($day);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
 //удаляем лишние пробелы
   //  $login = trim($login);
   //  $password = trim($password);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
    $result = mysql_query("SELECT id FROM alcolendar WHERE day='$day'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
      exit ("Извините, введённый день логин уже зафиксирован. Введите другой день.");
    }


 // сохраняем данные
    $result2 = mysql_query ("INSERT INTO alcolendar (day, value) VALUES('$day','$value')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно всё запилили. <a href='https://krifoxoro.ru/enter/alcolendar'>Вернуться обратно</a>";
    }
 else {
    echo "Ошибка! Вы не успешно всё запилили.";
    }


?>
