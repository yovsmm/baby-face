<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$products_name = $_POST['products_name'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$date = $_POST['date'];

$totalprice = $price * $quantity;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ivanbjmnoskov@mail.ua'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'zQvz78gnq1'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('ivanbjmnoskov@mail.ua'); // от кого будет уходить письмо?
$mail->addAddress('babyfaceyov@gmail.com');// Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML


if ($_POST['date'] == "") {
    $mail->Subject = 'Обратный звонок с Baby Face';
    $mail->Body    = 'Имя клиента: '.$name.'<br>Номер клиента: '.$phone;
}
else{
    $mail->Subject = 'Заявка с Baby Face';
    $mail->Body    = 'Имя клиента: '.$name.'<br> Название товара: '.$products_name.'<br> Количество товара: '.$quantity.'<br> Цена за 1 товар: '.$price.'<br>Цена за'.$quantity.' товар(a): '.$totalprice.'<br>Номер клиента: '.$phone;
}
if ($_POST['date'] != "") {
    $mail->Subject = 'Заявка на запись с Baby Face';
    $mail->Body    = 'Имя клиента: '.$name.'<br> Номер клиента: '.$phone.'<br> Дата: '.$date;
}
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Что-то пошло не так(<br>В ближайшее время мы это исправим.';
} else {
    header('location: thank.html');
}
?>