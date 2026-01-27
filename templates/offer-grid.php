<?php
$offers = [
    ['icon' => '🚗', 'title' => 'Leasing', 'desc' => 'Od 1% wpłaty, decyzja w 24h. Idealny dla firm i klientów indywidualnych.', 'meta' => '24–84 mies. • VAT do odliczenia', 'link' => '#kontakt'],
    ['icon' => '📅', 'title' => 'Wynajem', 'desc' => 'Jedna rata obejmuje auto, serwis i ubezpieczenie. Bez niespodzianek.', 'meta' => 'All-in • stała rata', 'link' => '#kontakt'],
    ['icon' => '💳', 'title' => 'Kredyt', 'desc' => 'Szybka droga do własności pojazdu. Finansowanie nawet do 120 miesięcy.', 'meta' => 'Dla firm i osób prywatnych', 'link' => '#kontakt'],
    ['icon' => '🛡️', 'title' => 'Ubezpieczenia', 'desc' => 'OC/AC/GAP w jednym pakiecie. Porównujemy oferty i obniżamy koszty.', 'meta' => 'Ochrona na cały okres', 'link' => '#kontakt']
];
?>

<section id="produkty" class="section-padding">
    <div class="container">
        <div class="text-center">
            <h2 style="color: <?= COLOR_NAVY ?>; font-size: 32px;">Produkty finansowe</h2>
            <p style="color: #666; margin-top: 10px;">Dopasujemy rozwiązanie do Twojego celu i budżetu.</p>
        </div>
        
        <div class="offer-grid">
            <?php foreach($offers as $offer): ?>
            <div class="card">
                <div class="card-icon"><?= $offer['icon'] ?></div>
                <h3><?= $offer['title'] ?></h3>
                <p><?= $offer['desc'] ?></p>
                <p class="card-meta"><?= $offer['meta'] ?></p>
                <a href="<?= $offer['link'] ?>" class="btn btn-primary">Zapytaj o ofertę &gt;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
