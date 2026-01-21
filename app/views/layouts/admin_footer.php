</div> <!-- admin-layout -->

<footer class="admin-footer">
    © 2026 Dar Lmaalem – Admin Dashboard
</footer>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
/* ===== BAR CHART ===== */
const statsCtx = document.getElementById('statsChart');

new Chart(statsCtx, {
    type: 'bar',
    data: {
        labels: ['Clients', 'Réservations', 'Herfa', 'Cours'],
        datasets: [{
            label: 'Total',
            data: [12, 8, 5, 9],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

/* ===== PIE CHART ===== */
const cityCtx = document.getElementById('cityChart');

new Chart(cityCtx, {
    type: 'pie',
    data: {
        labels: ['Casablanca', 'Rabat', 'Fès', 'Marrakech'],
        datasets: [{
            data: [4, 2, 1, 2]
        }]
    },
    options: {
        responsive: true
    }
});
</script>

</body>
</html>
