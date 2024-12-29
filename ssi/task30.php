<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

// Composer ilə PHPMailer daxil edilibsə, bu kütüphanə daxil edilir
require 'vendor/autoload.php';

// Yeni PHPMailer obyekti yaradılır
$mail = new PHPMailer(true);

try {
    // SMTP istifadə edilməsi
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // SMTP serveri
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com'; // SMTP istifadəçi adı
    $mail->Password = 'your-password'; // SMTP şifrə
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // SMTP portu

    // Göndərənin məlumatları
    $mail->setFrom('your-email@example.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name'); // Alıcı
    $mail->addReplyTo('reply@example.com', 'Reply Name'); // Cavab ünvanı

    // Mail mövzusu
    $mail->Subject = 'This is the email subject';

    // Mail məzmunu
    $mail->Body = 'This is the body of the email. <b>This is bold text.</b>';

    // HTML olaraq göndərilməsi
    $mail->isHTML(true);

    // Maili göndər
    if ($mail->send()) {
        echo 'Message has been sent successfully';
    } else {
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
