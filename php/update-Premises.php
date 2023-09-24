<?php
require_once 'connect.php';

$ID_premises=$_POST['id_premises'];
$id_project = $_POST['id_project'];
$name = $_POST['name'];
$square = $_POST['square'];


mysqli_query($connect, query: "UPDATE `premises` SET `id_project` = '$id_project', `name` = '$name', `square` = '$square' 
WHERE `premises`.`id_premises` = '$ID_premises'");


header('Location:admin.php');
?>