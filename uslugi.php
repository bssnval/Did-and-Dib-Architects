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
    
    
    <section class="main">
        <div class="container">
            <div class="main_box">
                <div class="main_box_text">
                    <h1 class="h1">#УСЛУГИ</h1>
                    <p class="main_text">Вы приобрели недвижимость или пришли к осознанию, что хотите построить дом 
                        на берегу моря. Мы часто знакомимся с нашими клиентами именно в такие, трогательные и 
                        судьбоносные моменты жизни. И да, впереди невероятные, приятные события, но именно сейчас 
                        волнительно: как все сложится и получится ли воплотить идеи в жизнь?</p>
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

<section class="main">
    <div class="container">
    <h2 class="center">Пришло время перемен - ваше и наше время</h2>
    </div>
</section>

<section class="itap">
    <div class="container">
            <div class="box_itap">
                <div class="box_text">
                    <span class="itap_box white">Загородный дом</span><br>
                    <p class="itap_box_text beg">01 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Интервью в офисе</li>
                        <li class="itap_ilement white">Выезд на объект</li>
                        <li class="itap_ilement white">Замеры и фотофиксация на объекте</li>
                        <li class="itap_ilement white">Составление обмерного плана</li>
                        <li class="itap_ilement white">3 варианта планировки</li>
                        <li class="itap_ilement white">Финальное планировочное решение с расстановкой мебели</li>
                    </ul>
                    <p class="itap_box_text beg">02 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Обсуждение бюджета проекта</li>
                        <li class="itap_ilement white">Выбор подходящих фирм производителей и материалов</li>
                        <li class="itap_ilement white">Коллаж-концепция, 2 варианта интерьера на 5 основных помещений</li>
                        <li class="itap_ilement white">Проработка выбранного коллажа на все жилые помещения и зоны с/у</li>
                    </ul>
                    <p class="itap_box_text beg">03 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">3D визуализация проекта в программе</li>
                    </ul>
                    <p class="itap_box_text beg">04 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Комплект чертежей для ремонта</li>
                    </ul>
                    <p class="itap_box_text beg">05 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Список отделочных материалов в таблице с указанием метражей для самостоятельной закупки</li>
                        <li class="itap_ilement white">Единый альбом со всеми результатами проекта</li>
                    </ul>
                </div>
                <div class="box_img">
                    <img src="IMG/услуга1.png" alt="usluga" class="itap_img">
                </div>
            </div>
    </div>
</section>

<section class="itap_white">
    <div class="container">
            <div class="box_itap">
                <div class="box_img">
                    <img src="IMG/услуга2.png" alt="usluga" class="itap_img">
                </div>
                <div class="box_text">
                    <span class="itap_box">Дизайн - проект</span><br>
                    <p class="itap_box_text beg">01 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement">Интервью в офисе</li>
                        <li class="itap_ilement">Выезд на объект</li>
                        <li class="itap_ilement">Замеры и фотофиксация на объекте</li>
                        <li class="itap_ilement">Составление обмерного плана</li>
                        <li class="itap_ilement">3 варианта планировки</li>
                        <li class="itap_ilement">Финальное планировочное решение с расстановкой мебели</li>
                    </ul>
                    <p class="itap_box_text beg">02 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement">Обсуждение бюджета проекта</li>
                        <li class="itap_ilement">Выбор подходящих фирм производителей и материалов</li>
                        <li class="itap_ilement">Коллаж-концепция, 2 варианта интерьера на 5 основных помещений</li>
                        <li class="itap_ilement">Проработка выбранного коллажа на все жилые помещения и зоны с/у</li>
                    </ul>
                    <p class="itap_box_text beg">03 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement">3D визуализация проекта в программе</li>
                    </ul>
                    <p class="itap_box_text beg">04 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement">Комплект чертежей для ремонта</li>
                    </ul>
                    <p class="itap_box_text beg">05 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement">Список отделочных материалов в таблице с указанием метражей для самостоятельной закупки</li>
                        <li class="itap_ilement">Единый альбом со всеми результатами проекта</li>
                    </ul>
                </div>
            </div>
    </div>
</section>

<section class="itap">
    <div class="container">
            <div class="box_itap">
                <div class="box_text">
                    <span class="itap_box white">Коммерческий объект</span><br>
                    <p class="itap_box_text beg">01 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Интервью в офисе</li>
                        <li class="itap_ilement white">Выезд на объект</li>
                        <li class="itap_ilement white">Замеры и фотофиксация на объекте</li>
                        <li class="itap_ilement white">Составление обмерного плана</li>
                        <li class="itap_ilement white">3 варианта планировки</li>
                        <li class="itap_ilement white">Финальное планировочное решение с расстановкой мебели</li>
                    </ul>
                    <p class="itap_box_text beg">02 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Обсуждение бюджета проекта</li>
                        <li class="itap_ilement white">Выбор подходящих фирм производителей и материалов</li>
                        <li class="itap_ilement white">Коллаж-концепция, 2 варианта интерьера на 5 основных помещений</li>
                        <li class="itap_ilement white">Проработка выбранного коллажа на все жилые помещения и зоны с/у</li>
                    </ul>
                    <p class="itap_box_text beg">03 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">3D визуализация проекта в программе</li>
                    </ul>
                    <p class="itap_box_text beg">04 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Комплект чертежей для ремонта</li>
                    </ul>
                    <p class="itap_box_text beg">05 ЭТАП</p>
                    <ul class="itap_spisok">
                        <li class="itap_ilement white">Список отделочных материалов в таблице с указанием метражей для самостоятельной закупки</li>
                        <li class="itap_ilement white">Единый альбом со всеми результатами проекта</li>
                    </ul>
                </div>
                <div class="box_img">
                    <img src="IMG/услуга3.png" alt="usluga" class="itap_img">
                </div>
            </div>
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
