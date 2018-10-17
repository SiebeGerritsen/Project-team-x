<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define class for output
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchALL(PDO::FETCH_CLASS);
    }

    function getPublishedPosts()
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define class for output
         */
        $statement = $this->pdo->prepare("SELECT * FROM day2dayinformation");;
        $statement->execute();

        $posts = $statement->fetchALL(PDO::FETCH_ASSOC);
        return $posts;

    }



/*
    public function query($currentDate){
        $statement = $this->pdo->prepare("SELECT title FROM events WHERE date = $currentDate AND status = 1");
        $statement->execute();
    }
*/


}

/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 20:33
 */