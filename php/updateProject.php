<?php

    require_once 'connect.php';

        $id_project=$_GET['id'];
        $project = mysqli_query($connect, query: "SELECT * FROM `project` WHERE `id_project` = '$id_project'");
        $project = mysqli_fetch_assoc($project);
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updateproject</title>
</head>
<body>
    <h3>Update project<h3>
        <form action ="update-Project.php" method ="post">
            <p> Изменить Проект </p>
            <input type="hidden" name="id_project" value ="<?= $project['id_project'] ?>" ></input> 
            <input type="text" name="id_designer" placeholder="Дизайнер" value ="<?= $project['id_designer'] ?>"></input>
            <input type="text" name="name" placeholder="Название" value ="<?= $project['name'] ?>"></input>
            <input type="date" name="project_start" placeholder="Начало проекта" value ="<?= $project['project_start'] ?>"></input>
            <input type="date" name="project_finish" placeholder="Конец Проекта" value ="<?= $project['project_finish'] ?>"></input>
            <input type="text" name="status" placeholder="Статус" value ="<?= $project['status'] ?>"></input>
            <button type="submit">Добавить Проект</button>
        </form>
</body>



