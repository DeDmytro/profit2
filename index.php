<?php

require __DIR__ . '/autoload.php';


//Установил  метод getEmail() @derpecated
//$user = new \App\Models\User();
//$user->getEmail();


// создание обьекта представления
$view = new \App\View();
//загрузка в него данных
$view->title = 'Мой крутой сайт';
$view->users = \App\Models\User::findAll();
$view->display(__DIR__ . '\App\templates\index.php');
echo count($view);

//После рендера файл вывода обычная строка
//$cont = $view->render(__DIR__ . '\App\templates\index.php');
//echo str_replace('@',' нет собачки!!! ' ,$cont );

//Вывод темплейта
//$users = \App\Models\User::findAll();
//include __DIR__ . '\App\templates\index.php';

//Singleton
//$single = App\Singleton::instance();
//var_dump($single);

use App\Models\User;

//Реализация ActiveRecord(Запись обьекта в базу данных)
//$user = new User();
//$user->name = 'Julia';
//$user->email = 'matovykh@mail.ru';
//$user->insert();
//Реализация ActiveRecord(Удаления обьекта из базы данных)
//$user->delete();


//$db = new \App\Db();

//$data = $db->query('SELECT * FROM users','App\Models\User');
//echo '<pre>';
//var_dump($data);


//$result = $db->execute('CREATE TABLE foo (id SERIAL)');
//var_dump($result);