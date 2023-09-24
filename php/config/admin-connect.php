<?php
    session_start();
    include "../connect.php";

    if (isset($_POST['submit'])){
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        if($email === ''){
            unset($email);
        }
    }

    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password === ''){
            unset($password);
        }
    }
        if(isset($_POST['g-recaptcha-response'])){
        $recapcha = $_POST['g-recaptcha-response'];

        if(!$recapcha){
        $_SESSION['message']='Подтвердите, что Вы не робот';
        header('Location' . $_SERVER['HTTP_REFERER']);
    }
    else {
    $secretkey = "6Lf62xkoAAAAAEex-NXYK9zpRldIVAE6w2guTDkr";
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$remoteip";
    $file= file_get_contents($url);
    $data = json_decode($file);

    if(isset($_POST['g-recaptcha-response'])){

    if($data->success==true) {

    $email = $_POST['email'];
    $password = ($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
    "email" => $user['email'],
    ];

    header('Location: /admin.php');

    } else {
    header('Location: login.php');
    }
    } else {
    echo "Вы не прошли проверку";
    }
    }

    }
    }
    }
?>