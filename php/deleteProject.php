<?php
require_once 'connect.php';

$project = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM project WHERE `project`.`id_project` = '$project'");
header('Location:admin.php');
?>