<?php
/**
 * Created by PhpStorm.
 * User: James Pont
 * Date: 10.07.2016
 * Time: 21:59
 */

namespace App\Controllers;


use App\View;

class News {
    protected $view;

    public function __construct() {
        $this->view = new View();
    }
    public function action($action){
        $methodName = 'action'.$action;
        $this->beforeAction();
        return $this->$methodName();
    }
    protected function beforeAction(){
        echo 'Counter';
    }
    public function actionIndex(){

        $this->view->title = 'Мой крутой сайт';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }
}