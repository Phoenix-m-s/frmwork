<?php


class Database
{
    private $host = 'localhost';
    private $dbname = 'frmwork';
    private $username = 'root';
    private $password = '';

    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    public function fetchAll($query, $params = [])
    {
        $stmt = $this->execute($query, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetch($query, $params = [])
    {
        $stmt = $this->execute($query, $params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}
