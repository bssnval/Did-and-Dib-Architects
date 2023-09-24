<?php
require_once 'connect.php';
?>

<?php


$id_project = $_POST['id_project'];
$name = $_POST['name'];
$square = $_POST['square'];

mysqli_query($connect, query: "INSERT INTO `premises` (`id_premises`, `id_project`, `name`, `square`) 
VALUES (NULL, '$id_project', '$name', '$square');");  
 

header('Location: admin.php');

?>