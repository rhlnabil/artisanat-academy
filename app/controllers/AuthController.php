<?php
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    public function showLogin()
    {
        require __DIR__ . '/../views/auth/login.php';
    }

    public function login()
    {
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        // =====================
        // Admin Login (Hardcoded)
        // =====================
        if ($email === 'admin@gmail.com' && $password === '1234') {
            $_SESSION['user'] = [
                'id'    => 0,
                'email' => 'admin@gmail.com',
                'role'  => 'admin'
            ];

            header("Location: index.php?page=admin-dashboard");
            exit;
        }

        // =====================
        // Client Login (DB)
        // =====================
        $user = User::findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id'    => $user['id'],
                'email' => $user['email'],
                'role'  => 'client'
            ];

            header("Location: index.php?page=client-dashboard");
            exit;
        }

        // =====================
        // Error
        // =====================
        $error = "Email ou mot de passe incorrect";
        require __DIR__ . '/../views/auth/login.php';
    }

    public function logout()
    {
        session_destroy();
        header("Location: index.php?page=login");
        exit;
    }
}
