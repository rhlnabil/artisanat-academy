<?php
require_once __DIR__ . '/../config/database.php';

class Reservation
{
    public static function all()
    {
        $db = Database::connect();

        $stmt = $db->query("
            SELECT r.*, 
                   u.email AS client_email
            FROM reservations r
            JOIN users u ON r.client_id = u.id
            ORDER BY r.created_at DESC
        ");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $db = Database::connect();

        $stmt = $db->prepare("
            INSERT INTO reservations
            (client_id, formateur_id, category_id, date_reservation, heure_reservation, commentaire)
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        return $stmt->execute([
            $data['client_id'],
            $data['formateur_id'],
            $data['category_id'],
            $data['date_reservation'],
            $data['heure_reservation'],
            $data['commentaire']
        ]);
    }

    public static function updateStatut($id, $statut)
    {
        $db = Database::connect();

        $stmt = $db->prepare("
            UPDATE reservations SET statut=? WHERE id=?
        ");

        return $stmt->execute([$statut, $id]);
    }
    public static function findWithClient($id)
{
    $db = Database::connect();

    $stmt = $db->prepare("
        SELECT r.*, u.email
        FROM reservations r
        JOIN users u ON r.client_id = u.id
        WHERE r.id = ?
    ");
    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
