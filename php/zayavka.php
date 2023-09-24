<?php
 require_once 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявка</title>
</head>
<body>

<style>
    th, td {
        padding: 15px;
    }

    th {
        background: #B9947A;
    }

    p {
        background: #B9947A; 
        padding: 15px;
        max-width: 450px;
        
    }

    td {
        background: #DBBFAB;
    }

    


</style>
<table>



        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>email</th>
            <th>Телефон</th>
            <th>Площадь</th>
            <th>Город</th>
            <th>Материал</th>
            <th>Помещение</th>
            <th>Дополнительно</th>

        </tr>

    <?php
        $message = mysqli_query($connect, query: "SELECT * FROM `message`");
        $message = mysqli_fetch_all($message);
        foreach($message as $message) {
    ?>    
    
        <tr>
            <td><?= $message[0] ?></td>
            <td><?= $message[1] ?></td>
            <td><?= $message[2] ?></td>
            <td><?= $message[3] ?></td>
            <td><?= $message[4] ?></td>
            <td><?= $message[5] ?></td>
            <td><?= $message[6] ?></td>
            <td><?= $message[7] ?></td>
            <td><?= $message[8] ?></td>
            <td><a href="deleteMessage.php?id=<?= $message[0] ?>">Удалить</a></td>
        </tr>               

            <?php

        }
    ?>
    
    </table>
</body>
</html>