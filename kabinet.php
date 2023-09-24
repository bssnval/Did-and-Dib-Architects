<? require_once 'php/connect.php'; 
?>
<?php 
session_start(); 
if (!$_SESSION['User']) { 
    header('Location: /'); 
} 
?>
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
                    <li class="menu_login"><a href="php/config/acc-close.php"><img src="img/closeacc.png" alt="close"></a></li>
            </ul>
        </nav>
    </div> 
</header>



<p class="center color_black">Личный кабинет</p>

<section>
    <div class="container">
        <div class="kabinet">
            <div class="kabinet_text">
                <div class="peopl">
                    <div>
                        <img src="IMG/Ellipse.png" alt="Ellipse" class="img">
                    </div>
                    <div>
                        <span class="text otstup"><?= $_SESSION['User']['Surname'] ?> <?= $_SESSION['User']['Name'] ?> <?= $_SESSION['User']['Patronymic'] ?></span>
                    </div>
                </div>
                <?php 
                        $project = mysqli_query($connect, query:"
                        SELECT project.name as 'проект', designer.surname as 'Фамилия', designer.name as 'Имя', designer.patronymic as 'Отчество', project.project_start as 'Начало', project.project_finish as 'Конец', project.status as 'Статус' FROM `orders`
                        JOIN project ON `orders`.`id_project`=project.id_project
                        JOIN designer ON project.id_designer=designer.ID_Designer
                        WHERE `orders`.`id_user`='" . $_SESSION['User']['ID_User'] . "'"); 
                        $project = mysqli_fetch_all($project); 
                        foreach ($project as $project) { 
                    ?>
                <div class="kabinet_boxs">
                    <div class="kabinet_box">
                        <p class="text beg">Проект</p>
                        <p class="text"><?= $project[0] ?></p>
                    </div>
                    <div class="kabinet_box">
                        <p class="text beg">Исполнитель</p>
                        <p class="text"><?= $project[1] ?> <?= $project[2] ?> <?= $project[3] ?></p>
                    </div>
                    <div class="kabinet_box">
                        <p class="text beg">Срок</p>
                        <p class="text"><?= $project[4] ?> - <?= $project[5] ?></p>
                    </div>
                    <div class="kabinet_box">
                        <p class="text beg">Статус</p>
                        <p class="text"><?= $project[6] ?></p>
                    </div>
                </div>
                <?php
                        }
                ?>
            </div>
            <div class="kabinet_img">
                <img src="IMG/ванная1.png" alt="vanna" class="img">
            </div>
        </div>
    </div>
</section>

<script src="./js/modal.js"></script>
</body>
</html>