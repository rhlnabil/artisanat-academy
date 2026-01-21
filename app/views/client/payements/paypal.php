<?php include __DIR__ . '/../../layouts/header.php'; ?>

<div class="container" style="max-width: 900px; margin: 60px auto; display: flex; gap: 30px; background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
    
    <div style="flex: 1; border-right: 1px solid #eee; padding-right: 30px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" width="120" style="margin-bottom: 20px;">
        <h2 style="color: #2c3e50;">Détails de la réservation</h2>
        <div style="margin-top: 20px; padding: 20px; background: #fdfaf7; border-radius: 10px;">
            <p><strong>Cours :</strong> <?= htmlspecialchars($cours['titre']) ?></p>
            <p><strong>Prix original :</strong> <?= number_format($cours['prix'], 2) ?> DH</p>
            <hr>
            <?php 
                $exchangeRate = 10; 
                $amountInUSD = number_format($cours['prix'] / $exchangeRate, 2, '.', ''); 
            ?>
            <p style="font-size: 18px; color: #666;">Montant converti : <strong><?= $amountInUSD ?> USD</strong></p>
            <p style="font-size: 12px; color: #aaa;">(Taux appliqué : 1 USD = 10 MAD)</p>
        </div>
    </div>

    <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h4 style="margin-bottom: 20px;">Paiement Sécurisé</h4>
        <div id="paypal-button-container" style="width: 100%;"></div>
    </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=AfiM79xFsftJaMdDSAEBUOLUGbv5w8ZZr_1_mNACl3EQW9GImKreJpXLRcCx-x5YqLUY4OGY1AjV0J3U&currency=USD"></script>

<script>
    paypal.Buttons({
        style: {
            layout: 'vertical',
            color:  'gold',
            shape:  'rect',
            label:  'paypal'
        },

        // 1. Création de la commande (Conversion MAD -> USD)
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    description: "Réservation : <?= htmlspecialchars($cours['titre']) ?>",
                    amount: {
                        currency_code: 'USD',
                        value: '<?= $amountInUSD ?>' // Utilise la variable PHP calculée plus haut
                    }
                }]
            });
        },

        // 2. Capture du paiement après validation
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                // Ici, on simule ton handleApprove
                console.log('Capture result', orderData);
                
                alert('✅ Paiement PayPal réussi ! Merci pour votre achat.');
                
                // Redirection vers le dashboard ou une page de succès
                window.location.href = "index.php?page=client-dashboard";
            });
        },

        // 3. Gestion des erreurs
        onError: function(err) {
            console.error('Erreur PayPal :', err);
            alert('❌ Le paiement PayPal a échoué. Veuillez réessayer.');
        }
    }).render('#paypal-button-container');
</script>

<?php include __DIR__ . '/../../layouts/footer.php'; ?>