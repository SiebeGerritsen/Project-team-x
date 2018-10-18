<?php
/**
 * Created by PhpStorm.
 * User: Smit-
 * Date: 17-10-2018
 * Time: 12:25
 */

/* Query maken om ingevoerde informatie op contactpagina te verwerken */
class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


public function insertContactInformation($data)
{
    $statement = $this->pdo->prepare("INSERT INTO `gezinshuis`.`contactform` (`fname`, `lname`, `email`, `vraag`) VALUES
          ('{$data['fname']}', '{$data['lname']}', '{$data['email']}', '{$data['vraag']}'); ");
    $statement->execute();
    return $statement->errorInfo(); }
}