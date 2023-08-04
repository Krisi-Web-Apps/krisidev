<?php

if ($_POST["type-form"] == "create") {
  $title = htmlspecialchars($_POST["title"]);
  $slug = htmlspecialchars($_POST["slug"]);
  $location = htmlspecialchars($_POST["location"]);
  $content = htmlspecialchars($_POST["content"]);

  if (empty($title) || empty($slug) || empty($location) || empty($content)) {
    $_SESSION["error_message"] = "Всички полета са зъдължителни.";
    return;
  }

  global $db;
  $params = array(
    ":title" => $title,
    ":slug" => $slug,
  );
  $isLayoutExists = $db->select("SELECT * FROM `layouts` WHERE title = :title OR slug = :slug", $params);
  
  if ($isPageExists != FALSE) {
    $_SESSION["error_message"] = "Свойствата 'заглавие' и 'слъг' трябва да са уникални.";
    return;
  }

  $data= array(
    "title" => $title,
    "slug" => $slug,
    "location" => $location,
    "content" => $content,
  );
  $db->insert("layouts", $data);
  $_SESSION["success_message"] = "Този лейаут бе създаден успешно.";
  header("Location: /admin/layouts");
  exit;
}

if ($_POST["type-form"] == "edit") {
  $title = htmlspecialchars($_POST["title"]);
  $slug = htmlspecialchars($_POST["slug"]);
  $location = htmlspecialchars($_POST["location"]);
  $content = htmlspecialchars($_POST["content"]);
  $id = $_POST["id"];

  if (empty($title) || empty($slug) || empty($location) || empty($content)) {
    $_SESSION["error_message"] = "Всички полета са зъдължителни.";
    return;
  }

  global $db;

  $data= array(
    "title" => $title,
    "slug" => $slug,
    "location" => $location,
    "content" => $content,
  );
  $db->update("layouts", $data, "id = $id;");

  $_SESSION["success_message"] = "Този лейаут бе редактиран успешно.";
  header("Location: /admin/layouts");
  exit;
}
