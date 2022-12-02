<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="shortcut icon" href="./img/choc1.jpg" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>MAKE UP FOREVER</title>
</head>

<body>
  <header class="header" id="top">
    <div class="wrapper">
      <div class="header__wrapper">
        <div class="logo">Make up forever</div>
        <nav class="nav">
          <ul class="menu">
            <li class="menu__item"><a href="">Главная</a></li>
            <li class="menu__item"><a href ="catalog.php">Каталог</a></li>
            <li class="menu__item"><a href="#gallery">Новинки</a></li>
            <li class="menu__item"><a href="logIn.php">Авторизация</a></li>
            <li class="menu__item"><a href="#footer">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    <!-- Preview section-->
    <section class="preview">
      <div class="wrapper">
        <div class="preview__wrapper">
          <div class="preview__image">
            <?php 
            $s = date('s');
            $os = $s % 2;
            if ($os === 0)
            $name = './2.webp';
            else
            $name = './9.webp';
            echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" width=550px height = 400px >';
            ?>
          </div>
          <div class="preview-info">
            <h1 style="font-size: px">О компании</h1>
            <p class="preview__text">
            Мы — российская торговая сеть по продаже косметики и парфюмерии. 
            На данный момент занимаем второе место по товарообороту в своём сегменте.
            Наш магазин насчитывает боле 15000 товаров различной категории. 
            У нас вы можете найти как средства декоативной и уходовой косметики, так и прафюмери.
            </p>
          </div>
        </div>
      </div>
    </section>        
    <!-- Gallery section-->
    <section class="gallery">
      <div class="wrapper">
        <div class="gallery-wrapper">
          <h1 class="gallery__title" id="gallery">Новинки</h1>
        </div>
        <div class="gallery-images__wrapper">
          <!-- Item -->
          <div class="gallery__item">
            <img class="gallery__image" src="./3.webp" alt="sivorotka" width="400" height="250" />
            <p class="gallery__name">Сыворотка для восстановления микробиома</p>
          </div>
          <!-- /Item -->
          <!-- Item -->
          <div class="gallery__item">
            <img class="gallery__image" src="./4.webp" alt="parfum" width="400" height="250" />
            <p class="gallery__name">Парфюмерная воды</p>
          </div>
          <!-- /Item -->
          <!-- Item -->
          <div class="gallery__item">
            <img class="gallery__image" src="./5.webp" alt="losion" width="400" height="250" />
            <p class="gallery__name">Лосьон для тела</p>
          </div>
          <!-- /Item -->
          <!-- Item -->
          <div class="gallery__item">
            <img class="gallery__image" src="./6.webp" alt="mask" width="400" height="250" />
            <p class="gallery__name">Маска для лица</p>
          </div>
          <!-- /Item -->
          <!-- Item -->
          <div class="gallery__item">
            <img class="gallery__image" src="./7.webp" alt="lipstick" width="400" height="250" />
            <p class="gallery__name">Карандаш для губ</p>
          </div>
          <!-- /Item -->
          <!-- Item -->
          <div class="gallery__item">
            <img class="gallery__image" src="./8.webp" alt="BB" width="400" height="250" />
            <p class="gallery__name">BB крем</p>
          </div>
          <!-- /Item -->
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer class="footer" id="footer">
    <div class="wrapper">
      <div class="footer__wrapper">
        <div class="footer-info">
          <ul>
            <li class="footer-info__item">Make up forever</li>
            <li class="footer-info__item">
              Служба поддержки клиентов:
            </li>
            <li class="footer-info__item" style="color: rgb(127, 111, 111)">
              + 7 (985) 141-31-19
            </li>
            <li class="footer-info__item" style="color: rgb(127, 111, 111)">
              kuznetsovpo@yandex.ru
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>