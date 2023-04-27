<?php 
namespace App\models\database;

class DataBaseModel extends DataBaseAccess
{
    protected $table;

    private $dbAccess;

    public function requete(string $sql, array $attributs = null)
    {
        $this->dbAccess = DataBaseAccess::getInstance();

        if($attributs !== null){
            $query = $this->dbAccess->prepare($sql);
            $query->execute($attributs);
            return $query;
        }else{
            return $this->dbAccess->query($sql);
        }
    }

    public function findAll()
    {
        $query = $this->query('SELECT * FROM '. $this->table);
        return $query->fetchAll(); 
    }
}