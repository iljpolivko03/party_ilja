<?php
require '../vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App("Enter password");
$app->initLayout("Admin");
if((isset($_SESSION['hash']))&&($_SESSION['hash']!='utftf')){
  header('error.php');
}
//$msg=$app->add(['Message','Here->',]);
$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$crud->menu->addItem('Reload',new \atk4\ui\jsReload($crud));

$button=$app->add('Button');
$button->set('Logout');
$button->link('logout.php');

$button1=$app->add('Button');
$button1->set('Exit');
$button1->link('index.php');

$button2=$app->add(['Button','Click to update!']);
$button2->on('click', new \atk4\ui\jsReload($crud));
