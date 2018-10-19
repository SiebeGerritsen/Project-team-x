<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

                        /* SELECT FROM*/

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
        $statement = $this->pdo->prepare("SELECT * FROM day2dayinformation");
        $statement->execute();

        $posts = $statement->fetchALL(PDO::FETCH_ASSOC);
        return $posts;

    }

    function getProfileKids(){
        $statement = $this->pdo->prepare("SELECT * FROM profiles_kids");
        $statement->execute();

        $idKid = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $idKid;
    }


                             /* INSERT INTO */

    public function insertContactInformation($data)
    {
    $statement = $this->pdo->prepare("INSERT INTO `gasthuis`.`contactform` (`fname`, `lname`, `email`, `vraag`) VALUES
          ('{$data['fname']}', '{$data['lname']}', '{$data['email']}', '{$data['vraag']}'); ");
    $statement->execute();
    return $statement->errorInfo(); }
   

    public function insertDescription($data)
    {
        $statement = $this->pdo->prepare("INSERT INTO `gasthuis` . `day2dayinformation` (`description`, `idkid`)
                                                    VALUES ('{$data['description']}','{$data['idkid']}')");
        $statement->execute();

        return $statement->errorInfo();
    }



 }


/*
    public function query($currentDate){
        $statement = $this->pdo->prepare("SELECT title FROM events WHERE date = $currentDate AND status = 1");
        $statement->execute();
    }
*/




/**
 * Created by PhpStorm.
 * User: Siebe
 * Date: 11-10-2018
 * Time: 20:33
 */