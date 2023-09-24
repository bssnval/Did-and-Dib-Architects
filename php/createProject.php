<?php
require_once 'connect.php';
?>

<?php


$id_designer = $_POST['id_designer'];
$name = $_POST['name'];
$project_start = $_POST['project_start'];
$project_finish = $_POST['project_finish'];
$status = $_POST['status'];


mysqli_query($connect, query: "INSERT INTO `project` (`id_project`, `id_designer`, `name`, `project_start`, `project_finish`, `status`) 
VALUES (NULL, '$id_designer', '$name', '$project_start', '$project_finish', '$status');");  
 

header('Location: admin.php');

?>