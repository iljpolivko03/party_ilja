<?php
//$db=new
//\atk4\data\Persistence_SQL('mysql:dbname=friends;host=localhost','root','');

$db=new
\atk4\data\Persistence_SQL('mysql:dbname=heroku_35a63eb77fee245;host=eu-mm-auto-fra-02-c.cleardb.net','bfa11752c77b7dt','77c43c35');
class Friends extends \atk4\data\Model {
  public $table = 'ilja';
  function init () {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>371]);
    $this->addField('email');
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes',['type'=>'text']);
    $this->addField('age');
 }
}
