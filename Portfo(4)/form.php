<?php
	$sendto = "vitos31@i.ru";
	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$hidden = $_POST['hidden'];
	
	
	switch ($hidden) {
		case 100:
			$subject = "Заявка на консультацию";
			break;
		case 200:
			$subject = "Заказ с сайта";
			break;
		case 300:
			$subject = "Заявка на скидку 20%";
			break;
		case 400:
			$subject = "Заявка на обратный звонок";
			break;
		case 500:
			$subject = "Заявка на бесплатную претензию";
			break;
	}

	// Формирование заголовка письма
	$headers  = "From: inside@legal-aid.ru" . strip_tags($usermail) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
	
	$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
	$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>$subject</h2>\r\n";
	// Формирование тела письма
	$msg .= "<p><strong>Имя: </strong> ".$name."</p>\r\n";
	$msg .= "<p><strong>Телефон: </strong> ".$phone."</p>\r\n";
	$msg .= "<p><strong>E-mail: </strong> ".$email."</p>\r\n";
	$msg .= "</body></html>";

	// отправка сообщения
	if(@mail($sendto, $subject, $msg, $headers)){
		echo "true";
	}
?>