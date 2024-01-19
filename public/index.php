<?php

// نمایش خطاها
error_reporting(E_ALL);
ini_set('display_errors', 1);


// تعریف کلاس‌ها
require_once __DIR__ . '/../app/Models/ORM.php';
require_once __DIR__ . '/../app/Models/User.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';

// روتینگ
$request_uri = $_SERVER['REQUEST_URI'];

// اگر از / به جای /index.php استفاده می‌شود
if (strpos($request_uri, '/index.php') === 0) {
    $request_uri = substr($request_uri, strlen('/index.php'));
}

switch ($request_uri) {
    case '/':
        $controller = new HomeController();
        $users = $controller->index();
        break;
    case '/insertUser':
        $controller = new HomeController();
        $controller->insertUser();
        break;
    case '/updateUser':
        $controller = new HomeController();
        $controller->updateUser();
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
        break;
}

