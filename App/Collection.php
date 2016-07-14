<?php
/**
 * Created by PhpStorm.
 * User: James Pont
 * Date: 14.07.2016
 * Time: 7:59
 */

namespace App;


class Collection implements \ArrayAccess, \Iterator {
  use TCollection;
}