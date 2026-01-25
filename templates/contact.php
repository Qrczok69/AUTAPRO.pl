<section id="kontakt" class="section-padding">
    <div class="container">
        <div class="text-center">
            <h2 style="color: <?= COLOR_NAVY ?>; font-size: 32px;">Skontaktuj się z nami</h2>
            <p style="color: #666; margin-top: 10px;">Oddzwonimy w ciągu 30 minut i przygotujemy wycenę.</p>
        </div>

        <div class="contact-wrapper">
            <div class="contact-info">
                <div class="info-item">
                    <span class="icon">📍</span>
                    <div>
                        <strong>Adres</strong>
                        <p><?= COMPANY_ADDRESS ?></p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="icon">📞</span>
                    <div>
                        <strong>Telefon</strong>
                        <p><a href="tel:<?= COMPANY_PHONE ?>"><?= COMPANY_PHONE ?></a></p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="icon">✉️</span>
                    <div>
                        <strong>Email</strong>
                        <p><a href="mailto:<?= COMPANY_EMAIL ?>"><?= COMPANY_EMAIL ?></a></p>
                    </div>
                </div>
            </div>

            <form class="contact-form" action="includes/send-mail.php" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Imię i nazwisko" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Adres email" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="tel" name="phone" placeholder="Numer telefonu">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Twoja wiadomość..." rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
            </form>
        </div>
    </div>
</section>
