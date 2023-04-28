<?php 
namespace App\models\database;

class DataBaseModel extends DataBaseAccess
{
    protected $table;

    private $dbAccess;

    public function findAll()
    {
        $query = $this->requete('SELECT * FROM '. $this->table);
        return $query->fetchAll();
    }

    public function findBy(array $criteres)
    {
        $fields = [];
        $values = [];
        foreach ($criteres as $field => $value) {
            $fields[] = "$field = ?" ;
            $values[] = $value;
        }
        $fields = implode(" AND ", $fields);
        $fields = 'SELECT * FROM ' . $this->table . ' WHERE ' . $fields;
        $findBy = $this->requete($fields, $values);
        
        var_dump($values);
        var_dump($fields);
        var_dump($findBy);

        return $findBy->fetchAll();
    }

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
}