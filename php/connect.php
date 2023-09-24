<?php
$user="root";
$password="";
$host="localhost";
$db="Studio_design_interior";
$dbh='mysql:host='.$host.';dbname='.$db.';char set=utf8';
$pdo=new PDO($dbh, $user, $password);
$connect = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'Studio_design_interior');
if (!$connect){
    die('error');
}
?>