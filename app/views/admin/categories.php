<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<h1>Catégories (حِرف)</h1>

<a href="index.php?page=category-create" class="btn">+ Ajouter Catégorie</a>

<table class="table">
    <tr>
        <th>Nom</th>
        <th>Formateur</th>
        <th>Photo</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($categories as $c): ?>
    <tr>
        <td><?= htmlspecialchars($c['nom']) ?></td>
        <td><?= htmlspecialchars($c['formateur_nom']) ?></td>

        <td>
            <?php if (!empty($c['photo'])): ?>
                <img src="uploads/categories/<?= htmlspecialchars($c['photo']) ?>" width="60">
            <?php else: ?>
                —
            <?php endif; ?>
        </td>

        <td>
            <a href="index.php?page=category-edit&id=<?= $c['id'] ?>">✏️</a>
            <a href="index.php?page=category-delete&id=<?= $c['id'] ?>" 
               onclick="return confirm('Supprimer cette catégorie ?')">🗑️</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
