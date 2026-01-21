<?php
require_once __DIR__ . '/../models/Client.php';

class ClientController {

    public function index() {
        $clients = Client::all();
        require __DIR__ . '/../views/admin/clients.php';
    }

    public function create() {
        require __DIR__ . '/../views/admin/client_create.php';
    }

public function store()
{
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    Client::create($_POST);
    header("Location: index.php?page=admin-clients");
    exit;
}


    public function edit() {
        $client = Client::find($_GET['id']);
        require __DIR__ . '/../views/admin/client_edit.php';
    }

    public function update() {
        Client::update($_GET['id'], $_POST);
        header("Location: index.php?page=admin-clients");
        exit;
    }

    public function delete() {
        Client::delete($_GET['id']);
        header("Location: index.php?page=admin-clients");
        exit;
    }
public function dashboard()
{
    // حماية: خاص يكون client مسجل
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'client') {
        header("Location: index.php?page=login");
        exit;
    }

    // بيانات client من session
    $client = $_SESSION['user'];

    // إحصائيات مؤقتة (دابا بلا DB)
    $stats = [
        'courses' => 0,
        'reservations' => 0
    ];

    require __DIR__ . '/../views/client/dashboard.php';
}


}
