<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$question = $_POST['question'];
$message = 'Вопрос задал: ' . $name . ". Номер телефона:" . $phoneNumber . ". Email:" . $email . " . Вопрос:" . $question . ".";
$headers = 'From: mrpicklericklez@yandex.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
if(mail("otec-akk@mail.ru", "Вопрос с сайта mvpAuto", $message, $headers)):
	// echo "message sent";
	header('Location: http://perm.gen-auto.ru/',true, 301);
else:
	echo "message not sent";
endif;

?>