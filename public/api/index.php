<?php

// public/api/index.php

require_once __DIR__ . '/../../app/Controllers/ApiController.php';

$apiController = new ApiController();

$routes = [
    '/users' => 'getAllUsers',
    '/user/{id}' => 'getUserById',
    '/insert-user' => 'insertUser',
    '/update-user/{id}' => 'updateUser',
    '/delete-user/{id}' => 'deleteUser',
];

foreach ($routes as $route => $method) {
    if ($_SERVER['REQUEST_URI'] === $route) {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && method_exists($apiController, $method)) {
            call_user_func([$apiController, $method]);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && method_exists($apiController, $method)) {
            // Handle POST requests if needed
        } else {
            echo 'Invalid Request Method';
        }
        exit;
    }
}

echo 'Not Found';
