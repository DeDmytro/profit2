<?php


require __DIR__ . '/autoload.php';

//$authors = \App\Models\Author::findAll();
//var_dump($authors);
//
//$news = \App\Models\News::findAll();
//
//var_dump($news[1]->author);


$a = new \App\Collection();
$a[] = 1;
$a[1] = 212;
$a[2] = 234;

foreach ($a as $el){
    echo $el;
}