<?php
abstract class User
{
    protected $email;
    protected $username;
    protected $psw;
    protected $roli;

    function __construct($email, $username, $psw, $roli)
    {
        $this->email = $email;
        $this->username = $username;
        $this->psw = $psw;
        $this->roli = $roli;
    }

    abstract protected function setSession($username);
}