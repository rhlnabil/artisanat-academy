<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<h1>📅 Réservations</h1>

<table class="table">
    <tr>
        <th>Client</th>
        <th>Date</th>
        <th>Heure</th>
        <th>Statut</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($reservations as $r): ?>
    <tr>
        <td><?= htmlspecialchars($r['client_email']) ?></td>
        <td><?= $r['date_reservation'] ?></td>
        <td><?= $r['heure_reservation'] ?></td>
        <td><?= $r['statut'] ?></td>
        <td>
            <?php if ($r['statut'] === 'en_attente'): ?>
                <a href="index.php?page=reservation-confirm&id=<?= $r['id'] ?>">✅</a>
                <a href="index.php?page=reservation-cancel&id=<?= $r['id'] ?>">❌</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
