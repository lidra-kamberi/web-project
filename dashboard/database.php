<?php

class DatabaseConfig
{
    private $connection;
    
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "h-skincare";

    private function createConnection() 
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->databaseName);
    }

    protected function getConnection()
    {
        $this->createConnection();
        return $this->connection;
    }

}
       
?>