<?php
 require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>
</head>
<style>
    th, td {
        padding: 25px;
        font-size:20px;
    }

    th {
        background: #B9947A;
        font-size:20px;
    }

    p {
        background: #B9947A; 
        padding: 15px;
        max-width: 750px;
        font-size:20px;
        
    }

    td {
        background: #DBBFAB;
    }

    


</style>
<body>




<a href = "admin.php" class = "zapros"style = "


" >НАЗАД</a> 
<style>
    .zapros {

    background: #b9948b; 
        padding: 15px;
        max-width: 750px;
        font-size:20px;

}



</style>






<p>1.Получить список всех заказов определенного клиента.</p>

<table>
    
        <tr>
            <th>Клиент</th>
            <th>Проект</th>
            <th>Дата заказа</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "
        SELECT user.Surname as 'Клиент', project.name as 'Проект', `orders`.`date` as 'Дата заказа' FROM `orders`
        JOIN user on `orders`.`id_user` = user.ID_User
        JOIN project ON `orders`.`id_project` = project.id_project
        WHERE user.ID_User = '2'");

        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>

    





    <p>2.Получить список всех проектов, над которыми работает определенный дизайнер.</p>

  

<table>

    
        <tr>
            <th>Дизайнер</th>
            <th>Проект</th>
            <th>Начало проекта</th>
            <th>Конец проект</th>
            <th>Статус проекта</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "SELECT designer.surname AS 'Дизайнер', project.name AS 'Проект', project.project_start 
        AS 'Начало проекта', project.project_finish AS 'Конец проекта', project.status AS 'Статус проекта' FROM project
        JOIN designer on project.id_designer = designer.ID_Designer
        WHERE designer.ID_Designer = '5'");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
            <td><?= $one[3] ?></td>
            <td><?= $one[4] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>






    <p>3.Получить список всех помещений в определенном проекте.</p>

  

<table>

    
        <tr>
            <th>Проект</th>
            <th>Название помещения</th>
            <th>Площадь помещения</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "SELECT project.name as 'Проект', premises.name AS 'Название помещения', premises.square AS 'Площадь помещения' FROM premises
        JOIN project on premises.id_project = project.id_project
        WHERE project.id_project = '4'");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>






    <p>4.Получить список всех материалов, используемых в определенном проекте.</p>

<table>

    
        <tr>
            <th>Проект</th>
            <th>Тип</th>
            <th>Цена</th>
            <th>Описание</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "SELECT project.name as 'Проект', material.type AS 'Тип', material.cost 
        as 'Цена', material.description as 'Описание' from material
        JOIN project on material.id_project = project.id_project
        WHERE project.id_project = '3'");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
            <td><?= $one[3] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>







    <p>5.Получить список всех проектов, у которых статус выполнения равен определенному значению.</p>

<table>

    
        <tr>
            <th>Дизайнер</th>
            <th>Проект</th>
            <th>Начало</th>
            <th>Конец</th>
            <th>Статус</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "SELECT designer.surname AS 'Дизайнер', project.name as 'Проект', project.project_start 
        as 'Начало', project.project_finish as 'Конец', project.status AS 'Статус' from project
        JOIN designer on project.id_designer = designer.ID_Designer
        WHERE project.status = 'Закончен'");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
            <td><?= $one[3] ?></td>
            <td><?= $one[4] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>







    <p>6.Получить список всех дизайнеров, у которых количество выполненных проектов превышает заданное значение.</p>

<table>

    
        <tr>
            <th>Имя</th> 
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Почта</th>
            <th>Телефон</th>
            <th>Специализация</th>
            <th>Кол-во проектов</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "
        SELECT designer.name AS 'Имя', designer.surname AS 'Фамилия', designer.patronymic AS 'Отчество', designer.email AS 'Почта', designer.telephone AS 'Телефон', designer.specialization AS 'Специализация', COUNT(project.ID_Designer) AS 'Кол-во проектов'
        FROM project
        JOIN designer ON project.id_designer = designer.ID_Designer
        GROUP BY designer.ID_Designer HAVING COUNT(project.ID_Designer) > 1");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
            <td><?= $one[3] ?></td>
            <td><?= $one[4] ?></td>
            <td><?= $one[5] ?></td>
            <td><?= $one[6] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>









    <p>7.Получить список всех клиентов, у которых есть активные заказы.</p>

<table>

    
        <tr>
            <th>Фамилия</th> 
            <th>Имя</th>
            <th>Отчество</th>
            <th>Почта</th>
            <th>Проект</th>
            <th>Статус</th>
            <th>Дата заказа</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "
        SELECT user.Surname as 'Фамилия', user.Name as 'Имя', user.Patronymic AS 'Отчество', user.Email as 'Почта', 
        project.name as 'Проект', project.status as 'Статус', `orders`.`date` as 'Дата заказа' from `orders`
        JOIN user on `orders`.`id_user` = user.ID_User
        JOIN project on `orders`.`id_project` = project.id_project
        WHERE project.status = 'В процессе'");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
            <td><?= $one[3] ?></td>
            <td><?= $one[4] ?></td>
            <td><?= $one[5] ?></td>
            <td><?= $one[6] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>







    <p>8.Получить список всех дизайнеров, у которых специализация соответствует заданной категории.</p>

<table>

    
        <tr>
            <th>Имя</th> 
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Почта</th>
            <th>Телефон</th>
            <th>Специализация</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "
        SELECT designer.name AS 'Имя', designer.surname AS 'Фамилия', designer.patronymic AS 'Отчество', 
        designer.email AS 'Почта', designer.telephone AS 'Телефон', designer.specialization AS 'Специализация'
        FROM designer
        WHERE designer.specialization = 'Спальня'");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
            <td><?= $one[3] ?></td>
            <td><?= $one[4] ?></td>
            <td><?= $one[5] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>








    <p>9.Получить список всех заказов, сгруппированных по статусу и подсчитанному количеству заказов в каждой категории.</p>

<table>

    
        <tr>
            <th>Статус заказа</th> 
            <th>Кол-во заказов</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "
        SELECT project.status as 'Статус заказа', COUNT(`orders`.`id_orders`) AS 'Кол-во заказов'
        FROM `orders`
        JOIN project ON `orders`.`id_project` = project.id_project
        GROUP BY project.status");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>







    <p>10.Получить список всех помещений, у которых площадь больше заданного значения, и они принадлежат определенному проекту.</p>

<table>

    
        <tr>
            <th>Помещение</th> 
            <th>Площадь</th>
            <th>Проект</th>
        </tr>

    <?php

        $one = mysqli_query($connect, query: "
        SELECT premises.name as 'Помещение', premises.square as 'Площадь', project.name as 'Проект'
        FROM premises
        JOIN project on premises.id_project = project.id_project
        WHERE premises.square > '10'
        AND project.id_project = '1';");



        $one = mysqli_fetch_all($one);
        foreach($one as $one) {
    ?>    
    
        <tr>
            <td><?= $one[0] ?></td>
            <td><?= $one[1] ?></td>
            <td><?= $one[2] ?></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>



</body>
</html>