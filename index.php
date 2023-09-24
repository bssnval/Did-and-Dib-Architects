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
                    <h1>Did and Dib<br>
                        Architects</h1>
                    <p class="main_text">“Строим счастье по квадратным метрам”</p>
                    <a href="zayavka.php" class="button">ОСТАВИТЬ ЗАЯВКУ</a>
                </div>
                <div class="main_box_ing">
                    <img class="main_ing" src="IMG/главная.png" alt="glavn">
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
            <h2>Немного о нашей компании Did and Dib Architects</h2>
            <div class="box">
                <div class="box_img">
                    <img src="IMG/вывеска.png" alt="baner" class="img">
                </div>
                <div class="box_text">
                    <p class="text">Студия дизайна интерьера – это компания, 
                        которая предоставляет услуги по созданию и оформлению дизайна интерьеров.</p>
                    <div class="box">
                        <div class="box_fact">
                            <p class="box_fact_title beg">2014</p>
                            <p class="text">год основания <br>студии</p>
                        </div>
                        <div class="box_fact">
                            <p class="box_fact_title beg">123</p>
                            <p class="text">проектов <br>создано</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box_fact">
                            <p class="box_fact_title beg">6</p>
                            <p class="text">человек в студии</p>
                        </div>
                        <div class="box_fact">
                            <p class="box_fact_title beg">98</p>
                            <p class="text">проектов <br>реализовано</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="padding">
    <section class="black">
        <h2 class="center white pd">Как мы работаем?</h2>
        <div class="slider_padding">

            <div>
            <button class="back slider_btn">
                <img src="./IMG/Arrow-left.png" alt="Arrow" class="arrow-prev">
            </button>
            </div>

            <div class="container_slider">

        
                <div class="slider">
                    <div class="slider_boxs">
                    
                        <div class="slider_box">
                            <p class="slider_title beg">01</p>
                            <img src="IMG/img1.png" alt="icon">
                            <p class="slider_white beg">Знакомство</p>
                            <p class="slider_text white">Познакомим вас с нашей командой, расскажем, как мы работаем и выслушаем задачу.</p>
                        </div>
                        <div class="slider_box">
                            <p class="slider_title beg">02</p>
                            <img src="IMG/img2.png" alt="icon">
                            <p class="slider_white beg">Интервью</p>
                            <p class="slider_text white">Вы расскажете дизайнеру о себе, образе жизни и пожеланиях к будущему дизайну интерьера.</p>
                        </div>
                        <div class="slider_box">
                            <p class="slider_title beg">03</p>
                            <img src="IMG/img3.png" alt="icon">
                            <p class="slider_white beg">Выбор планировки</p>
                            <p class="slider_text white">Создаём три варианта планировочных решений. Затем вместе с вами выбираем наиболее подходящий для вас.</p>
                        </div>
                        <div class="slider_box">
                            <p class="slider_title beg">04</p>
                            <img src="IMG/img4.png" alt="icon">
                            <p class="slider_white beg">3D визуализация</p>
                            <p class="slider_text white">Фотороеалистичные картинки по каждой зоне вашего будущего интерьера.</p>
                        </div>
                        <div class="slider_box">
                            <p class="slider_title beg">05</p>
                            <img src="IMG/img2.png" alt="icon">
                            <p class="slider_white beg">Постройка</p>
                            <p class="slider_text white">Воплощаем в реальность кадры из 3D визуализации</p>
                        </div>

                    </div>
                </div>

            </div>

                <div>
                    <button class="next slider_btn">
                        <img src="./IMG/Arrow-right.png" alt="Arrow" class="arrow-next">
                    </button>
                </div>

        </div>
    </section>
</div>

<section>
    <div class="container">
        <div class="pad">
            <h2 class="max center">ПРОЕКТЫ</h2>
            <div class="box otstup">
                <div class="box_img_proekt">
                    <img src="IMG/проектыГлав1.png" alt="proekt" class="proekt_img">
                </div>
                <div class="box_img_proekt">
                    <img src="IMG/проектыГлав2.png" alt="proekt" class="proekt_img">
                </div>
                <div class="box_img_proekt">
                    <img src="IMG/проектыГлав3.png" alt="proekt" class="proekt_img">
                </div>
            </div>
            <div class="center"><a href="proekt.php" class="button" >ПОДРОБНЕЕ</a></div>
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

<script src="./JS/script.js"></script>
</body>
</html>

