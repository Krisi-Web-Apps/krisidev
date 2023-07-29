<?php

require 'admin/vendor/PHPMailer-master/src/PHPMailer.php';
require 'admin/vendor/PHPMailer-master/src/SMTP.php';
require 'admin/vendor/PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($subject, $body, $phone, $email, $city, $fullname, $website_title, $website_url)
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'mail.krisidev.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mail@krisidev.com';
    $mail->Password = 'mail@krisidev.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->isHTML(true);

    $mail->setFrom($email, $fullname);
    $mail->addAddress("krisi.199898@gmail.com", "Кристиан Костадинов");
    $mail->addAddress("mail@krisidev.com", "Кристиан Костадинов");
    $mail->addReplyTo($email, $fullname);
    $mail->Subject = $subject;

    $template = createEmailTemplate($subject, $body, $phone, $email, $city, $fullname, $website_title, $website_url);

    $mail->Body = $template;

    if ($mail->send()) {
        return TRUE;
    } else {
        echo 'Имаше проблем при изпращането на имейла: ' . $mail->ErrorInfo;
        return FALSE;
    }
}

function createEmailTemplate($subject, $body, $phone, $email, $city, $fullname, $website_title, $website_url)
{
    $template = file_get_contents('admin/mail/templates/contacts-email.html');

    $template = str_replace(
        array('{{subject}}', '{{body}}', '{{phone}}', '{{email}}', '{{city}}', '{{fullname}}', '{{website_title}}', '{{website_url}}'),
        array($subject, $body, $phone, $email, $city, $fullname, $website_title, $website_url),
        $template
    );

    return $template;
}