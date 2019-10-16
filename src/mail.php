<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$username = $_POST['username'];
$phone = $_POST['phone'];
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Форма успешно отправленна";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = 'dmitriywebstart@gmail.com'; // Логин на почте
    $mail->Password   = 'Y3pr7x2jte'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('dmitriywebstart@gmail.com', 'Glo Academy'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('1922titan@gmail.com');  
   
        // -----------------------
        // Само письмо
        // -----------------------
    $mail->isHTML(true);
    
    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $username <br>
    <b>Телефон:</b> $phone";
// Проверяем отравленность сообщения
if ($mail->send()) {
    header('location: thanks.html');
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}