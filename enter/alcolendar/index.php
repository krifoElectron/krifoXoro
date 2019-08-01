<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
        <title>Второстепенная страница</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- <link rel="stylesheet" href="../css/style.css" /> -->
    </head>
    <body>
      
    <?php
      if ($_SESSION['isStuff'])
      {
        echo "хобана";
        include('./templates/krifo2.php');
      }
      else echo '<h1>Вали от сюда!</h1>';
    ?>
    </body>
    </html>
    