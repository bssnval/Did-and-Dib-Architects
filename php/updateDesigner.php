<?php

    require_once 'connect.php';

        $ID_Designer=$_GET['id'];
        $Designer = mysqli_query($connect, query: "SELECT * FROM `designer` WHERE `ID_Designer` = '$ID_Designer'");
        $Designer = mysqli_fetch_assoc($Designer);
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updateDesigner</title>
</head>
<body>
    <h3>Update Designer<h3>
        <form action ="update-Designer.php" method ="post">
            <p> Изменить Дизайнера </p>
            <input type="hidden" name="ID_Designer" value ="<?= $Designer['ID_Designer'] ?>" ></input> 
            <input type="text" name="name" placeholder="Имя" value ="<?= $Designer['name'] ?>" ></input>
            <input type="text" name="surname" placeholder="Фамилия" value ="<?= $Designer['surname'] ?>" ></input>
            <input type="text" name="patronymic" placeholder="Отчество" value ="<?= $Designer['patronymic'] ?>" ></input>
            <input type="text" name="email" placeholder="email" value ="<?= $Designer['email'] ?>" ></input>
            <input type="text" name="telephone" placeholder="Телефон" value ="<?= $Designer['telephone'] ?>" ></input>
            <input type="text" name="specialization" placeholder="Специализация" value ="<?= $Designer['specialization'] ?>" ></input> 
            <button type="submit">Изменить Дизайнера</button>
        </form>
</body>