<?php 
namespace App\models\database;

class User extends DataBaseModel
{
    private $userID;
    private $userFirst;
    private $userLast;
    private $userAdmin;
    private $userLogin;
    private $userPass;

    public function __construc()
    {
        $this->table = 'user';
    }
}