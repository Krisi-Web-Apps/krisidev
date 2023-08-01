<?php

$router = new Router();

$router->addRoute("/", function () {
  view("home");
});

$router->addRoute("/about", function () {
  view("about");
});

$router->addRoute("/contacts", function () {
  view("contacts");
});

$router->addRoute("/faq", function () {
  view("faq");
});

$router->addRoute("/terms-of-use", function () {
  view("privacy/terms-of-use");
});

$router->addRoute("/privacy-policy", function () {
  view("privacy/privacy-policy");
});

$router->addRoute("/cookie-policy", function () {
  view("privacy/cookie-policy");
});

require "auth/router.php";
require "users/router.php";

$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($currentPath);
