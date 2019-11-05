
<?php

session_start();

// Файлы phpmailer
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';
require 'mailer/Exception.php';
// Переменные, которые отправляет пользователь
$email = $_SESSION['email'];
$text = '<a href="https://elordajastary2019.kz/golos.php">Пройдите по ссылке чтоб авторизоваться</a>';
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    //$msg = "ok";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера GMAIL
    $mail->Username   = '8gg001'; // Логин на почте
    $mail->Password   = '7776660054fepipe76'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('elorda@jastary.com', 'Elorda Jastar'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress($email); // Ещё один, если нужен
    $mail->addAddress('8gg001@gmail.com'); // Ещё один, если нужен



        // -----------------------
        $mail->isHTML(true);
    
        $mail->Subject = 'Elorda Jastary';
        $mail->Body    = $text;

        header('Location: https://elordajastary2019.kz');
// Проверяем отравленность сообщения
//if ($mail->send()) {
//    echo "$msg";
//} else {
//echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
//}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
