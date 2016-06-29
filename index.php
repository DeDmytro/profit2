<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();

$data = $db->query('SELECT * FROM users','App\Models\User');
echo '<pre>';
var_dump($data);



//$result = $db->execute('CREATE TABLE foo (id SERIAL)');
//var_dump($result);