<?php
/**
 * Created by PhpStorm.
 * User: James Pont
 * Date: 03.07.2016
 * Time: 9:26
 */

namespace App;


class View {

    protected $data = [];

    public function  __set($name, $value) {

        $this->data[$name] = $value;
    }

    function __get($name) {

        return $this->data[$name];
    }

    public function display($template){
        include $template;
    }
}