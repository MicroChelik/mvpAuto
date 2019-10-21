<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$message = 'Звонок заказал: ' . $name . ". Номер телефона:" . $phoneNumber . ". Email:" . $email . " .";
$headers = 'From: mrpicklericklez@yandex.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
if(mail("mvpautoperm@mail.ru", "Заявка на звонок с сайта mvpAuto", $message, $headers)):
	// echo "message sent";
	header('Location: http://perm.gen-auto.ru/',true, 301);
else:
	echo "message not sent";
endif;

?>