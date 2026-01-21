<?php
// Ajoutez cette ligne pour pouvoir récupérer les détails du cours
require_once __DIR__ . '/../models/Cours.php'; 
require_once __DIR__ . '/../models/Reservation.php';
require_once __DIR__ . '/../models/Category.php';
require_once __DIR__ . '/../models/Formateur.php';
require_once __DIR__ . '/../helpers/Mailer.php';

class ReservationController
{
    // ... vos autres méthodes (index, store, etc.)

    public function create()
    {
        // 1. Vérification de connexion
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?page=login");
            exit;
        }

        // 2. Récupérer l'ID du cours depuis le bouton "Réserver"
        $cours_id = $_GET['cours_id'] ?? null;

        if (!$cours_id) {
            header("Location: index.php?page=produit");
            exit;
        }

        // 3. Récupérer les données du cours pour l'affichage
        $cours = Cours::find($cours_id); 

        if (!$cours) {
            die("Erreur : Ce cours n'existe pas en base de données.");
        }

        // 4. Charger la vue (votre interface avec les boutons PayPal/Stripe)
        require __DIR__ . '/../views/client/reservation_create.php';
    }





    // Dans ReservationController.php

public function processPaypal() {
    $cours_id = $_GET['cours_id'] ?? null;
    $cours = Cours::find($cours_id);
    
    // Ici, on charge une vue spécifique qui contient le SDK PayPal
    require __DIR__ . '/../views/client/payements/paypal.php';
}


}