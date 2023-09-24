<?php
require_once 'connect.php';
?>

<?php

$email = $_POST['Email'];
$password = $_POST['Password'];
$surname = $_POST['Surname'];
$name = $_POST['Name'];
$patronymic = $_POST['Patronymic'];


mysqli_query($connect, query: "INSERT INTO `user` (`ID_User`, `Email`, `Password`, `Surname`, `Name`, `Patronymic`, `email_link`) VALUES 
(NULL, '$email','$password','$surname', '$name', '$patronymic', '');"); 
 

header('Location: admin.php');

?>