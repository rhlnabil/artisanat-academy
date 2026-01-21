<?php
require_once __DIR__ . '/../config/database.php';

class Cours
{
public static function all()
{
    $db = Database::connection();
    return $db->query("
        SELECT 
            cours.*,
            categories.nom AS categorie_nom,
            categories.photo AS categorie_photo
        FROM cours
        LEFT JOIN categories ON cours.category_id = categories.id
    ")->fetchAll(PDO::FETCH_ASSOC);
}


public static function findByCategory($categorie)
{
    $db = Database::connection();
    $stmt = $db->prepare("
        SELECT 
            cours.*,
            categories.nom AS categorie_nom,
            categories.photo AS categorie_photo
        FROM cours
        JOIN categories ON cours.category_id = categories.id
        WHERE categories.nom = ?
    ");
    $stmt->execute([$categorie]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



    public static function find($id)
    {
        $db = Database::connection();
        $stmt = $db->prepare("SELECT * FROM cours WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

   public static function create($data)
{
    $db = Database::connection();
    $stmt = $db->prepare("
        INSERT INTO cours (titre, description, duree, ville, category_id, formateur_id)
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $data['titre'],
        $data['description'],
        $data['duree'],
        $data['ville'],
        $data['category_id'],
        $data['formateur_id']
    ]);
}


    public static function update($id, $data)
    {
        $db = Database::connection();
        $stmt = $db->prepare("
            UPDATE cours SET
                titre = ?,
                description = ?,
                duree = ?,
                ville = ?,
                formateur_id = ?
            WHERE id = ?
        ");
        $stmt->execute([
            $data['titre'],
            $data['description'],
            $data['duree'],
            $data['ville'],
            $data['formateur_id'],
            $id
        ]);
    }

    public static function delete($id)
    {
        $db = Database::connection();
        $stmt = $db->prepare("DELETE FROM cours WHERE id = ?");
        $stmt->execute([$id]);
    }


}
