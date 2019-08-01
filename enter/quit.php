<?php
  session_start();
  unset($_SESSION['login']);
  unset($_SESSION['id']);
  unset($_SESSION['isStuff']);
  unset($_POST['login']);
  unset($_POST['password']);
  echo "походу ты вышел <a href='https://krifoxoro.ru/enter'>Второстепенная страница</a>";
?>
