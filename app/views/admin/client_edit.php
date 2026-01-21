
<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<main class="admin-content">
<h1>Modifier Client</h1>

<form method="POST" action="index.php?page=client-update&id=<?= $client['id'] ?>">
    <input type="text" name="name" value="<?= $client['name'] ?>" required>
    <input type="email" name="email" value="<?= $client['email'] ?>" required>
    <button class="btn">Mettre à jour</button>
</form>
</main>

<?php include __DIR__ . '/../layouts/admin_footer.php'; ?>