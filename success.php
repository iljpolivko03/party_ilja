<?php
require '../vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App("Success!");
$app->initLayout("Centered");
session_start();
if (isset($_SESSION['name'])) {
  $message=$app->add(['Message','Welcome!'.$_SESSION['name'],'type'=>'success']);
}
else {
  $message=$app->add(['Message', 'If you wanna be a friend with me, you must log in','type'=>'error']);
}
$button=$app->add('Button');
$button->set('logout');
$button->link(['logout']);
