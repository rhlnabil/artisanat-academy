<?php
class ClientDashboardController
{
    public function index()
    {
        // 🔐 Protection
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'client') {
            header("Location: index.php?page=login");
            exit;
        }

        $client = $_SESSION['user'];

        // مؤقتًا (حتى نربطو DB مزيان)
        $stats = [
            'courses' => 3,
            'reservations' => 2
        ];

        require __DIR__ . '/../views/client/dashboard.php';
    }
}
