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
        <h1>Нету новостей</h1>
      </div>
    </div>
</body>
</html>