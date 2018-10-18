<?php
/**
 Realising a PDO connection to run
 this contactpage local.
 Made for Group X.
 */

class Connection
{
    public static function make($config)
    {
        /* Making a PDO connection
        The database setup is made
        in a config.php file(!) */

        /* Using a try and catch to
        make the PDO connection to the
        config, and if it fails it will
        catch and give an error message */
        try {
                return new PDO(
                    $config['connection'] . ';dbname=' . $config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']

                );
        } catch (PDOException $e) {
            die ($e->getMessage());

        }
    }
}