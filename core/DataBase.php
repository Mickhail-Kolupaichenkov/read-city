<?php

namespace Core;

use PDO;

abstract class DataBase 
{
    protected $pdo;

    public function __construct($host = 'localhost', $port = 8889, $dbname = 'readcity', $login = 'root', $password = 'root') {
        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
        
        $this->pdo = new PDO(
            $dsn, $login, $password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }

    public function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    
    public function findAll($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchAll();
    }
    
    public function find($sql, $params = [])
    {
        return $this->query($sql, $params)->fetch();
    }

    public function getValue($sql, $params = [])
    {
        return $this->query($sql, $params)->fetchColumn();
    }
    
    public function execute($sql, $params = [])
    {
        return $this->query($sql, $params)->rowCount();
    }
}