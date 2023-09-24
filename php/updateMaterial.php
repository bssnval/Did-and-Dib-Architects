<?php

    require_once 'connect.php';

        $ID_material=$_GET['id'];
        $material = mysqli_query($connect, query: "SELECT * FROM `material` WHERE `id_material` = '$ID_material'");
        $material = mysqli_fetch_assoc($material);
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updatematerial</title>
</head>
<body>
    <h3>Update material<h3>
        <form action ="update-Material.php" method ="post">
            <p> Изменить Материал </p>
            <input type="hidden" name="id_material" value ="<?= $material['id_material'] ?>" ></input> 
            <input type="text" name="id_project" placeholder="Проект" value ="<?= $material['id_project'] ?>"></input>
            <input type="text" name="type" placeholder="Название" value ="<?= $material['type'] ?>"></input>
            <input type="text" name="cost" placeholder="Цена" value ="<?= $material['cost'] ?>"></input>
            <input type="text" name="description" placeholder="Описание" value ="<?= $material['description'] ?>"></input>
            <button type="submit">Добавить Материал</button>
        </form>
</body>