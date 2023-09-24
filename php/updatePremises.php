<?php

    require_once 'connect.php';

        $ID_premises=$_GET['id'];
        $premises = mysqli_query($connect, query: "SELECT * FROM `premises` WHERE `id_premises` = '$ID_premises'");
        $premises = mysqli_fetch_assoc($premises);
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updatepremises</title>
</head>
<body>
    <h3>Update premises<h3>
        <form action ="update-Premises.php" method ="post">
            <p> Изменить Помещение </p>
            <input type="hidden" name="id_premises" value ="<?= $premises['id_premises'] ?>" ></input> 
            <input type="text" name="id_project" placeholder="Проект" value ="<?= $premises['id_project'] ?>"></input>
            <input type="text" name="name" placeholder="Название" value ="<?= $premises['name'] ?>"></input>
            <input type="text" name="square" placeholder="Площадь" value ="<?= $premises['square'] ?>"></input>
            <button type="submit">Добавить Помещение</button>
        </form>
</body>