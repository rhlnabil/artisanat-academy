<?php

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header("Location: index.php?page=login");
    exit;
}

include __DIR__ . '/../layouts/admin_sidebar.php';
?>



<div class="admin-container">
    <div class="admin-content">

        <h1 class="page-title">Dashboard</h1>

        <!-- CARDS -->
        <div class="dashboard-cards">
            <div class="card">
                <h3>👤 Clients</h3>
                <p>12</p>
            </div>

            <div class="card">
                <h3>📅 Réservations</h3>
                <p>8</p>
            </div>

            <div class="card">
                <h3>🧵 Herfa</h3>
                <p>5</p>
            </div>

            <div class="card">
                <h3>🎓 Cours</h3>
                <p>9</p>
            </div>
        </div>

        <!-- CHARTS -->
        <div class="charts-grid">
            <div class="chart-card">
                <h3>Statistiques générales</h3>
                <canvas id="statsChart"></canvas>
            </div>

            <div class="chart-card">
                <h3>Cours par ville</h3>
                <canvas id="cityChart"></canvas>
            </div>
        </div>

    </div>
</div>

<?php include __DIR__ . '/../layouts/admin_footer.php'; ?>
