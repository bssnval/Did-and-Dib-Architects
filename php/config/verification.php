<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Подтверждение электронной почты</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:black">


<?php

if($_GET['key'] && $_GET['token'])
{
include '../connect.php';

$email = $_GET['key'];

$token = $_GET['token'];

$query = mysqli_query($connect, "SELECT * FROM `user` WHERE `email_link`='".$token."' and `email`='".$email."'");


if (mysqli_num_rows($query) > 0)
{

$row= mysqli_fetch_array($query);

if($row['verified'] == 0)

{

mysqli_query($connect,"UPDATE `user` set `verified` = 1 WHERE `email` = '" . $email . "'");
$msg = "Вы успешно прошли регистрацию";

} else{
$msg = "Вы уже подтвердили свою почту";
}

} else {

$msg = "Эта почты не была зарегистрирована";
}

}
else
{
$msg = "Ошибка!";
}
?>

<div class="container mt-3" style="color:white">
<div class="card" >
<div class="card-header text-center" style="background-color:black">
Подтверждение электронной почты
</div>
<div class="card-body" style="background-color:black">
<p><?php echo $msg; ?></p>
</div>
</div>
</div>

</body>
</html>