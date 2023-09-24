<?php
require_once 'connect.php';

$material = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM material WHERE `material`.`id_material` = '$material'");
header('Location:admin.php');
?>