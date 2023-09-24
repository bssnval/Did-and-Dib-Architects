<?php
require_once 'connect.php';

$premises = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM premises WHERE `premises`.`id_premises` = '$premises'");
header('Location:admin.php');
?>