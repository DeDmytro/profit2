<?php

namespace App;

abstract class Model
//не позволяет создавать обьекты,
//могут только наследники
{
    public $id;
    const TABLE = '';

    public static function findAll(){

        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,[],
            static::class//полное имя этого класса
        );
    }
    public static function findById($id){

        $db = Db::instance();
        return $db->query(
            'SELECT * FROM ' . static::TABLE .' WHERE id = :id',[':id'=>$id],
            static::class//полное имя этого класса
        );
    }

    public function isNew(){
        return empty($this->id);
    }

    public function insert(){
        //Реализация ActiveRecord(Запись обьекта в базу данных)
        if (!$this->isNew()){
            return;
        }
        $columns= [];
        $values = [];
        foreach ($this as $key => $value){
            if('id' == $key){
                continue;
            }
            $columns[] = $key;
            $values[':'.$key] = $value;
        }
        $sql = 'INSERT INTO '. static::TABLE . ' 
        (' . implode(',', $columns ) . ') 
        VALUES (' . implode(',',array_keys($values)) . ')';
        $db = Db::instance();
        $db->execute($sql,$values);
//        echo $sql.'<br>';
    }
    public function delete(){
        $columns= [];
        $values = [];
        foreach ($this as $key => $value){
            if('id' == $key){
                continue;
            }
            $columns[] = $key;
            $values[':'.$key] = $value;
        }
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE '
            . $columns[0] .' = ' .'\''. $values[':'.$columns[0]].'\'';
//        echo $sql.'<br>';
        $db = Db::instance();
        $db->execute($sql,$values);
    }
}

