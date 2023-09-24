<?php
require_once 'connect.php';
?>

<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$specialization = $_POST['specialization'];

mysqli_query($connect, query: "INSERT INTO `designer` (`ID_Designer`, `name`, `surname`, `patronymic`, `email`, `telephone`, `specialization`) VALUES (NULL, '$name', '$surname', '$patronymic', '$email', '$telephone', '$specialization');");  

header('Location: admin.php');

?>