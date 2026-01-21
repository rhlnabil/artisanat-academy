
<?php include __DIR__ . '/../layouts/header.php'; ?>

<form method="POST" action="index.php?page=do-login">

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>

    <button class="btn">Connexion</button>

    <p>
        Pas encore inscrit ?
        <a href="index.php?page=register">Créer un compte</a>
    </p>
</form>

<?php if (!empty($error)): ?>
    <p style="color:red; text-align:center"><?= $error ?></p>
<?php endif; ?>
