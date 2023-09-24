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
                    <li class="menu_login"><button class="menu_login" id="open-modal"><img src="IMG/profil.png" alt="profil"></button></li>
            </ul>
        </nav>
    </div> 
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

<p class="center color_black">Оставить заявку</p>

<section>
    <form method = "POST" action = "php/createMessage.php">

    <div class="container">
        <div class="form">
            <div class="form_box">
                <div class="form_imp"><input type="text" name="name" class="form_inp" placeholder="Ваше имя"></div><br>
                <br>
                <div class="form_imp"><input type="email" name="email" class="form_inp" placeholder="E-mail"></div><br>
                <br>
                <div class="form_imp"><input type="tel" name="telephone" class="form_inp" placeholder="Телефон"></div><br>
                <br>
                <div class="form_imp"><input type="number" name="square" class="form_inp" placeholder="Площадь помещения"></div><br>
                <br>
            </div>
            <div class="form_box">
                <div class="form_imp"><input type="text" name="town" class="form_inp" placeholder="В каком городе"></div><br>
                <br>
                <div class="form_imp"><input type="text" name="material" class="form_inp" placeholder="Желаемый материал"></div><br>
                <br>
                <div class="form_imp"><input type="text" name="premises" class="form_inp" placeholder="Вид помещения"></div><br>
                <br>
                <div class="form_imp"><input type="text" name="addition" class="form_inp" placeholder="Дополнительно"></div><br>
                <br>
            </div>
        </div>
        <input type = "submit" class="form_btn" value="Оставить заявку">
    </div>
</form>
</section>

<script src="./js/modal.js"></script>
</body>
</html>