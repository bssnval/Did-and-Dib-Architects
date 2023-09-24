<?php
require_once 'connect.php';

$ID_material=$_POST['id_material'];
$id_project = $_POST['id_project'];
$type = $_POST['type'];
$cost = $_POST['cost'];
$description = $_POST['description'];


mysqli_query($connect, query: "UPDATE `material` SET `id_project` = '$id_project', `type` = '$type', `cost` = '$cost', `description` = '$description' WHERE `material`.`id_material` = '$ID_material'");


header('Location:admin.php');
?>