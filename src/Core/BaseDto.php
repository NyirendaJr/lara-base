<?php
/**
 * Created by PhpStorm.
 * User: darryldecode
 * Date: 2/21/2018
 * Time: 8:33 PM
 */

namespace Thelabdevtz\LaraBase\Core;

abstract class BaseDto
{
    public static function get()
    {
        return new static();
    }
}