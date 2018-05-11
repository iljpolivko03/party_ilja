<?php
require 'vendor/autoload.php';
require 'connection.php';
if((isset($_SESSION['hash']))&&($_SESSION['hash']=='utftf')){
  header('Location:admin.php');
}
$app = new \atk4\ui\App("Enter password");
$app->initLayout("Admin");
$check= new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$check->addField('password',['type'=>'password','required'=>TRUE]);
$form=$app->layout->add('Form');
$form->setModel($check);
$form->onSubmit(function($form){
$pass='2k18';
if($form->model['password'] == $pass){
  $_SESSION['hash']='utftf';
  return new \atk4\ui\jsExpression('document.location = "admin.php"');
}else{
  return new \atk4\ui\jsExpression('document.location = "error.php"');
}
});
