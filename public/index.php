<?php
session_start();

$page = $_GET['page'] ?? 'home';

// =====================
// Controllers
// =====================
require_once __DIR__ . '/../app/controllers/AdminController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/ClientController.php';
require_once __DIR__ . '/../app/controllers/FormateurController.php';
require_once __DIR__ . '/../app/controllers/CoursController.php';
require_once __DIR__ . '/../app/controllers/CategoryController.php';
require_once __DIR__ . '/../app/controllers/ReservationController.php';

switch ($page) {

    // =====================
    // Public
    // =====================
    case 'home':
        require __DIR__ . '/../app/views/home.php';
        break;

    // =====================
    // Auth
    // =====================
    case 'login':
        (new AuthController())->showLogin();
        break;

    case 'do-login':
        (new AuthController())->login();
        break;

    case 'logout':
        (new AuthController())->logout();
        break;

    case 'register':
        require __DIR__ . '/../app/views/auth/register.php';
        break;

    case 'register-store':
        User::createClient($_POST);
        header("Location: index.php?page=login");
        exit;



case 'reservation-create':
        $resController = new ReservationController(); // S'assure que la classe est trouvée
        $resController->create();
        break;




        case 'paypal-payment':
    $resController = new ReservationController();
    $resController->processPaypal();
    break;



    
    // =====================
    // Admin Dashboard
    // =====================
    case 'admin-dashboard':
        (new AdminController())->dashboard();
        break;

    // =====================
    // Clients (Admin)
    // =====================
    case 'admin-clients':
        (new ClientController())->index();
        break;

    case 'client-create':
        (new ClientController())->create();
        break;

    case 'client-store':
        (new ClientController())->store();
        break;

    case 'client-edit':
        (new ClientController())->edit();
        break;

    case 'client-update':
        (new ClientController())->update();
        break;

    case 'client-delete':
        (new ClientController())->delete();
        break;

    // =====================
    // Client Dashboard
    // =====================
    case 'client-dashboard':
        (new ClientController())->dashboard();
        break;

    // =====================
    // Formateurs
    // =====================
    case 'admin-formateurs':
        (new FormateurController())->index();
        break;

    case 'formateur-create':
        (new FormateurController())->create();
        break;

    case 'formateur-store':
        (new FormateurController())->store();
        break;

    case 'formateur-edit':
        (new FormateurController())->edit();
        break;

    case 'formateur-update':
        (new FormateurController())->update();
        break;

    case 'formateur-delete':
        (new FormateurController())->delete();
        break;

    // =====================
    // Courses
    // =====================
    case 'admin-courses':
        (new CoursController())->index();
        break;

    case 'course-create':
        (new CoursController())->create();
        break;

    case 'course-store':
        (new CoursController())->store();
        break;

    case 'course-edit':
        (new CoursController())->edit();
        break;

    case 'course-update':
        (new CoursController())->update();
        break;

    case 'course-delete':
        (new CoursController())->delete();
        break;

    case 'cours':
        (new CoursController())->show();
        break;

    // =====================
    // Categories
    // =====================
    case 'admin-categories':
        (new CategoryController())->index();
        break;

    case 'category-create':
        (new CategoryController())->create();
        break;

    case 'category-store':
        (new CategoryController())->store();
        break;

    case 'category-edit':
        (new CategoryController())->edit();
        break;

    case 'category-update':
        (new CategoryController())->update();
        break;

    case 'category-delete':
        (new CategoryController())->delete();
        break;

    // =====================
    // Reservations
    // =====================
    case 'admin-reservations':
        (new ReservationController())->index();
        break;

    case 'reservation-create':
        (new ReservationController())->create();
        break;

    case 'reservation-store':
        (new ReservationController())->store();
        break;

    case 'reservation-confirm':
        (new ReservationController())->confirm();
        break;

    case 'reservation-cancel':
        (new ReservationController())->cancel();
        break;

    

    case 'chat':
        require_once __DIR__ . '/../app/views/chat.php';
        break;

    // =====================
    // 404
    // =====================
    default:
        http_response_code(404);
        echo "Page not found";
        break;
}
