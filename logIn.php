<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
<header>
<header class="header" id="top">
    <div class="wrapper">
      <div class="header__wrapper">
        <div class="logo">Make up forever</div>
        <nav class="nav">
          <ul class="menu">
            <li class="menu__item"><a href="index.php">На Главную</a></li>
            <li class="menu__item" ><a href ="catalog.php">Каталог</a></li>
            <li class="menu__item"><a href="#footer">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</header>
    <main>
        <div class="background-login">
            <div class="container-login-form">
            <form class="login_form" method="post" name="login_form">
                <h1>Log in</h1>
                <div class="elements-login">
                    <p>Login: <input type="text" name="log-name"placeholder="Enter login" size="18"/></p>
                    <p>Password: <input type="password" name="pass-name"placeholder="Enter password" size="18"/></p>
                    <p>Remember me <input type="checkbox"/></p>
                    <p>
                        <div class="send-button">
                           <button type="reset">Send</button>
                        </div>
                    </p>
                </div>
            </form>
            </div>
        </div>
    </main>
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