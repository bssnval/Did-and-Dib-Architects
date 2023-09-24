<?php
require_once 'connect.php';

$User = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM user WHERE `user`.`ID_User` = '$User'");
header('Location:admin.php');
?>