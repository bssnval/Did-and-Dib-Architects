<?php
require_once 'connect.php';

$Olders = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM orders WHERE `orders`.`id_orders` = '$Olders'");
header('Location:admin.php');
?>