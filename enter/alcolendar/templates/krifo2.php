<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../../css/style.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <title>Алколедрарь</title>
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
          <li><a href="https://krifoxoro.ru/enter">Акк</a></li>
        </ul>
      </nav>
    </header>
    <!-- <h1>Алколеднарь</h1> -->
    <main>

        <?php
        if ($_SESSION['isSuperStuff'])
        {
          echo '<form action="./script.php">
            <label for="date">дата</label>
            <input type="date" id="date" name="date" />
            <br />
            <label for="alcoQuantity">что и сколько пил</label>
            <input type="text" id="alcoQuantity" />
            <input type="button" id="alcoButton" value="Не нажимать" />
          </form>';
        }
        else echo '<h1>Алколеднарь_</h1>';
      
      
      ?>

      <table id="table">
        <caption>
          Алколеднарь
        </caption>
        <tr>
          <th>Дата</th>
          <th>Кол-во алкоголя</th>
        </tr>
        
        <tr>
          <td>02.08.2019</td>
          <td>пока ничё</td>
        </tr>
        <tr>
          <td>01.08.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>31.07.2019</td>
          <td>1,5 л разливного,<br>2 бутылки Рижского<br>рюмка какого-то джина</td>
        </tr>
        <tr>
          <td>30.07.2019</td>
          <td>2 Grolsch и <br> пинта Baltas</td>
        </tr>
        <tr>
          <td>29.07.2019</td>
          <td>4 банки хугардена</td>
        </tr>
        <tr>
          <td>28.07.2019</td>
          <td>0,5 жигули<br>1 л шпатена </td>
        </tr>
        <tr>
          <td>27.07.2019</td>
          <td>1,3 л хугардена<br/>0,5 л рижского пивасв<br/>3-4 рюмки вводки</td>
        </tr>
        <tr>
          <td>26.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>25.07.2019</td>
          <td>0,7 л пива</td>
        </tr>
        <tr>
          <td>24.07.2019</td>
          <td>1 л хугардена</td>
        </tr>
        <tr>
          <td>23.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>22.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>21.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>20.07.2019</td>
          <td>1,5 л пива в баре</td>
        </tr>
        <tr>
          <td>19.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>18.07.2019</td>
          <td>около 0,4 хугардена</td>
        </tr>
        <tr>
          <td>17.07.2019</td>
          <td>0,5 шпатена</td>
        </tr>
        <tr>
          <td>16.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>15.07.2019</td>
          <td>0,5 горсмейстер<br />0,5 миллер<br />0,25 хугарден</td>
        </tr>
        <tr>
          <td>14.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>13.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>12.07.2019</td>
          <td>1 л Рижского пива<br />0,5 немецкого</td>
        </tr>
        <tr>
          <td>11.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>10.07.2019</td>
          <td>0,3 * 3 рюмки<br />кагора</td>
        </tr>
        <tr>
          <td>09.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>08.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>07.07.2019</td>
          <td>лёффе 1 л</td>
        </tr>
        <tr>
          <td>06.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>05.07.2019</td>
          <td>
            одно пиво <br />
            0,25 л водки
          </td>
        </tr>
        <tr>
          <td>04.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>03.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>02.07.2019</td>
          <td>
            один Miller,<br />один светлый Feldschlößchen,<br />
            один тёмный Feldschlößchen,<br />
            4 рюмки водки
          </td>
        </tr>
        <tr>
          <td>01.07.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>30.06.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>29.06.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>28.06.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>27.06.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>26.06.2019</td>
          <td>0,5 миллера</td>
        </tr>
        <tr>
          <td>25.06.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>24.06.2019</td>
          <td class="non_alcohol">Ни капли</td>
        </tr>
        <tr>
          <td>23.06.2019</td>
          <td>0,45 хугардена</td>
        </tr>
        <tr>
          <td>22.06.2019</td>
          <!-- colspan="2"  rowspan-->
          <td>Пива литра 2 и самогона рюмок 5</td>
        </tr>
      </table>
    </main>

    <footer>
      <section class="copyright">
        <!-- © -->
        2019-2019 krifoxoro
      </section>
    </footer>

    <?php
        if ($_SESSION['isSuperStuff'])
        {
          echo '<script src="../../../js/createDay.js"></script>';
        }
    ?>
  </body>
</html>
