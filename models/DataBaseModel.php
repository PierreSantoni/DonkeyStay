<?php 
namespace App\models;

abstract class DataBaseModel extends DataBaseAccess
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
        return $findBy->fetchAll();
    }

    public function findByID(int $id)
    {
        return $this->requete("SELECT * FROM {$this->table} WHERE {$this->table}id = $id")->fetch();
    }

    /* Useless mais cool
    public function findRezaDetails(int $userID = null)
    {
        $rezaDetails = "SELECT * FROM reservation JOIN user ON reservation.userID = user.userID JOIN room ON reservation.roomID = room.roomID JOIN hotel ON room.hotelID = hotel.hotelID";
        if(!is_null($userID)){
            $rezaDetails .= " WHERE reservation.userID = ".$userID;
            return $this->requete($rezaDetails)->fetch();
        }
        return $this->requete($rezaDetails)->fetchAll();
    }
    */

    public function create(DataBaseModel $dbModel)
    {
        $fields = [];
        $nbValues = [];
        $values = [];
        foreach ($dbModel as $field => $value) {
            if($field !== 'dbAccess' && $field !== 'table' && $value !== null){
                $fields[] = "`$field`";
                $nbValues[] = "?";
                $values[] = $value;
            }
        }
        $fields = implode(", ", $fields);
        $nbValues = implode(", ", $nbValues);
        $create = 'INSERT INTO ' . $this->table . ' (' . $fields . ') VALUES (' . $nbValues . ')';
        return $this->requete($create, $values);
    }
    
    public function update(int $tableID, DataBaseModel $dbModel)
    {
        $fields = [];
        $values = [];
        foreach ($dbModel as $field => $value){
            if($field !== 'dbAccess' && $field !== 'table' && $value !== null){
                $fields[] = "$field = ?" ;
                $values[] = $value;
            }
        }
        $values[] = $tableID;
        $fields = implode(", ", $fields);
        $fields = 'UPDATE ' . $this->table . ' SET ' . $fields . ' WHERE ' . $this->table . 'ID = ?';
        $update = $this->requete($fields, $values);
        return $update;
    }

    public function delete(int $id)
    {
        $id = [$id];
        $delete = "DELETE FROM " . $this->table . " WHERE " . $this->table . 'ID = ?';
        $delete = $this->requete($delete,$id);
        return $delete;
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

    // hydrater un objet en récupérant les données d'un tableau pour les utiliser avec les setters.
    public function hydrate(array $attributs)
    {
        foreach ($attributs as $key => $value) {
            $setter = 'set_' . $this->table . $key;
            if(method_exists($this, $setter)){
                $this->$setter($value);
            }
        }
        return $this;
    }
}