<?php
$pageTitle = 'Gallery | Daliya Ayurvedics';
$activePage = 'gallery';
include __DIR__ . '/includes/header.php';

function getGalleryImagePath(string $name): ?string
{
    $extensions = ['jpg', 'jpeg', 'png', 'webp'];

    foreach ($extensions as $extension) {
        $path = "assets/images/{$name}.{$extension}";
        if (file_exists(__DIR__ . '/' . $path)) {
            return $path;
        }
    }

    return null;
}

$items = [
    ['title' => 'Front', 'name' => 'front'],
    ['title' => 'Steambath', 'name' => 'steambath'],
    ['title' => 'Reception', 'name' => 'reception'],
    ['title' => 'Poster 1', 'name' => 'poster1'],
    ['title' => 'Poster 2', 'name' => 'poster2'],
    ['title' => 'Massage', 'name' => 'massage'],
];
?>
<section class="page-hero"><div class="container">
    <span class="eyebrow">Gallery</span>
    <h1>A glimpse of our clinic and care spaces.</h1>
    <p>Explore photos from Daliya Ayurvedics, including our clinic front, reception, therapy spaces and treatment posters.</p>
    </div>
</section>
<section class="section-pad">
    <div class="container gallery-grid">
        <?php foreach ($items as $item): ?>
            <?php $imagePath = getGalleryImagePath($item['name']); ?>
            <figure class="gallery-card">
                <?php if ($imagePath): ?>
                    <img class="gallery-image" src="<?= htmlspecialchars($imagePath); ?>" alt="<?= htmlspecialchars($item['title']); ?> at Daliya Ayurvedics">
                <?php else: ?>
                    <div class="image-placeholder"><?= htmlspecialchars($item['title']); ?></div>
                <?php endif; ?>
                <figcaption>
                    <?= htmlspecialchars($item['title']); ?>
                </figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
