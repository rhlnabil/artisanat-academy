<?php include __DIR__ . '/../layouts/header.php'; ?>
<div class="cards">
<?php foreach ($cours as $c): ?>
    <div class="card">

        <img 
            src="<?= !empty($c['categorie_photo']) 
                ? 'uploads/categories/' . htmlspecialchars($c['categorie_photo']) 
                : 'assets/images/default-course.jpg' ?>"
            class="course-img"
            alt="<?= htmlspecialchars($c['titre']) ?>"
        >

        <h3><?= htmlspecialchars($c['titre']) ?></h3>
        <p><?= htmlspecialchars($c['description']) ?></p>

        <p>📚 Catégorie : <strong><?= htmlspecialchars($c['categorie_nom']) ?></strong></p>
        <p>⏱ Durée : <?= htmlspecialchars($c['duree']) ?> h</p>
        <p>📍 Ville : <?= htmlspecialchars($c['ville']) ?></p>

        <a href="index.php?page=reservation-create&cours_id=<?= $c['id'] ?>" class="btn">
            Réserver
        </a>
    </div>
<?php endforeach; ?>
</div>
