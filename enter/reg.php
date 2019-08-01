<html lang="ru">
    <head>
    <title>Рега</title>
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
          <li><a href="https://krifoxoro.ru/enter">Войти</a></li>
        </ul>
      </nav>
    </header>

    <h2>Регистрация</h2>

    <form action="./save_user.php" method="post">
    <fieldset>
      <legend>Форма реги</legend>
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
      <p>
        <label for="login">Ваш логин:<br></label>
        <input name="login" id="login" type="text" size="20" maxlength="15" required>
      </p>
      <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
      <p>
        <label for="password">Ваш пароль:<br></label>
        <input name="password" id="password" type="password" size="20" maxlength="15" required>
      </p>
        <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
      
      <p>
        <label for="email">email:<br></label>
        <input type="email" name="email" id="email" required autofocus />
      </p>

      <p>
        <input type="submit" name="submit" value="Зарегистрироваться">
        <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
      </p>
  </fieldset>
    </form>

    </body>
</html>
