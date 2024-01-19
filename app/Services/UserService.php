<?php
// app/Services/UserService.php
require_once __DIR__ . '/../Models/ORM.php';

class UserService {
    private $orm;

    public function __construct() {
        $this->orm = new ORM();
    }

    public function getAllUsers() {
        return $this->orm->getAll('users');
    }

    public function getUserById($id) {
        return $this->orm->getById('users', $id);
    }

    public function insertUser($data) {
        return $this->orm->insert('users', $data);
    }

    public function updateUser($id, $data) {
        return $this->orm->update('users', $data, "id = $id");
    }

    public function deleteUser($id) {
        return $this->orm->delete('users', "id = $id");
    }

    private function validateUserFields($user) {
        return isset($user['id']) && isset($user['username']);
    }
}
