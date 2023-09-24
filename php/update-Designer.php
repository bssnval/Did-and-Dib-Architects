<?php
require_once 'connect.php';

$ID_Designer=$_POST['ID_Designer'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$specialization = $_POST['specialization'];



mysqli_query($connect, query: "UPDATE `designer` SET `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', 
`email` = '$email', `telephone` = '$telephone', `specialization` = '$specialization' WHERE `designer`.`ID_Designer` = '$ID_Designer'");
header('Location:admin.php');
?>