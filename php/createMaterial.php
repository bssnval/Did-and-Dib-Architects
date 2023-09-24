<?php
require_once 'connect.php';
?>

<?php

$id_project = $_POST['id_project'];
$type = $_POST['type'];
$cost = $_POST['cost'];
$description = $_POST['description'];

mysqli_query($connect, query: "INSERT INTO `material` (`id_material`, `id_project`, `type`, `cost`, `description`) VALUES 
(NULL, '$id_project', '$type', '$cost', '$description');");  
 

header('Location: admin.php');

?>