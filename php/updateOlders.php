<?php

    require_once 'connect.php';

        $ID_Olders=$_GET['id'];
        $Olders = mysqli_query($connect, query: "SELECT * FROM `orders` WHERE `id_orders` = '$ID_Olders'");
        $Olders = mysqli_fetch_assoc($Olders);
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updateOlders</title>
</head>
<body>
    <h3>Update Olders<h3>
        <form action ="update-Olders.php" method ="post">
            <p> Изменить Заказ </p>
            <input type="hidden" name="id_orders" value ="<?= $Olders['id_orders'] ?>" ></input> 
            <input type="text" name="id_user" placeholder="Пользователь" value ="<?= $Olders['id_user'] ?>"></input> 
            <input type="text" name="id_project" placeholder="Проект" value ="<?= $Olders['id_project'] ?>"></input>
            <input type="date" name="date" placeholder="Дата" value ="<?= $Olders['date'] ?>"></input>
            <button type="submit">Добавить Заказ</button>
        </form>
</body>