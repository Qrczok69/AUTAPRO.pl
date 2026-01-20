<?php
$offers = [
    ['icon' => '🔑', 'title' => 'Leasing Operacyjny', 'desc' => 'Najlepszy dla firm. Wrzuć raty w koszty, odlicz VAT i zoptymalizuj podatki.', 'link' => '#kontakt'],
    ['icon' => '📅', 'title' => 'Wynajem Długoterminowy', 'desc' => 'Auto na abonament. Stała miesięczna rata obejmuje serwis, opony i ubezpieczenie.', 'link' => '#kontakt'],
    ['icon' => '💰', 'title' => 'Kredyt Samochodowy', 'desc' => 'Zostań właścicielem auta od razu. Finansowanie do 120 miesięcy dla osób fizycznych.', 'link' => '#kontakt']
];
?>

<section id="oferta" class="section-padding">
    <div class="container">
        <div class="text-center">
            <h2 style="color: <?= COLOR_NAVY ?>; font-size: 32px;">Modele finansowania</h2>
            <p style="color: #666; margin-top: 10px;">Dopasujemy ofertę do Twoich potrzeb.</p>
        </div>
        
        <div class="offer-grid">
            <?php foreach($offers as $offer): ?>
            <div class="card">
                <div class="card-icon"><?= $offer['icon'] ?></div>
                <h3><?= $offer['title'] ?></h3>
                <p><?= $offer['desc'] ?></p>
                <a href="<?= $offer['link'] ?>" class="btn btn-primary">Zapytaj o ofertę &gt;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
