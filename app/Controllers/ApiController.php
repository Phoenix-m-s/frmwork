<?php
// app/Controllers/ApiController.php
require_once __DIR__ . '/../Services/UserService.php';
require_once __DIR__ . '/../Response.php';

class ApiController {
    private $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function getAllUsers() {
        $users = $this->userService->getAllUsers();
        Response::json($users);
    }

    public function getUserById($id) {
        $user = $this->userService->getUserById($id);

        if ($user) {
            Response::json($user);
        } else {
            Response::error('User not found', 404);
        }
    }

    public function insertUser($data) {
        if ($this->userService->insertUser($data)) {
            Response::json(['message' => 'User Inserted']);
        } else {
            Response::error('Error Inserting User');
        }
    }

    public function updateUser($id, $data) {
        if ($this->userService->updateUser($id, $data)) {
            Response::json(['message' => 'User Updated']);
        } else {
            Response::error('Error Updating User');
        }
    }

    public function deleteUser($id) {
        if ($this->userService->deleteUser($id)) {
            Response::json(['message' => 'User Deleted']);
        } else {
            Response::error('Error Deleting User');
        }
    }
}
