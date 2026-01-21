<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<form action="index.php?page=category-store" 
      method="POST" 
      enctype="multipart/form-data"
      class="form">

    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" required>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="photo" accept="image/*">
    </div>

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

    <button type="submit" class="btn">Enregistrer</button>
</form>
