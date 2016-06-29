<?php

namespace App;

class Db
{
    protected $dbh;//data base handler

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=profit2','root','');

        if($this->dbh){
            echo 'DB: success!';
        }
    }

    public function execute($sql){

        $sth = $this->dbh->prepare($sql);
        return $sth->execute();//true or false
    }

    public function query($sql, $class){

        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute();//true or false

        if (false !== $result){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}