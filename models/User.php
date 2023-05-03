<?php 
namespace App\models;

class User extends DataBaseModel
{
    protected int $userID;
    protected string $userFirst;
    protected string $userLast;
    protected string $userEmail;
    protected int $userAdmin = 0;
    protected string $userLogin = "login";
    protected string $userPass = "pass";

    public function __construct()
    {
        $this->table = 'user';
    }
    
    public function set_userID(int $userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function set_userFirst(string $userFirst)
    {
        $this->userFirst = $userFirst;
        return $this;
    }

    public function set_userLast(string $userLast)
    {
        $this->userLast = $userLast;
        return $this;
    }

    public function set_userEmail(string $userEmail)
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    public function set_userAdmin(int $userAdmin)
    {
        $this->userAdmin = $userAdmin;
        return $this;
    }

    public function set_userLogin(string $userLogin)
    {
        $this->userLogin = $userLogin;
        return $this;
    }

    public function set_userPass(string $userPass)
    {
        $this->userPass = $userPass;
        return $this;
    }

    public function get_userID()
    {
        return $this->userID;
    }

    public function get_userFirst()
    {
        return $this->userFirst;
    }

    public function get_userLast()
    {
        return $this->userLast;
    }

    public function get_userEmail()
    {
        return $this->userEmail;
    }

    public function get_userAdmin()
    {
        return $this->userAdmin;
    }

    public function get_userLogin()
    {
        return $this->userLogin;
    }

    public function get_userPass()
    {
        return $this->userPass;
    }
}