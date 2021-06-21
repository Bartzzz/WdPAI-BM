<?php

require_once 'config.php';

class Database
{
    private $username;
    private $password;
    private $connection;
    private $database;

    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->connection = CONNECTION;
        $this->database = DATABASE;
    }

    public function connect()
    {
        try
        {
            $conn = new PDO($this->connection, $this->username.$this->database, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        }
        catch (PDOException $e)
        {
            print("Error connecting to SQL Server.");
            die(print_r($e));
        }        
    }
}