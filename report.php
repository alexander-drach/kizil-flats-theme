<?php
$phone = $_POST['tel'];
$address = $_POST['address'];
$date_on = $_POST['date_on'];
$date_off = $_POST['date_off'];
$message = $_POST['message'];
$agree = $_POST['agree'];

$send_message = "
Телефон: $phone<br>
Адрес: $address<br>
Дата въезда: $date_on<br>
Дата выкзда: $date_off<br>
Описание заявки: $message<br>
Согласие: $agree
";

echo $send_message;