<?php 
 
    session_start(); 
    require_once '../connect.php'; 
 
    $email = $_POST['email']; 
    $password = ($_POST['password']); 
 
    $check_user = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email' AND password = '$password' AND verified = '1'"); 
    if (mysqli_num_rows($check_user) > 0) { 
 
        $user = mysqli_fetch_assoc($check_user); 
 
        $_SESSION['User'] = [ 
            "ID_User" => $user['ID_User'], 
            "Surname" => $user['Surname'], 
            "Name" => $user['Name'],
            "Patronymic" => $user['Patronymic'],
        ]; 
 
        header('Location:../../kabinet.php'); 
 
    } else { 
        header('Location: error-signin.php'); 
         
    } 
    ?> 
 
<pre> 
    <?php 
    print_r($check_user); 
    print_r($user); 
    ?> 
</pre>