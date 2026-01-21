<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>


<h1>Modifier Formateur</h1>


<form method="POST"
      action="index.php?page=formateur-update&id=<?= $formateur['id'] ?>">

    <input name="name" value="<?= $formateur['name'] ?>" required>
    <input name="prenom" value="<?= $formateur['prenom'] ?>" required>
    <input type="email" name="email" value="<?= $formateur['email'] ?>" required>
    <input name="telephone" value="<?= $formateur['telephone'] ?>">
    <input name="ville" value="<?= $formateur['ville'] ?>">
    <input type="date" name="date_naissance" value="<?= $formateur['date_naissance'] ?>">
    <button>Mettre à jour</button>
</form>


<?php include __DIR__ . '/../layouts/admin_footer.php'; ?>
