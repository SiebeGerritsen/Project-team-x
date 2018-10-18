<?php

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        /**
         * GET of POST method
         */
        return $_SERVER['REQUEST_METHOD'];
    }
}
/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 20:37
 */