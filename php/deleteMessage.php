<?php
require_once 'connect.php';

$message = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM message WHERE `message`.`id_message` = '$message'");
header('Location:zayavka.php');
?>