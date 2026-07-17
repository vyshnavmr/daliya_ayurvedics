<?php
$pageTitle = 'Gallery | Daliya Ayurvedics';
$activePage = 'gallery';
include __DIR__ . '/includes/header.php';
$items = ['Clinic reception', 'Consultation room', 'Therapy area', 'Ayurvedic medicines', 'Physiotherapy support', 'Patient waiting area'];
?>
<section class="page-hero"><div class="container">
    <span class="eyebrow">Gallery</span>
    <h1>A glimpse of our clinic and care spaces.</h1>
    <p>Add your real clinic photographs into<strong>assets/images</strong>and replace these placeholders when ready.</p>
    </div>
</section>
<section class="section-pad">
    <div class="container gallery-grid">
        <?php foreach ($items as $index => $item): ?>
            <figure class="gallery-card"><div class="image-placeholder">Image 
                <?= $index + 1; ?></div>
                <figcaption>
                    <?= htmlspecialchars($item); ?>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
