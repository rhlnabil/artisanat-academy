<?php include __DIR__ . '/../layouts/admin_sidebar.php'; ?>

<div class="admin-container">

    <!-- SIDEBAR -->


    <!-- CONTENT -->
    <div class="admin-content">

        <h1>Clients</h1>

        <a href="index.php?page=client-create" class="btn-add">
            ➕ Ajouter Client
        </a>

        <table class="admin-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><?= $client['name'] ?></td>
                        <td><?= $client['email'] ?></td>
                        <td>
                            ✏️
                            🗑️
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<?php include __DIR__ . '/../layouts/admin_footer.php'; ?>
