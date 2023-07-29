<?php

global $BASE_PATH;
$router->addRoute("$BASE_PATH/email_messages", function () {
  view("email_messages/index");
});