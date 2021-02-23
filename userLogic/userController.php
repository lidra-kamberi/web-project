<?php

class UserController extends DatabaseConfig
{

    private $connection;
    private $query;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }


    public function getUserByID($userId)
    {
        
        $this->query = "SELECT * FROM users WHERE ID=$userId";
        $statement = $this->connection->query($this->query);
        $user = $statement->fetch_all(MYSQLI_ASSOC)[0];
        return $user;
    } 

    public function editUser(\SimpleUser $user, $userId)
    {
        $this->query = "UPDATE users SET email = ?, username = ?, psw = ?, roli = ? WHERE ID = $userId ";
        $statement = $this->connection->prepare($this->query);
        $statement->bind_param("ssss", $user->getEmail(), $user->getUsername(), $user->getPsw(), $user->getRoli());
        $statement->execute();
    }


    public function getUserByUsername($username)
    {
        $this->query = "SELECT * FROM `users` WHERE `username` ='$username'";
        $statement = $this->connection->query($this->query);
        $result = $statement->fetch_all(MYSQLI_ASSOC)[0];
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "SELECT * FROM users";
        if ($this->connection != NULL) {
            $result = $this->connection->query($this->query);

            $users = $result->fetch_all(MYSQLI_ASSOC);

            return $users;
        }
        return NULL;
    }

    public function insertUser(\SimpleUser $user)
        {
            $this->query = "INSERT INTO users(email, username, psw, roli) VALUES (?, ?, ?, ?)";
            $statement = $this->connection->prepare($this->query);
            $statement->bind_param("ssss", $user->getEmail(), $user->getUsername(), $user->getPsw(), $user->getRoli());
            $statement->execute();
        }


   
}