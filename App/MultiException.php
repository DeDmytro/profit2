<?php
/**
 * Created by PhpStorm.
 * User: James Pont
 * Date: 14.07.2016
 * Time: 8:19
 */

namespace App;


class MultiException
    extends  \Exception
    implements \ArrayAccess , \Iterator
{
    use TCollection;
}