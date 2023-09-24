<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stule.css">
    <title>D&D</title>
</head>
<body>
    
<header>

    <div class="container">
        <nav class="menu">
            <ul class="menu_wrapper">
                <li class="menu_logo"><a href="index.php" class="menu_logo">D&D</a></li>
            </ul>
            <ul class="menu_wrapper">
                    <li class="menu_nav"><a href="index.php" class="menu_nav">Главная</a></li>
                    <li class="menu_nav"><a href="proekt.php" class="menu_nav">Проекты </a></li>
                    <li class="menu_nav"><a href="about.php" class="menu_nav">О нас</a></li>
                    <li class="menu_nav"><a href="uslugi.php" class="menu_nav">Услуги</a></li>
                    <li class="menu_nav"><a href="kontakt.php" class="menu_nav">Контакты</a></li>
            </ul>
            <ul class="menu_wrapper">
                    <li class="menu_login"><button class="menu_login"  id="open-modal"><img src="IMG/profil.png" alt="profil"></button></li>
            </ul>
        </nav>
    </div> 
    
    
    <section class="main">
        <div class="container">
            <div class="main_box">
                <div class="main_box_text">
                    <h1 class="h1">#ПРОЕКТЫ</h1>
                    <p class="main_text">Найди вдохновение, через наши проекты! Мы 
                        создадим для вас интерьер, отражающий ваш характер и стиль жизни. </p>
                </div>
            </div>
        </div>
    </section>

</header>


<div id="modal" class="modal">
<form method = "POST" action = "php/config/accountLogin.php">
    <div class="modal_content">
        <img src="IMG/close.png" id="close" alt="close" class="close">
        <h2 class="center">ВХОД</h2> <br>
        <div class="imp"><input type="email" name="email" class="inp" placeholder="Email"></div><br>
        <br>
        <div class="imp"><input type="password" name="password" class="inp" placeholder="Пароль"></div> <br>
        <br>
        <input type="submit" class="btn" value="ВОЙТИ"><br>
        <button class="btn_two" id="open-modal-reg">Регистрация</button>
    </div>
</form>
</div>

<div id="modal-reg" class="modal_two">
<form method = "POST" action = "php/config/registration.php">
        <div class="modal_content_two">
            <img src="IMG/close.png" id="close-two" alt="close" class="close">
            <h2 class="center">РЕГИСТРАЦИЯ</h2> <br>
            <div class="imp"><input type="text" name="text" class="inp" placeholder="Фамилия"></div><br>
            <br>
            <div class="imp"><input type="email" name="email" class="inp" placeholder="Эл. почта"></div> <br>
            <br>
            <div class="imp"><input type="password" name="password" class="inp" placeholder="Пароль"></div> <br>
            <br>
            <input type="submit" class="btn_reg" value="Регистрация" name="submit"><br>
        <button class="btn_two_reg" id="back-log">Войти</button>
        </div>
</form>
</div>

<section>
    <div class="container">
        <div class="pad">
            <h2 class="max center">ванная комната</h2>
            <div class="box hover_osob">
                <div class="hover" style="background-image: url(./IMG/ванная1.png)">
                    <span class="hover_text">Ванна | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/ванна2.png)">
                    <span class="hover_text">Ванна | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/ванная3.png)">
                    <span class="hover_text">Ванна | 20 м2 | Москва</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="pad">
            <h2 class="max center">КУХОННАЯ ЗОНА</h2>
            <div class="box hover_osob">
                <div class="hover" style="background-image: url(./IMG/кухня1.png)">
                    <span class="hover_text">Кухня | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/кухня2.png)">
                    <span class="hover_text">Кухня | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/кухня3.png)">
                    <span class="hover_text">Кухня | 20 м2 | Москва</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="pad hover_osob">
            <h2 class="max center">СПАЛЬНАЯ ЗОНА</h2>
            <div class="box hover_osob">
                <div class="hover" style="background-image: url(./IMG/спальня1.png)">
                    <span class="hover_text">Спальня | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/спальня2.png)">
                    <span class="hover_text">Спальня | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/спальня3.png)">
                    <span class="hover_text">Спальня | 20 м2 | Москва</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="pad">
            <h2 class="max center">РАБОЧИЙ КАБИНЕТ</h2>
            <div class="box hover_osob">
                <div class="hover" style="background-image: url(./IMG/стол1.png)">
                    <span class="hover_text">Кабинет | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/стол2.png)">
                    <span class="hover_text">Кабинет | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/стол3.png)">
                    <span class="hover_text">Кабинет | 20 м2 | Москва</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="pad">
            <h2 class="max center">ГОСТИННАЯ ЗОНА</h2>
            <div class="box hover_osob">
                <div class="hover" style="background-image: url(./IMG/гостинная1.png)">
                    <span class="hover_text">Гостинная | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/гостинная2.png)">
                    <span class="hover_text">Гостинная | 20 м2 | Москва</span>
                </div>
                <div class="hover" style="background-image: url(./IMG/гостинная3.png)">
                    <span class="hover_text">Гостинная | 20 м2 | Москва</span>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="footer_box">
            <div class="footer_menu">
                <div class="footer_menu_box">
                    <a href="index.php" class="text">Главная</a><br>
                    <a href="proekt.php" class="text">Проекты </a><br>
                    <a href="about.php" class="text">О нас</a>
                </div>
                <div class="footer_menu_box">
                    <a href="uslugi.php" class="text">Услуги</a><br>
                    <a href="kontakt.php" class="text">Контакты</a>
                </div>
            </div>
            <div class="footer_seti">
                <img src="IMG/inst.png" alt="inst" class="footer_img">
                <img src="IMG/vk.png" alt="vk" class="footer_img">
                <img src="IMG/utub.png" alt="utub" class="footer_img">
            </div>
        </div>
    </div>
</footer>

<script src="./js/modal.js"></script>
</body>
</html>