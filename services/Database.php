<?php


//TODO: Add foreign key restraints between customers / cars / tasks. Ensure that cascading deletion is possible
//TODO: (if you delete a customer, their cars and associated tasks should be deleted as well)

class Database
{
    public $db;

    public function __construct()
    {
        //TODO; Als login niet werkt moet de app een waarschuwing weergeven en niet crashen
        try {
            $this->db = new PDO('mysql:host=localhost:3306;dbname=intake', 'root', 'c0nn3ct');
        } catch (Exception $e) {
            echo $e->getMessage();
            die;
        }
    }

    //TODO: Make SQL queries safe by using parametrized queries (is a part of PDO)
    public function getAllRows($sql)
    {
        $rows = [];
        foreach ($this->db->query($sql) as $row) {
            $rows[] = $row;
        }
        return $rows;
    }

    //TODO: Make SQL queries safe by using parametrized queries (is a part of PDO)
    public function execQuery($sql)
    {
        $count = $this->db->exec($sql);
        return $count;
    }

}