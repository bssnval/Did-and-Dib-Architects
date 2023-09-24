<?php
require_once 'connect.php';
?>

<?php


$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$square = $_POST['square'];
$town = $_POST['town'];
$material = $_POST['material'];
$premises = $_POST['premises'];
$addition = $_POST['addition'];


mysqli_query($connect, query: "INSERT INTO `message` (`id_message`, `name`, `email`, `telephone`, `square`, `town`, `material`, `premises`, `addition`) 
VALUES (NULL, '$name', '$email', '$telephone', '$square', '$town', '$material', '$premises', '$addition');");  
 

header('Location: ../zayavka.php');

?>