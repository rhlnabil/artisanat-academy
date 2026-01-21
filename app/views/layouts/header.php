<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dar Lmaalem</title>

    <link rel="stylesheet" href="http://localhost/artisan-academy/public/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/artisan-academy/public/assets/css/home.css">
</head>
<body>

<header class="main-header">
    <div class="logo">
        <h2>Dar Lmaalem</h2>
    </div>

    <!-- ===== MAIN NAV ===== -->
    <nav class="nav-links">
<a href="index.php?page=home#home">Accueil</a>
<a href="index.php?page=home#about">À propos</a>
<a href="index.php?page=home#cours">Cours</a>
<a href="index.php?page=home#reservation">Réservation</a>
<a href="index.php?page=home#inscription">Inscription</a>
<a href="index.php?page=home#contact">Contact</a>


    </nav>

    <!-- ===== AUTH NAV ===== -->
    <div class="nav-auth">
        <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'client'): ?>
            <a href="index.php?page=client-dashboard" class="btn-link">Dashboard</a>
            <a href="index.php?page=reservation-create" class="btn-primary">Réserver</a>
            <a href="index.php?page=logout" class="btn-link">Déconnexion</a>

        <?php elseif (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin'): ?>
            <a href="index.php?page=admin-dashboard" class="btn-primary">Admin</a>
            <a href="index.php?page=logout" class="btn-link">Déconnexion</a>

        <?php else: ?>
            <a href="index.php?page=login" class="btn-primary">Connexion</a>
        <?php endif; ?>
    </div>
</header>
