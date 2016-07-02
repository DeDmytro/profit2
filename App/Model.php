<?php

namespace App;

abstract class Model
//не позволяет создавать обьекты,
//могут только наследники
{
    const TABLE = '';

    public static function findAll(){

        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class//полное имя этого класса
        );
    }
}

