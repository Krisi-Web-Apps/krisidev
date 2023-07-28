<?php

// Пътят до PHPMailer файловете, ако са разположени в същата директория като настоящия скрипт
require 'admin/PHPMailer-master/src/PHPMailer.php';
require 'admin/PHPMailer-master/src/SMTP.php';
require 'admin/PHPMailer-master/src/Exception.php';

// Създаване на инстанция на PHPMailer класа
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($fullname, $email, $subject, $body)
{
    $mail = new PHPMailer(true); // true задава строг режим на грешки

    // Настройте настройките на SMTP, ако се използва SMTP сървър
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'mail.krisidev.com'; // SMTP сървър на вашия хост или хостинг доставчик  
    $mail->SMTPAuth = true;
    $mail->Username = 'mail@krisidev.com'; // Вашият SMTP потребителско име
    $mail->Password = 'mail@krisidev.com'; // Вашият SMTP парола
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS шифроване, за да се осигури сигурна комуникация
    $mail->Port = 587; // Портът на вашия SMTP сървър (обикновено 587)

    // Настройки за имейла
    $mail->setFrom($email, $fullname); // Имейл и име на изпращача
    $mail->addAddress("krisi.199898@gmail.com", "Кристиан Костадинов"); // Имейл и име на получателя
    $mail->addAddress("mail@krisidev.com", "Кристиан Костадинов"); // Имейл и име на получателя
    $mail->addReplyTo($email, $fullname);
    $mail->Subject = $subject; // Заглавие на имейла
    $mail->Body = $body; // Текст на имейла

    // Изпращане на имейла
    if ($mail->send()) {
        return TRUE;
    } else {
        echo 'Имаше проблем при изпращането на имейла: ' . $mail->ErrorInfo;
        return FALSE;
    }
}