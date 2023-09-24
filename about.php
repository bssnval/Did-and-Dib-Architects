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
                    <h1 class="h1">#О НАС</h1>
                    <p class="main_text">За каждым проектом стоят увлеченные люди и интересные истории, 
                        хотим познакомить вас поближе с каждым из нашей команды, а также поделиться тем, что считаем важным.<br>
                        Мы бесконечно влюблены в свое дело и отдаемся ему без остатка. Все вместе и каждый отдельный специалист: 
                        дизайнеры, архитекторы, визуализаторы, комплектаторы и взаимодействию с клиентами. На стыке разных дисциплин 
                        рождается самая сильная команда.</p>
                </div>
            </div>
        </div>
    </section>

</header>


<div id="modal" class="modal">
    <div class="modal_content">
        <img src="IMG/close.png" id="close" alt="close" class="close">
        <h2 class="center">ВХОД</h2> <br>
        <div class="imp"><input type="text" name="text" class="inp" placeholder="Логин"></div><br>
        <br>
        <div class="imp"><input type="password" name="password" class="inp" placeholder="Пароль"></div> <br>
        <br>
        <a class="btn" href="kabinet.php">ВОЙТИ</a><br>
        <button class="btn_two" id="open-modal-reg">Регистрация</button>
    </div>
</div>

<div id="modal-reg" class="modal_two">
        <div class="modal_content_two">
            <img src="IMG/close.png" id="close-two" alt="close" class="close">
            <h2 class="center">РЕГИСТРАЦИЯ</h2> <br>
            <div class="imp"><input type="text" name="text" class="inp" placeholder="Логин"></div><br>
            <br>
            <div class="imp"><input type="email" name="email" class="inp" placeholder="Эл. почта"></div> <br>
            <br>
            <div class="imp"><input type="password" name="password" class="inp" placeholder="Пароль"></div> <br>
            <br>
            <a class="btn_reg" href="kabinet.php">Регистрация</a><br>
        <button class="btn_two_reg" id="back-log">Войти</button>
        </div>
</div>

<section>
    <div class="container">
        <div class="pad">
            <div class="box">
                <div class="box_img">
                    <img src="IMG/основатель.png" alt="osnovatel" class="img">
                </div>
                <div class="box_text">
                    <h2 class="max center">ОСНОВАТЕЛЬ</h2><br>
                    <p class="text">Меня зовут Алиса и я являюсь основателем компании 
                        студии дизайна интерьера. Моя страсть к дизайну началась с детства - 
                        я любила рисовать и создавать новые вещи. Когда я выросла, я решила 
                        превратить свою страсть в профессию и начала изучать дизайн интерьера.<br>
                        <br>
                        После окончания университета, я начала работать в крупной компании дизайна 
                        интерьера и за несколько лет получила ценный опыт и узнавала все больше и 
                        больше об этой тематике. Но однажды я поняла, что мне хотелось чего-то 
                        большего и мне не достаточно было работать на кого-то другого. Тогда я
                        решила создать свою собственную компанию и начать воплощать свои собственные идеи.<br>
                        <br>
                        Когда я начала работать, я знала, что моя миссия заключается не только в создании 
                        красивых дизайнов интерьеров, но и в создании комфортной среды для моих клиентов. 
                        Я очень люблю свою работу, потому что она позволяет мне помогать людям воплощать свои мечты.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container">
        <div class="pad">
            <h2 class="center">Встречайте нашу команду!</h2>
            <div class="planchet">
                <div class="box otstup">
                    <div class="hover" style="background-image: url(./IMG/работник1.png)">
                        <span class="hover_text">Дизайнер - Арина Попкова</span>
                    </div><br>
                    <div class="hover" style="background-image: url(./IMG/работник2.png)">
                        <span class="hover_text">Дизайнер - Арина Попкова</span>
                    </div><br>
                    <div class="hover" style="background-image: url(./IMG/работник3.png)">
                        <span class="hover_text">Дизайнер - Никита Попков</span>
                    </div>
                </div>
                <div class="box otstup">
                    <div class="hover" style="background-image: url(./IMG/работник4.png)">
                        <span class="hover_text">Дизайнер - Арина Попкова</span>
                    </div><br>
                    <div class="hover" style="background-image: url(./IMG/работник5.png)">
                        <span class="hover_text">Дизайнер - Никита Попков</span>
                    </div><br>
                    <div class="hover" style="background-image: url(./IMG/работник6.png)">
                        <span class="hover_text">Дизайнер - Арина Попкова</span>
                    </div>
                </div>
                <div class="box otstup">
                    <div class="hover" style="background-image: url(./IMG/работник7.png)">
                        <span class="hover_text">Дизайнер - Никита Попков</span>
                    </div><br>
                    <div class="hover" style="background-image: url(./IMG/работник8.png)">
                        <span class="hover_text">Дизайнер - Арина Попкова</span>
                    </div><br>
                    <div class="hover" style="background-image: url(./IMG/работник9.png)">
                        <span class="hover_text">Дизайнер - Никита Попков</span>
                    </div>
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

