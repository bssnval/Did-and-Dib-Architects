<?php
require_once 'connect.php';
?>

<?php

$id_user = $_POST['id_user'];
$id_project = $_POST['id_project'];
$date = $_POST['date'];

mysqli_query($connect, query: "INSERT INTO `orders` (`id_orders`, `id_user`, `id_project`, `date`) VALUES 
(NULL, '$id_user', '$id_project', '$date');");  
 

header('Location: admin.php');

?>