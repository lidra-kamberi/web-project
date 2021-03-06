<?php
include_once 'userClass.php';

class SimpleUser extends User
{
    public function __construct($email, $username, $psw, $roli)
    {
        parent::__construct($email, $username, $psw, $roli);
    }

    public function setSession($username)
    {
        $_SESSION["roli"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
        $_SESSION['username'] = $username;
    }


   
    public function getEmail()
    {
        return $this->email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPsw()
    {
        return $this->psw;
    }
    public function getRoli()
    {
        return $this->roli;
    }
}