<?php

    require_once 'connect.php';

        $ID_User=$_GET['id'];
        $User = mysqli_query($connect, query: "SELECT * FROM `user` WHERE `ID_User` = '$ID_User'");
        $User = mysqli_fetch_assoc($User);
    ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>updateUser</title>
</head>
<body>
    <h3>Update User<h3>
        <form action ="update-User.php" method ="post">
            <p> Изменить Пользователя </p>
            <input type="hidden" name="ID_User" value ="<?= $User['ID_User'] ?>" ></input> 
            <input type="text" name="Email" placeholder="email" value ="<?= $User['Email'] ?>" ></input>
            <input type="text" name="Password" placeholder="Пароль" value ="<?= $User['Password'] ?>" ></input>
            <input type="text" name="Surname" placeholder="Фамилия" value ="<?= $User['Surname'] ?>" ></input>
            <input type="text" name="Name" placeholder="Имя" value ="<?= $User['Name'] ?>" ></input>
            <input type="text" name="Patronymic" placeholder="Отчество" value ="<?= $User['Patronymic'] ?>" ></input>
            <button type="submit">Изменить Пользователя</button>
        </form>
</body>