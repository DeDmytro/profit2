<?php

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model
{
    const TABLE = 'users';//статическое неизменяемое свойство
    public $email;
    public $name;
    
}