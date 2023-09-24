<?php
require_once 'connect.php';

$id_project=$_POST['id_project'];
$id_designer = $_POST['id_designer'];
$name = $_POST['name'];
$project_start = $_POST['project_start'];
$project_finish = $_POST['project_finish'];
$status = $_POST['status'];


mysqli_query($connect, query: "UPDATE `project` SET `id_designer` = '$id_designer', `name` = '$name', `project_start` = '$project_start', `project_finish` = '$project_finish', 
`status` = '$status' WHERE `project`.`id_project` = '$id_project'");



header('Location:admin.php');
?>