<?php include __DIR__ . '/../layouts/header.php'; ?>
<form method="POST" action="index.php?page=register-store">

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="text" name="telephone" placeholder="Téléphone">
    <input type="text" name="ville" placeholder="Ville">

    <!-- role مخفي -->
    <input type="hidden" name="role" value="client">

    <button class="btn">Créer mon compte</button>
</form>
