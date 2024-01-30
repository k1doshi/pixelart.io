<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
    <header class="navbar">
      <div class="container">
        <h1 class="nav-logo"><a href="./index.html">PixelArt</a></h1>
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
                <a href="./reg.html">Регистрация</a>
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
                <form action="index.php" method="POST">
                    <p>Введите имя: <input type="text" name="firstname" /></p>
                    <p>Введите фамилию: <input type="text"
                            name="lastname" /></p>
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </body>
</html>