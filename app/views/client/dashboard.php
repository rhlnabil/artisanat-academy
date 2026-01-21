<?php include __DIR__ . '/../layouts/header.php'; ?>

<div class="client-dashboard">

    <h1>Bienvenue 👋 <?= htmlspecialchars($client['email']) ?></h1>

    <div class="client-stats">
        <div class="card">
            <h3>Mes réservations</h3>
            <p><?= $stats['reservations'] ?></p>
        </div>

        <div class="card">
            <h3>Ville</h3>
            <p><?= $client['ville'] ?? '—' ?></p>
        </div>
    </div>

    <div class="client-info">
        <h2>Mes informations</h2>

        <table class="info-table">
            <tr>
                <th>Email</th>
                <td><?= htmlspecialchars($client['email']) ?></td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td><?= $client['telephone'] ?? '—' ?></td>
            </tr>
            <tr>
                <th>Date d’inscription</th>
                <td><?= $client['created_at'] ?? '—' ?></td>
            </tr>
        </table>
    </div>

    <a href="index.php?page=reservation-create" class="btn">📅 Réserver</a>
</div>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
