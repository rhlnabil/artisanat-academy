
<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<div class="admin-content">

    <h1 class="page-title">➕ Ajouter Client</h1>

<div class="form-container">
    <form method="POST" action="index.php?page=client-store">

        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" required>
        </div>

        <div class="form-group">
            <label>Prénom</label>
            <input type="text" name="prenom" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Téléphone</label>
            <input type="text" name="telephone">
        </div>

        <div class="form-group">
            <label>Ville</label>
            <input type="text" name="ville">
        </div>

        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="date_naissance">
        </div>

        <button class="btn btn-primary">Enregistrer</button>
    </form>
</div>


<?php include __DIR__ . '/../layouts/admin_footer.php'; ?>
