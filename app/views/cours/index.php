<?php include __DIR__ . '/../layouts/header.php'; ?>

<section class="section">
    <h2>Nos Cours</h2>

    <div class="cards">
        <?php foreach ($courses as $c): ?>
            <div class="card">
                <img src="assets/images/<?= $c['image'] ?>">
                <h3><?= ucfirst($c['nom']) ?></h3>
                <p><?= $c['description'] ?></p>

          
                <a href="index.php?page=cours&categorie=ceramique" class="btn-course">
    Visiter le cours
</a>

            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
