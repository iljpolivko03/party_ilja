<?php
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App("Anketa");
$app->initLayout("Centered");
session_start();



$form=$app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function ($form) {
  $notifier = new \atk4\ui\jsNotify();

   $notifier->setColor('red')

            ->setPosition('center')

            ->setWidth('100')

            ->setContent('Skidka bomžam 50%')

            ->setTransition('fade')

            ->setIcon('wheelchair');
  $_SESSION['name'] = $form->model['name'];
  if($form->model['age']>14){
  $form->model->save();
  return $notifier;
  //return $form->success('Record updated');
}else{
//  return $form->error('Увы, ты не подходишь');
return new \atk4\ui\jsExpression('document.location="error.php" ');

}

});

$grid=$app->layout->add('Grid');
$grid->setModel(new Friends($db));

$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));
$crud->addQuickSearch(['name','surname']);
$button=$app->layout->add(['Button','Admin']);
$button->link(['check']);
