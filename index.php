<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();

$result = $db->execute('CREATE TABLE foo (id SERIAL)');
var_dump($result);