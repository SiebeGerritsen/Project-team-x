<?php

class Connection
{
    public static function make($config)
    {
        // Maken van database koppeling met PDO()
        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}



/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 14:41
 */