<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
  </head>
  <body>
    <header class="navbar">
      <div class="container">
        <h1 class="nav-logo"><a href="./index.php">PixelArt</a></h1>
        <div class="nav-menu">
          <nav>
            <ul>
              <li>
                <a href="./index.php">Главная</a>
              </li>
              <li>
                <a href="./news.php">Новости</a>
              </li>
              <li>
                <a href="#">Галерея</a>
              </li>
              <li>
                <a href="./reg.php">Регистрация</a>
              </li>
              <li>
              <?php
                  $name = $_POST["firstname"];
                  $surname = $_POST["lastname"];
                  echo "Ваше имя: <b>".$name . " " . $surname . "</b>";
                  ?>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="page">
      <div class="info">
          <h2>PixelArt Corp</h2>
          <p>Просто сайт посвяшеный пиксель-арту</p>
          <p>Такой вид искусства собрал вокруг себя много фанатов и новых талантливых художников.</p>
          <p>Арты могут быть даже самыми простыми и не сложными или очень детальными.</p>
          <div class="gallery">
            <img src="./photo/1670351514_elmina-club-p-piksel-art-kartinki-pinterest-25.jpg" width="300">
            <img src="./photo/Miku.jpg" width="300">
            <img src="./photo/23f601442e416a1ebbddcce8158c765b.jpg" width="300">
            <img src="./photo/1658203814_51-oir-mobi-p-piksel-art-fon-53.jpg" width="500">
            <img src="./photo/1675459502_gas-kvas-com-p-fonovii-risunok-v-pikselyakh-21.jpg" width="500">
          </div>
          <p>Вокруг данного сообщества двигается не только арт индустрия, но и игровая индустрия тоже.</p>
          <div class="gallery">
            <img src="./photo/terra (1).jpg" width="500">
            <img src="./photo/5aa0d0089fde627e_1920xH.jpg" width="500">
            <img src="./photo/799ce140c4acc99d05731623feb5170a.png" width="500">
            <img src="./photo/8f576f9128e93b90e837b9efc05c933e.jpeg" width="500">
          </div>
          <p>Я надеюсь вам этого было достаточно для того чтобы ознакомится <br>с идеей данного мини-проекта.</p>
          <p>Приятного пользования.</p>
      </div>
      <div class="reklama">
          <h2>Авторы сайта</h2>
          <ul>
            <li>k1doshi <br>Он мастерски забил на ваше мнение</li>
          </ul>
      </div>
    </div>
  </body>
</html>
