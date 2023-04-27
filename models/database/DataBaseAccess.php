<?php 
namespace App\models\database;

use PDO;
use PDOException;

class DataBaseAccess extends PDO
{
    private static $instance;

    private const DBHOST = 'localhost';
    private const DBNAME = 'DonkeyStay';
    private const DBUSER = 'root';
    private const DBPASS = '';

    private function __construct()
    {
        $DataSourceName = 'mysql:dbname=' . self::DBNAME . ';host=' . self::DBHOST;

        try{
            parent::__construct($DataSourceName, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public static function getInstance ()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}
