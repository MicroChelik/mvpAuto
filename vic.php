<?php
$mark = $_POST['mark'];
$model = $_POST['model'];
$km = $_POST['km'];
$recover = $_POST['recover'];
$insured = $_POST['insured'];
$message = 'Марка машины: ' . $mark . '. Модель:' . $model . '. Пробег:' . $km . ' . Что нужно ремонтировать:' . $recover . ' . Застрахован:' . $insured . ' .';
$headers = 'From: mrpicklericklez@yandex.ru' . '\r\n' .
    'X-Mailer: PHP/' . phpversion();
 
if(mail('mvpautoperm@mail.ru', 'Викторина', $message, $headers)):
	// echo 'message sent';
	// header('Location: http://octaspring.ruson.su/#help',true, 301);
else:
	echo 'message not sent';
endif;

?>