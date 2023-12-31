<?php

if ($_POST["type-form"] == "send_email") {
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $body = $_POST["body"];
  $phone = $_POST["phone"];
  $city = $_POST["city"];
  
  if (empty($fullname) || empty($email) || empty($subject) || empty($body) || empty($phone) || empty($city)) {
    $_SESSION["error_message"] = "Всички полета са зъдължителни.";
    return;
  }
  
  if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
    $_SESSION["error_message"] = "Моля, въведете валиден e-mail адрес.";
    return;
  }

  global $db;
  $data = array(
    "fullname" => $fullname,
    "email" => $email,
    "body" => $body,
    "subject" => $subject,
    "phone" => $phone,
    "city" => $city,
  );
  
  $statement = $db->insert("email_messages", $data);
  
  require "admin/mail/send-mail.php";
  $emailStatement = sendMail($subject, $body, $phone, $email, $city, $fullname, "krisidev", $_SERVER['HTTP_HOST']);

  if ($emailStatement) {
    $_SESSION["success_message"] = "Благодаря ви, че избрахте да се свържете с мен. Очаквам с нетърпение да ви помогна и да бъда от полза за вас!";
  } else {
    $_SESSION["error_message"] = "Възникна проблем при изпращането на имейла.";
  }
}
