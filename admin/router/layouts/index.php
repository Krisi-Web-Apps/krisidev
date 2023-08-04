<?php

global $BASE_PATH;
$router->addRoute("$BASE_PATH/layouts", function () {
  view("layouts/index");
});

$router->addRoute("$BASE_PATH/layouts/create", function () {
  view("layouts/create");
});

$router->addRoute("$BASE_PATH/layouts/edit/:id", function ($params) {
  $_SESSION["params"] = $params;
  view("layouts/edit");
});
