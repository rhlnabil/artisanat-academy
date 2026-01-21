<?php
require_once __DIR__ . '/../config/database.php';

class Client
{
    // =====================
    // ADMIN : all clients
    // =====================
    public static function all()
    {
        $db = Database::connection();
        $stmt = $db->query("SELECT * FROM users WHERE role='client'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // =====================
    // ADMIN : create client
    // =====================
    public static function create($data)
    {
        $db = Database::connection();

        $stmt = $db->prepare("
            INSERT INTO users
            (name, prenom, email, password, telephone, ville, date_naissance, role)
            VALUES (?, ?, ?, ?, ?, ?, ?, 'client')
        ");

        return $stmt->execute([
            $data['name'],
            $data['prenom'],
            $data['email'],
            password_hash($data['password'], PASSWORD_DEFAULT),
            $data['telephone'],
            $data['ville'],
            $data['date_naissance']
        ]);
    }

    // =====================
    // LOGIN
    // =====================
    public static function findByEmail($email)
    {
        $db = Database::connection();
        $stmt = $db->prepare("SELECT * FROM users WHERE email=? AND role='client'");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // =====================
    // CLIENT dashboard
    // =====================
    public static function find($id)
    {
        $db = Database::connection();
        $stmt = $db->prepare("SELECT * FROM users WHERE id=? AND role='client'");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function countReservations($clientId)
    {
        $db = Database::connection();
        $stmt = $db->prepare("SELECT COUNT(*) FROM reservations WHERE client_id=?");
        $stmt->execute([$clientId]);
        return $stmt->fetchColumn();
    }
}
