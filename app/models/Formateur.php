<?php

require_once __DIR__ . '/../config/database.php';

class Formateur
{
    public static function all()
    {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM formateurs");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM formateurs WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $db = Database::connect();
        $stmt = $db->prepare("
            INSERT INTO formateurs (nom, prenom, email, telephone, ville, date_naissance)
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        return $stmt->execute([
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['telephone'],
            $data['ville'],
            $data['date_naissance']
        ]);
    }

    public static function update($id, $data)
    {
        $db = Database::connect();
        $stmt = $db->prepare("
            UPDATE formateurs 
            SET nom=?, prenom=?, email=?, telephone=?, ville=?, date_naissance=?
            WHERE id=?
        ");

        return $stmt->execute([
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['telephone'],
            $data['ville'],
            $data['date_naissance'],
            $id
        ]);
    }

    public static function delete($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM formateurs WHERE id=?");
        return $stmt->execute([$id]);
    }
}
