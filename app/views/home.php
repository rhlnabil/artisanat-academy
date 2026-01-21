<?php include __DIR__ . '/layouts/header.php'; ?>

<!-- ================= HERO ================= -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1>Artisan Stylish Decor</h1>
        <p>Découvrez l’artisanat marocain authentique</p>
        <a href="index.php?page=home#reservation" class="btn-primary">
            Réserver maintenant
        </a>
    </div>
</section>

<!-- ================= ABOUT ================= -->
<section id="about" class="section about">
    <div class="about-container">

        <!-- TEXT -->
        <div class="about-text">
            <h2>À propos de nous</h2>
            <p>
                Dar Lmaalem est une plateforme dédiée à la valorisation
                des artisans et au partage du savoir-faire traditionnel
                marocain à travers des cours et ateliers.
            </p>
        </div>

        <!-- IMAGE -->
        <div class="about-image">
            <img src="assets/images/about.jpg" alt="Artisanat marocain">
        </div>

    </div>
</section>


<!-- ================= COURSES ================= -->
<section id="cours" class="section courses">
    <h2>Nos Cours</h2>

    <div class="cards">
        <div class="card">
            <img src="<?= $baseUrl ?>assets/images/ceramique.jpg" alt="Céramique">
            <h3>Céramique</h3>
            <p>Apprenez l’art de la poterie avec des maîtres artisans.</p>
            <a href="index.php?page=cours&categorie=ceramique" class="btn-course">
        Visiter le cours
    </a>
        </div>

        <div class="card">
            <img src="<?= $baseUrl ?>assets/images/bois.jpg" alt="Bois">
            <h3>Travail du bois</h3>
            <p>Découvrez les techniques traditionnelles du bois.</p>
            <a href="index.php?page=cours&categorie=ceramique" class="btn-course">
        Visiter le cours
    </a>
        </div>

        <div class="card">
            <img src="<?= $baseUrl ?>assets/images/tissage.jpg" alt="Tissage">
            <h3>Tissage</h3>
            <p>Initiez-vous au tissage artisanal marocain.</p>
            <a href="index.php?page=cours&categorie=ceramique" class="btn-course">
        Visiter le cours
    </a>
        </div>
    </div>
</section>

<!-- ================= RESERVATION ================= -->
<section id="reservation" class="section reservation">
    <h2>Réservation</h2>
    <p>Réservez votre place pour un atelier</p>

    <a href="index.php?page=reservation-create" class="btn-primary">
        Faire une réservation
    </a>
</section>

<!-- ================= INSCRIPTION ================= -->
<section id="inscription" class="section inscription">
    <h2>Inscription</h2>
    <p>Rejoignez Dar Lmaalem et découvrez l’artisanat marocain</p>

    <a href="index.php?page=login" class="btn-secondary">
        Créer un compte
    </a>
</section>

<!-- ================= CONTACT ================= -->
<section id="contact" class="section contact">
    <h2>Contact</h2>

    <form>
        <input type="text" placeholder="Nom" required>
        <input type="email" placeholder="Email" required>
        <textarea placeholder="Message"></textarea>
        <button type="submit">Envoyer</button>
    </form>
</section>

<!-- Floating test button for quick access to chat page -->
<a href="index.php?page=chat"
   style="position: fixed; bottom: 30px; right: 30px; z-index: 1000; 
          width: 70px; height: 70px; background: #6366f1; color: white; 
          border-radius: 50%; display: flex; align-items: center; justify-content: center; 
          box-shadow: 0 6px 20px rgba(0,0,0,0.3); text-decoration: none; font-size: 28px;">
    💬
</a>

<?php include __DIR__ . '/layouts/footer.php'; ?>

/* ====== HERO SECTION ====== */
