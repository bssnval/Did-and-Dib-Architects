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
        padding: 15px;
        font-size:20px;
    }

    th {
        background: #B9947A;
        font-size:20px;
    }

    td {
        background: #DBBFAB;
    }

    


</style>
<body>
    
<a href = "zapros.php" style = "


" >ЗАПРОСЫ</a>
<br>

<a href = "zayavka.php" style = "


" >Заявка</a>








        <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>email</th>
            <th>Телефон</th>
            <th>Специализация</th>

        </tr>

    <?php
        $Designer = mysqli_query($connect, query: "SELECT * FROM `designer`");
        $Designer = mysqli_fetch_all($Designer);
        foreach($Designer as $Designer) {
    ?>    
    
        <tr>
            <td><?= $Designer[0] ?></td>
            <td><?= $Designer[1] ?></td>
            <td><?= $Designer[2] ?></td>
            <td><?= $Designer[3] ?></td>
            <td><?= $Designer[4] ?></td>
            <td><?= $Designer[5] ?></td>
            <td><?= $Designer[6] ?></td>
            <td><a href="updateDesigner.php?id=<?= $Designer[0] ?>">Изменить</a></td>
            <td><a href="deleteDesigner.php?id=<?= $Designer[0] ?>">Удалить</a></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>

        <form action ="createDesigner.php" method ="post" >
            <p> Добавить Дизайнера </p>
            <input type="text" name="name" placeholder="Имя"></input>
            <input type="text" name="surname" placeholder="Фамилия"></input>
            <input type="text" name="patronymic" placeholder="Отчество"></input>
            <input type="text" name="email" placeholder="email"></input>
            <input type="text" name="telephone" placeholder="Телефон"></input>
            <input type="text" name="specialization" placeholder="Специализация"></input> 
            <button type="submit">Добавить Дизайнера</button>
        </form>









        <table>
        <tr>
            <th>ID</th>
            <th>ID_Пользователь</th>
            <th>ID_Проект</th>
            <th>Дата</th>
        </tr>

    <?php

        $Olders = mysqli_query($connect, query: "SELECT orders.*, `user`.Email as 'Email', `project`.`name` AS 'Название'
        FROM orders JOIN `user` ON orders.`id_user` = user.`ID_User`
        JOIN `project` ON orders.`id_project` = project.`id_project`;");
        $Olders = mysqli_fetch_all($Olders);
        foreach($Olders as $Olders) {
    ?>    
    
        <tr>
            <td><?= $Olders[0] ?></td>
            <td><?= $Olders[1] ?></td>
            <td><?= $Olders[2] ?></td>
            <td><?= $Olders[3] ?></td>
            <td><a href="updateOlders.php?id=<?= $Olders[0] ?>">Изменить</a></td>
            <td><a href="deleteOlders.php?id=<?= $Olders[0] ?>">Удалить</a></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>

        <form action ="createOlders.php" method ="post" >
            <p> Добавить Заказ </p>
            <input type="text" name="id_user" placeholder="Пользователь"></input> 
            <input type="text" name="id_project" placeholder="Проект"></input>
            <input type="date" name="date" placeholder="Дата"></input>
            <button type="submit">Добавить Заказ</button>
        </form>









        <table>
        <tr>
            <th>ID</th>
            <th>email</th>
            <th>Пароль</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>

        </tr>

    <?php
        $User = mysqli_query($connect, query: "SELECT * FROM `user`");
        $User = mysqli_fetch_all($User);
        foreach($User as $User) {
    ?>    
    
        <tr>
            <td><?= $User[0] ?></td>
            <td><?= $User[1] ?></td>
            <td><?= $User[2] ?></td>
            <td><?= $User[3] ?></td>
            <td><?= $User[4] ?></td>
            <td><?= $User[5] ?></td>
            <td><a href="updateUser.php?id=<?= $User[0] ?>">Изменить</a></td>
            <td><a href="deleteUser.php?id=<?= $User[0] ?>">Удалить</a></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>

        <form action ="createUser.php" method ="post" >
            <p> Добавить Пользователя </p>
            <input type="text" name="Email" placeholder="Email"></input>
            <input type="text" name="Password" placeholder="Пароль"></input>
            <input type="text" name="Surname" placeholder="Фамилия"></input>
            <input type="text" name="Name" placeholder="Имя"></input>
            <input type="text" name="Patronymic" placeholder="Отчество"></input>
            <button type="submit">Добавить Пользователя</button>
        </form>









        <table>
        <tr>
            <th>ID</th>
            <th>ID_Проект</th>
            <th>Название</th>
            <th>Площадь</th>
        </tr>

    <?php

        $premises = mysqli_query($connect, query: "SELECT premises.*, `project`.`name` as 'Название'
        FROM premises JOIN `project` ON premises.`id_project` = project.`id_project`;");




        $premises = mysqli_fetch_all($premises);
        foreach($premises as $premises) {
    ?>    
    
        <tr>
            <td><?= $premises[0] ?></td>
            <td><?= $premises[1] ?></td>
            <td><?= $premises[2] ?></td>
            <td><?= $premises[3] ?></td>
            <td><a href="updatePremises.php?id=<?= $premises[0] ?>">Изменить</a></td>
            <td><a href="deletePremises.php?id=<?= $premises[0] ?>">Удалить</a></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>

        <form action ="createPremises.php" method ="post" >
            <p> Добавить Помещение </p>
            <input type="text" name="id_project" placeholder="Проект"></input>
            <input type="text" name="name" placeholder="Название"></input>
            <input type="text" name="square" placeholder="Площадь"></input>
            <button type="submit">Добавить Помещение</button>
        </form>










        <table>
        <tr>
            <th>ID</th>
            <th>ID_Проект</th>
            <th>Тип</th>
            <th>Цена</th>
            <th>Описание</th>

        </tr>

    <?php

        $material = mysqli_query($connect, query: "SELECT material.*, `project`.`name` as 'Название'
        FROM material JOIN `project` ON material.`id_project` = project.`id_project`;");




        $material = mysqli_fetch_all($material);
        foreach($material as $material) {
    ?>    
    
        <tr>
            <td><?= $material[0] ?></td>
            <td><?= $material[1] ?></td>
            <td><?= $material[2] ?></td>
            <td><?= $material[3] ?></td>
            <td><?= $material[4] ?></td>
            <td><a href="updateMaterial.php?id=<?= $material[0] ?>">Изменить</a></td>
            <td><a href="deleteMaterial.php?id=<?= $material[0] ?>">Удалить</a></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>

        <form action ="createMaterial.php" method ="post" >
            <p> Добавить Материал </p>
            <input type="text" name="id_project" placeholder="Проект"></input>
            <input type="text" name="type" placeholder="Тип"></input>
            <input type="text" name="cost" placeholder="Цена"></input>
            <input type="text" name="description" placeholder="Описание"></input>
            <button type="submit">Добавить Материал</button>
        </form>







        <table>
        <tr>
            <th>ID</th>
            <th>ID_Дизайнер</th>
            <th>Название</th>
            <th>Начало проекта</th>
            <th>Конец проекта</th>
            <th>Статус</th>

        </tr>

    <?php

        $project = mysqli_query($connect, query: "SELECT project.*, `designer`.`email` as 'email'
        FROM project JOIN `designer` ON project.`id_designer` = designer.`id_designer`;");




        $project = mysqli_fetch_all($project);
        foreach($project as $project) {
    ?>    
    
        <tr>
            <td><?= $project[0] ?></td>
            <td><?= $project[1] ?></td>
            <td><?= $project[2] ?></td>
            <td><?= $project[3] ?></td>
            <td><?= $project[4] ?></td>
            <td><?= $project[5] ?></td>
            <td><a href="updateProject.php?id=<?= $project[0] ?>">Изменить</a></td>
            <td><a href="deleteProject.php?id=<?= $project[0] ?>">Удалить</a></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>

        <form action ="createProject.php" method ="post" >
            <p> Добавить Проект </p>
            <input type="text" name="id_designer" placeholder="Дизайнер"></input>
            <input type="text" name="name" placeholder="Название"></input>
            <input type="date" name="project_start" placeholder="Начало проекта"></input>
            <input type="date" name="project_finish" placeholder="Конец Проекта"></input>
            <input type="text" name="status" placeholder="Статус"></input>
            <button type="submit">Добавить Проект</button>
        </form>







</body>
</html>