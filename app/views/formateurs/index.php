<h1>Formateurs</h1>

<a href="index.php?page=formateur-create" class="btn-add">+ Ajouter Formateur</a>

<table class="admin-table">
<tr>
    <th>Nom</th>
    <th>Email</th>
    <th>Ville</th>
    <th>Actions</th>
</tr>

<?php foreach ($formateurs as $f): ?>
<tr>
    <td><?= $f['nom'] ?> <?= $f['prenom'] ?></td>
    <td><?= $f['email'] ?></td>
    <td><?= $f['ville'] ?></td>
    <td>
        <a href="index.php?page=formateur-edit&id=<?= $f['id'] ?>">✏️</a>
        <a href="index.php?page=formateur-delete&id=<?= $f['id'] ?>" onclick="return confirm('Supprimer ?')">🗑️</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
