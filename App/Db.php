<?php

namespace App;

class Db extends Singleton
{
//    //Использовать трейт /
//    use Singleton;

    protected $dbh;//data base handler

    protected function __construct()
    {
        try{
            $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=profit2','root','');

        }catch(\PDOException $e){
           throw new \App\Exceptions\Db();
        }

        if($this->dbh){
            echo 'DB: success!<br>';
        }
    }

    public function execute($sql, $params = []){

        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);//true or false
    }

    public function query($sql,$params, $class){

        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($params);//true or false

        if (false !== $result){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}