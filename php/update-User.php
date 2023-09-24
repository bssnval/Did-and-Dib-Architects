

<?php
require_once 'connect.php';

$ID_User=$_POST['ID_User'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$surname = $_POST['Surname'];
$name = $_POST['Name'];
$patronymic = $_POST['Patronymic'];



mysqli_query($connect, query: "UPDATE `user` SET `Email` = '$email', `Password` = '$password', `Surname` = '$surname', `Name` = '$name', 
`Patronymic` = '$patronymic' WHERE `user`.`ID_User` = '$ID_User'");
header('Location:admin.php');
?>