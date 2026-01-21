<?php
require_once __DIR__ . '/../config/database.php';

class Category
{
    public static function all()
    {
        $db = Database::connect();
        $stmt = $db->query("
            SELECT categories.*, formateurs.nom AS formateur_nom
            FROM categories
            JOIN formateurs ON categories.formateur_id = formateurs.id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $db = Database::connect();
        $stmt = $db->prepare("
            INSERT INTO categories (nom, description, photo, formateur_id)
            VALUES (?, ?, ?, ?)
        ");
        return $stmt->execute([
            $data['nom'],
            $data['description'],
            $data['photo'],
            $data['formateur_id']
        ]);
    }

    public static function find($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM categories WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($id, $data)
    {
        $db = Database::connect();
        $stmt = $db->prepare("
            UPDATE categories
            SET nom=?, description=?, photo=?, formateur_id=?
            WHERE id=?
        ");
        return $stmt->execute([
            $data['nom'],
            $data['description'],
            $data['photo'],
            $data['formateur_id'],
            $id
        ]);
    }

    public static function delete($id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM categories WHERE id=?");
        return $stmt->execute([$id]);
    }
}
