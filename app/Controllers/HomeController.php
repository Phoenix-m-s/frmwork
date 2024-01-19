<?php


class HomeController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        // در کنترلر
        include __DIR__ . '/../Views/Templates/home.php';

    }

    public function insertUser()
    {
        $userId = $this->user->insert(['username' => 'newUser', 'email' => 'newuser@example.com', 'password' => 'newpassword']);

        $this->showAlert('User inserted successfully!');
        $this->redirectToHome();
    }

    public function updateUser()
    {
        // فرضاً $userId از ورودی یا دیگر منابع دریافت شده است
        $userId = 1;

        $this->user->update($userId, ['username' => 'updatedUser', 'email' => 'updated@example.com']);

        $this->showAlert('User updated successfully!');
        $this->redirectToHome();
    }

    public function showAlert($message)
    {
        echo "<script>alert('$message');</script>";
    }

    public function redirectToHome()
    {
        header('Location: /');
        exit;
    }
}