<?php include __DIR__ . '/../layouts/header.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

<section class="container" style="padding: 100px 20px; font-family: 'Plus Jakarta Sans', sans-serif; background: #fafafa;">
    
    <div style="text-align: center; margin-bottom: 60px;">
        <h2 style="font-size: 42px; font-weight: 800; color: #1a1a1a; letter-spacing: -1px; margin-bottom: 10px;">
            Finaliser la réservation
        </h2>
        <p style="color: #666; font-size: 18px;">Une étape de plus vers votre nouvelle passion.</p>
    </div>

    <div style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center; align-items: flex-start;">
        
        <div style="flex: 1; min-width: 320px; max-width: 550px; background: white; border-radius: 24px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.04); border: 1px solid #f0f0f0;">
            <div style="position: relative;">
                <img src="assets/img/<?= !empty($cours['img_url']) ? htmlspecialchars($cours['img_url']) : 'default-course.jpg' ?>" 
                     style="width: 100%; height: 300px; object-fit: cover;"
                     alt="<?= htmlspecialchars($cours['titre']) ?>">
                <div style="position: absolute; top: 20px; left: 20px;">
                    <span style="background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); color: #1a1a1a; padding: 8px 16px; border-radius: 100px; font-size: 12px; font-weight: 700; text-transform: uppercase;">
                        <?= htmlspecialchars($cours['description']) ?>
                    </span>
                </div>
            </div>
            
            <div style="padding: 40px;">
                <h3 style="margin: 0 0 15px 0; font-size: 28px; font-weight: 800; color: #1a1a1a;"><?= htmlspecialchars($cours['titre']) ?></h3>
                <p style="color: #666; line-height: 1.7; font-size: 16px; margin-bottom: 30px;"><?= htmlspecialchars($cours['description']) ?></p>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; padding-top: 30px; border-top: 1px dashed #eee;">
                    <div>
                        <span style="display: block; font-size: 12px; color: #aaa; text-transform: uppercase; font-weight: 700;">Lieu</span>
                        <span style="font-weight: 600; color: #1a1a1a;">📍 <?= htmlspecialchars($cours['ville']) ?></span>
                    </div>
                    <div>
                        <span style="display: block; font-size: 12px; color: #aaa; text-transform: uppercase; font-weight: 700;">Durée</span>
                        <span style="font-weight: 600; color: #1a1a1a;">⏱ <?= htmlspecialchars($cours['duree']) ?> Heures</span>
                    </div>
                </div>
            </div>
        </div>

        <div style="flex: 1; min-width: 320px; max-width: 420px; background: #ffffff; padding: 40px; border-radius: 24px; border: 1px solid #f0f0f0; box-shadow: 0 40px 80px rgba(0,0,0,0.06);">
            
            <div style="text-align: center; margin-bottom: 40px;">
                <div style="text-align: center; margin-bottom: 40px;">
    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #e0e7ff 0%, #f0f4ff 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 8px 15px rgba(99, 102, 241, 0.1);">
        <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 9V7C2 4.23858 4.23858 2 7 2H17C19.7614 2 22 4.23858 22 7V9M2 9V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V9M2 9H22M6 16H10" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </div>
    
   
</div>
                <h4 style="font-size: 22px; font-weight: 800; color: #1a1a1a; margin-bottom: 10px;">Paiement Sécurisé</h4>
    <p style="font-size: 14px; color: #888; line-height: 1.5;">Transaction cryptée SSL par Stripe ou PayPal.</p>
            </div>

            <div style="background: #f8f9fa; padding: 20px; border-radius: 16px; margin-bottom: 30px; text-align: center;">
                <span style="color: #888; font-size: 14px;">Total à régler</span>
                <div style="font-size: 32px; font-weight: 800; color: #1a1a1a;">
                    <?= number_format($cours['prix'], 2, '.', ' ') ?> <span style="font-size: 18px; font-weight: 600;">DH</span>
                </div>
            </div>

            <a href="index.php?page=paypal-payment&cours_id=<?= $cours['id'] ?>" 
               style="width: 100%; background: linear-gradient(135deg, #bdc3c7 0%, #ffffff 50%, #95a5a6 100%); color: #2c3e50; text-decoration: none; padding: 18px; border-radius: 16px; font-weight: 800; display: flex; align-items: center; justify-content: center; gap: 12px; margin-bottom: 15px; border: 1px solid #d1d1d1; box-shadow: 0 10px 20px rgba(0,0,0,0.05); transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);">
                <svg width="22" height="22" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.056 2.731C7.904 1.487 9.42 0.75 11.042 0.75H19.551C20.65 0.75 21.464 1.761 21.246 2.836L18.667 15.542C18.498 16.376 17.766 16.974 16.913 16.974H13.344L12.396 21.652C12.288 22.186 11.821 22.574 11.277 22.574H6.702C6.158 22.574 5.691 22.186 5.583 21.652L1.517 1.574C1.439 1.189 1.734 0.833 2.127 0.833H6.46C6.671 0.833 6.877 0.941 7.001 1.123L7.056 2.731Z" fill="#2c3e50"/>
                </svg>
                <span style="text-transform: uppercase; letter-spacing: 1px; font-size: 13px;">Payer via PayPal</span>
            </a>

           

            <div style="margin-top: 40px; border-top: 1px solid #eee; padding-top: 25px; display: flex; justify-content: center; gap: 20px; opacity: 0.4; filter: grayscale(100%);">
                <i class="fab fa-cc-visa fa-2x"></i>
                <i class="fab fa-cc-mastercard fa-2x"></i>
                <i class="fab fa-cc-apple-pay fa-2x"></i>
                <i class="fab fa-google-pay fa-2x"></i>
            </div>
        </div>

    </div>
</section>

<style>
    /* Effets de survol 2026 */
    a:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        filter: brightness(1.05);
    }
</style>

<?php include __DIR__ . '/../layouts/footer.php'; ?>