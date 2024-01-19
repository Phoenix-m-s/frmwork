<?php
require_once 'Database.php';
class ORM
{
    protected $table;
    protected $primaryKey = 'id';

    public function insert($data)
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $query = "INSERT INTO {$this->table} ($columns) VALUES ($values)";
        $params = array_values($data);

        $db = new Database();
        $db->execute($query, $params);

        return $db->lastInsertId();
    }

    public function update($id, $data)
    {
        $setClause = implode(', ', array_map(function ($key) {
            return "$key=?";
        }, array_keys($data)));

        $query = "UPDATE {$this->table} SET $setClause WHERE {$this->primaryKey}=?";
        $params = array_merge(array_values($data), [$id]);

        $db = new Database();
        $db->execute($query, $params);
    }

    public function findById($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$this->primaryKey}=?";
        $params = [$id];

        $db = new Database();
        return $db->fetch($query, $params);
    }

    public function findAll()
    {
        $query = "SELECT * FROM {$this->table}";

        $db = new Database();
        return $db->fetchAll($query);
    }
}
