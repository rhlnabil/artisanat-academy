<?php
require_once __DIR__ . '/../config/database.php';

class User
{
    public static function findByEmail($email)
    {
        $db = Database::connection();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // inscription client فقط
    public static function createClient($data)
    {
        $db = Database::connection();

        $check = $db->prepare("SELECT id FROM users WHERE email = ?");
        $check->execute([$data['email']]);
        if ($check->fetch()) {
            return false;
        }

        $stmt = $db->prepare("
            INSERT INTO users (email, password, telephone, ville, role)
            VALUES (?, ?, ?, ?, 'client')
        ");

        return $stmt->execute([
            $data['email'],
            password_hash($data['password'], PASSWORD_DEFAULT),
            $data['telephone'],
            $data['ville']
        ]);
    }
}
