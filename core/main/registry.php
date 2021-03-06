<?php
/**
 * Created by PhpStorm.
 * User: Kamil Kozak
 * Date: 16.01.2018
 * Time: 19:12
 */

class registry
{
    private static $registered = array();

    public static function register($object, $params = false)
    {
        if (empty(self::$registered[$object]))
        {
            if (!params)
            {
                self::$registered[$object] = new $object();
            }
            else
            {
                self::$registered[$object] = new $object($params);
            }
        }

        return self::$registered[$object];
    }
}

?>