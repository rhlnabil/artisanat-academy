<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<h1 class="page-title">Ajouter Cours</h1>

<form method="POST" action="index.php?page=course-store">
    <div class="form-grid">

        <div class="form-group">
            <input type="text" name="titre" placeholder="Titre du cours" required>
        </div>

        <div class="form-group">
            <input type="number" name="duree" placeholder="Durée (en heures)" required>
        </div>

        <div class="form-group">
            <input type="text" name="ville" placeholder="Ville" required>
        </div>

        <div class="form-group">
            <textarea name="description" placeholder="Description"></textarea>
        </div>

        <!-- ✅ SELECT CATEGORY -->
        <div class="form-group">
            <label>Catégorie</label>
            <select name="category_id" required>
                <option value="">-- Choisir une catégorie --</option>
                <?php foreach ($categories as $cat): ?>
                    <option value="<?= $cat['id'] ?>">
                        <?= htmlspecialchars($cat['nom']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- (اختياري) formateur -->
        <div class="form-group">
            <label>Formateur</label>
            <select name="formateur_id" required>
                <?php foreach ($formateurs as $f): ?>
                    <option value="<?= $f['id'] ?>">
                        <?= $f['nom'] . ' ' . $f['prenom'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

    </div>

    <div class="form-actions">
        <button class="btn">Enregistrer</button>
    </div>
</form>
