<?php

class Database {
    public $pdo;
    function __construct(){
        $userName = 'khayrul';
        $hostName = 'localhost';
        $password = 'Password';
        $dbName = 'php_curd_pdo';

        try {
            $this->pdo = new PDO("mysql:dbname=$dbName;host=$hostName", $userName, $password);
        
        } catch (PDOException $e) {
            echo "Database Connection Falied!". $e->getMessage();
        }
    }
}