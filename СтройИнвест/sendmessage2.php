<?php
$sendto = "vitos31@i.ua";
$name = $_POST['name'];
$phone = $_POST['phone'];
// Формирование заголовка письма
$subject  = "Заявка c сайта";
$headers  = "From: info_@mail.ru " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка c сайта</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$phone."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>
