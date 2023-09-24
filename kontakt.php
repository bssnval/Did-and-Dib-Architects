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
                    <h1 class="h1">#КОНТАКТЫ</h1>
                </div>
            </div>
        </div>
    </section>

    
<section class="itap">
    <div class="container">
            <div class="box_kontakt">
                <div class="kontakt_box">
                    <p class="itap_box_text beg">АДРЕС:</p>
                    <p class="text white">Москва,
                        Малый Гнездниковский<br> пер. 12. (м.Тверская)</p><br>
                    <hr>
                    <p class="itap_box_text beg">ЧАСЫ РАБОТЫ:</p>
                    <p class="text white">Пн – Пт, 09:00 – 21:00<br>
                        Сб – Вс, 09:00 – 20:00</p><br>
                    <hr>
                    <p class="itap_box_text beg">ТЕЛЕФОН:</p>
                    <p class="text white">+7 (495) 204-22-77 </p>
                </div>
                <div class="kontakt_box">
                    <p class="itap_box_text beg">АДРЕС:</p>
                    <p class="text white">Москва,
                        Малый Гнездниковский<br> пер. 12. (м.Тверская)</p><br>
                    <hr>
                    <p class="itap_box_text beg">ЧАСЫ РАБОТЫ:</p>
                    <p class="text white">Пн – Пт, 09:00 – 21:00<br>
                        Сб – Вс, 09:00 – 20:00</p><br>
                    <hr>
                    <p class="itap_box_text beg">ТЕЛЕФОН:</p>
                    <p class="text white">+7 (495) 204-22-77 </p>
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
    <div class="container_osob display-none">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9d0505eb8c0c4a70497e8e7103340d5578f5b0a81e1d4e6579a12475924fd2b8&amp;width=1280&amp;height=651&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</section>

<section>
    <div class="display">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af766be604e608ef052fa18bac05971ed809c4546e0eceb9644c0bffc18b645e3&amp;width=470&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>    
    </div>
</section>

<footer class="footer_osob">
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