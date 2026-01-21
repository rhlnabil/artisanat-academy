<h1>Modifier Formateur</h1>

<form method="POST" action="index.php?page=formateur-update">
<input type="hidden" name="id" value="<?= $formateur['id'] ?>">

<input name="nom" value="<?= $formateur['nom'] ?>">
<input name="prenom" value="<?= $formateur['prenom'] ?>">
<input name="email" value="<?= $formateur['email'] ?>">
<input name="telephone" value="<?= $formateur['telephone'] ?>">
<input name="ville" value="<?= $formateur['ville'] ?>">
<input type="date" name="date_naissance" value="<?= $formateur['date_naissance'] ?>">

<button>Modifier</button>
</form>
