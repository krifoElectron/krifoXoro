<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
    <html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Второстепенная страница</title>
        <link rel="stylesheet" href="../css/style.css" />
    </head>

    <body>
    <header>
      <nav class="main-menu">
        <div>Навигация</div>
        <ul>
          <li><a href="https://krifoxoro.ru">Домой</a></li>
          <li><a href="https://krifoxoro.ru/video">Video</a></li>
          <li><a href="https://krifoxoro.ru/scripts">Scripts</a></li>
          <li><a href="https://krifoxoro.ru/experements">experements</a></li>
          <li><a href="https://krifoxoro.ru/grid">grid</a></li>
          <!-- <li><a href="https://krifoxoro.ru/enter">Акк</a></li> -->
        </ul>
      </nav>
    </header>
        
        <main>
        <h2>Второстепенная страница</h2>

        
        <?php
        if (empty($_SESSION['login']) or empty($_SESSION['id']))
        {

          echo '<form action="testreg.php" method="post">

          <fieldset>
            <legend>Форма входа</legend>
            <label for="login_field">Логин</label>
            <input type="text" name="login" id="login_field" required autofocus /> <br/>
            <label for="password_field">Пароль</label>
            <input type="password" name="password" id="password_field" required />
            
            <div class="button">
            <input type="reset" value="Сбросить" />
            </div>
            <div class="button">
              <input type="submit" name="submit" value="Погнали!" />
            </div>
          </fieldset>

        
      <a href="reg.php">Зарегистрироваться</a> 
          </form>';
      }
        ?>
        <br>
        <main>

        

        <?php
        // Проверяем, пусты ли переменные логина и id пользователя
        if (empty($_SESSION['login']) or empty($_SESSION['id']))
        {
        // Если пусты, то мы не выводим ссылку
        echo "ты вошёл(ла) на сайт как смертный<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
        }
        else
        {

        // Если не пусты, то мы выводим ссылку
        echo "ты вошёл на сайт как ".$_SESSION['login']."<br>
        <a  href='http://krifoxoro.ru/enter/alcolendar'>Эта ссылка доступна только Кирику, и не только</a>";
        echo "<br><a  href='quit.php'>Выйти</a><br>";
        // echo $_SESSION['isStuff'];

        if ($_SESSION['isStuff'])
        {
            echo "хобана<br>";
            // echo "";
        }
        }
        ?>

        <footer>
        <section class="copyright">
          <!-- © -->
            2019-2019 krifoxoro
        </section>
      </footer>

    </body>
    </html>
    