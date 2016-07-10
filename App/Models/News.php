<?php
/**
 * Created by PhpStorm.
 * User: James Pont
 * Date: 10.07.2016
 * Time: 19:37
 */

namespace App\Models;


use App\Model;

class News extends Model{
    const TABLE = 'news';

    public $title;
    public $lead;
    public $author_id;


}