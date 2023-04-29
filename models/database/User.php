<?php 
namespace App\models\database;

class User extends DataBaseModel
{
    protected int $userID;
    protected string $userFirst;
    protected string $userLast;
    protected int $userAdmin = 0;
    protected string $userLogin = "login";
    protected string $userPass = "pass";

    public function __construct()
    {
        $this->table = 'user';
    }
    
    public function set_userID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function set_userFirst($userFirst)
    {
        $this->userFirst = $userFirst;
        return $this;
    }

    public function set_userLast($userLast)
    {
        $this->userLast = $userLast;
        return $this;
    }

    public function set_userAdmin($userAdmin)
    {
        $this->userAdmin = $userAdmin;
        return $this;
    }

    public function set_userLogin($userLogin)
    {
        $this->userLogin = $userLogin;
        return $this;
    }

    public function set_userPass($userPass)
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