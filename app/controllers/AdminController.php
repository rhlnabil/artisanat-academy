<?php

class AdminController
{
   public function dashboard()
    {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header("Location: index.php?page=login");
            exit;
        }

        require __DIR__ . '/../views/admin/dashboard.php';
    }
    public function clients()
    {
        require __DIR__ . '/../views/admin/clients.php';
    }

    public function reservations()
    {
        require __DIR__ . '/../views/admin/reservations.php';
    }

    public function categories()
    {
        require __DIR__ . '/../views/admin/categories.php';
    }

    public function courses()
    {
        require __DIR__ . '/../views/admin/courses.php';
    }
}
