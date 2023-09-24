<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']) && $_POST['email'])
{
include '../connect.php';

$result = mysqli_query($connect,"SELECT * FROM user WHERE `email`='" . $_POST['email'] . "'");

$row = mysqli_num_rows($result);

if($row <= 0)
{
$email = $_POST['email'];
$token = md5($_POST['email']).rand(10,9999);

mysqli_query($connect, "INSERT INTO `user` (`ID_User`, `Email`, `Password`, `Surname`, `Name`, `Patronymic`,`email_link`) 
VALUES (NULL, '" . $_POST['email'] . "', '" . $_POST['password'] . "', '" . $_POST['text'] . "', '', '','" . $token . "')");


$link = "<a href='http://dd/php/config/verification.php?key=".$_POST['email']."&token=".$token."'>ссылке</a>";

require_once('../../vendor/autoload.php');



$mail = new PHPMailer(true);


try {
//Server settings
$mail->CharSet = "UTF-8";
$mail->setLanguage("ru", '../../vendor/phpmailer/phpmailer/language');
$mail->SMTPDebug = 0; //Enable verbose debug output
$mail->isSMTP(); //Send using SMTP
$mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
$mail->SMTPAuth = true; //Enable SMTP authentication
$mail->Username = 'isip_a.a.starshova@mpt.ru'; //SMTP username
$mail->Password = 'ubhc mtlp qyvf xrft'; //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
$mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('isip_a.a.starshova@mpt.ru', 'DD');
$mail->addAddress($email, 'Dear customer'); //Add a recipient

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = 'Подтвердите адрес электронной почты';
$mail->Body = 'Для подтверждения почты перейдите по '.$link.'';


$mail->send();
echo 'Проверьте почту, Вас там ждет ссылка';

} catch (Exception $e) {
echo "Ошибка - >".$mail->ErrorInfo;
}
}
else
{
echo "Вы уже зарегистрированы";
}
}
?>