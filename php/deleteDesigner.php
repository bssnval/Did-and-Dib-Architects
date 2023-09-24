<?php
require_once 'connect.php';

$ID_Designer = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM designer WHERE `designer`.`ID_Designer` = '$ID_Designer'");
header('Location:admin.php');
?>