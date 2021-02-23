<?php
require '../dashboard/database.php';
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
include_once 'userController.php';
session_start();
//main
if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['register-btn'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
} else {
    header("Location:../index.php");
}

class LoginLogic
{
    private $username = "";
    private $psw = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->psw = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->psw)) {
            header("Location:../index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->psw)) {
            header('Location:../shop.php');
        } else {
            header("Location:../index.php");
        }
    }

    private function variablesNotDefinedWell($username, $psw)
    {
        if (empty($username) || empty($psw)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $psw)
    {
        $userController = new UserController();
        $user = $userController->getUserByUsername($username);
        
        if ($user == null) return false;
        else if ($psw == $user['psw']) {
            if ($user['roli'] == 1) {
                $obj = new Admin($user['ID'], $user['email'], $user['username'], $user['psw'], $user['roli']);
                $obj->setSession($username);
            } else {
                $obj = new SimpleUser($user['ID'], $user['email'], $user['username'], $user['psw'], $user['roli']);
                $obj->setSession($username);
            }
            return true;
        } else return false;
    }
}

class RegisterLogic
{   
    private $email = "";
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->email = $formData['e-mail'];
        $this->username = $formData['user'];
        $this->userPsw = $formData['pass'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->email, $this->username, $this->userPsw, 0);
        $userController = new UserController();
        $userController->insertUser($user);
        header("Location:../index.php");
    }
}