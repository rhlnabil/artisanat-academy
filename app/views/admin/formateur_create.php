<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<div class="admin-content">
<h1>Ajouter Formateur</h1>

<form method="POST" action="index.php?page=formateur-store">
    <input name="name" placeholder="Nom" required>
    <input name="prenom" placeholder="Prénom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input name="telephone" placeholder="Téléphone">
    <input name="ville" placeholder="Ville">
    <input type="date" name="date_naissance">
    <button>Enregistrer</button>
</form>

</div>

<?php include __DIR__ . '/../layouts/admin_footer.php'; ?>
