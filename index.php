<?php
use App\Models\User;
require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();
//
//echo '<pre>';
//var_dump($users);


//Singleton
//$single = App\Singleton::instance();
//var_dump($single);


//Реализация ActiveRecord(Запись обьекта в базу данных)
$user = new User();
$user->name = 'Julia';
$user->email = 'matovykh@mail.ru';
$user->insert();


//$db = new \App\Db();

//$data = $db->query('SELECT * FROM users','App\Models\User');
//echo '<pre>';
//var_dump($data);



//$result = $db->execute('CREATE TABLE foo (id SERIAL)');
//var_dump($result);