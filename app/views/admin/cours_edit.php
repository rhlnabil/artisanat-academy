<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>


<form method="POST" 
      action="index.php?page=cours-update&id=<?= $cours['id'] ?>" 
      class="form-card">

    <div class="form-grid">
        <div class="form-group">
            <input type="text" name="titre" value="<?= $cours['titre'] ?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="duree" value="<?= $cours['duree'] ?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="ville" value="<?= $cours['ville'] ?>" required>
        </div>

        <div class="form-group">
            <textarea name="description" required><?= $cours['description'] ?></textarea>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn">Mettre à jour</button>
    </div>
</form>
