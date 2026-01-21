<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>
<h1 class="page-title">Cours</h1>

<a href="index.php?page=course-create" class="btn">➕ Ajouter Cours</a>

<div class="table-wrapper" style="margin-top:20px;">
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Durée</th>
            <th>Ville</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cours as $c): ?>
        <tr>
            <td><?= htmlspecialchars($c['titre']) ?></td>
            <td><?= htmlspecialchars($c['duree']) ?></td>
            <td><?= htmlspecialchars($c['ville']) ?></td>
            <td class="actions">
                <a href="index.php?page=course-edit&id=<?= $c['id'] ?>">✏️</a>
                <a href="index.php?page=course-delete&id=<?= $c['id'] ?>" onclick="return confirm('Supprimer ?')">🗑️</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
