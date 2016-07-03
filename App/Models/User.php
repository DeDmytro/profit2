<?php

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model
    implements HasEmail
{
    const TABLE = 'users';//статическое неизменяемое свойство
    public $email;
    public $name;

    /**
     * Метод возврщающий адрес e-mail
     * @deprecated
     * @return string Адрес електронной почты
     */
    public function getEmail() {
        return $this->email;
    }
}