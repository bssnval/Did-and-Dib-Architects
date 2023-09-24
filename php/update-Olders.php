<?php
require_once 'connect.php';

$ID_Olders=$_POST['id_orders'];
$id_user = $_POST['id_user'];
$id_project = $_POST['id_project'];
$date = $_POST['date'];


mysqli_query($connect, query: "UPDATE `orders` SET `id_user` = '$id_user', `id_project` = '$id_project', 
`date` = '$date' WHERE `orders`.`id_orders` = '$ID_Olders'");
header('Location:admin.php');
?>