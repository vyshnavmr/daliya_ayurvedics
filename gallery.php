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

$videos = [
    [
        'title' => 'Daliya Ayurvedics video 1',
        'url' => 'https://youtube.com/shorts/AdGnft_3OEc?si=SFD32eHvoZDbdjyu',
        'thumbnail' => 'https://img.youtube.com/vi/AdGnft_3OEc/hqdefault.jpg',
    ],
    [
        'title' => 'Daliya Ayurvedics video 2',
        'url' => 'https://youtube.com/shorts/_-SRsettFoA?si=TI-mCOuZW2CW8MG4',
        'thumbnail' => 'https://img.youtube.com/vi/_-SRsettFoA/hqdefault.jpg',
    ],
];

$galleryImages = array_values(array_filter(array_map(function (array $item): ?array {
    $path = getGalleryImagePath($item['name']);

    if (!$path) {
        return null;
    }

    return [
        'title' => $item['title'],
        'path' => $path,
    ];
}, $items)));
?>
<section class="page-hero"><div class="container">
    <span class="eyebrow">Gallery</span>
    <h1>A glimpse of our clinic and care spaces.</h1>
    <p>Explore photos from Daliya Ayurvedics, including our clinic front, reception, therapy spaces and treatment posters.</p>
    </div>
</section>
<section class="gallery-section" aria-label="Clinic photo gallery">
    <div class="container gallery-grid gallery-photo-grid">
        <?php foreach ($items as $item): ?>
            <?php $imagePath = getGalleryImagePath($item['name']); ?>
            <?php if ($imagePath): ?>
                <?php $imageIndex = array_search($imagePath, array_column($galleryImages, 'path'), true); ?>
                <button class="gallery-card gallery-photo-card" type="button" data-gallery-index="<?= $imageIndex; ?>" aria-label="Open <?= htmlspecialchars($item['title']); ?> image">
                    <img class="gallery-image" src="<?= htmlspecialchars($imagePath); ?>" alt="<?= htmlspecialchars($item['title']); ?> at Daliya Ayurvedics">
                </button>
            <?php else: ?>
                <div class="gallery-card gallery-photo-card image-placeholder"><?= htmlspecialchars($item['title']); ?></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="container gallery-video-section" aria-label="Clinic videos">
        <div class="gallery-video-grid">
            <?php foreach ($videos as $video): ?>
                <a class="gallery-video-card" href="<?= htmlspecialchars($video['url']); ?>" target="_blank" rel="noopener" aria-label="Open <?= htmlspecialchars($video['title']); ?> on YouTube">
                    <img class="gallery-video-thumbnail" src="<?= htmlspecialchars($video['thumbnail']); ?>" alt="<?= htmlspecialchars($video['title']); ?> thumbnail">
                    <span class="gallery-video-play" aria-hidden="true"></span>
                    <span class="gallery-video-label"><?= htmlspecialchars($video['title']); ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php if ($galleryImages): ?>
    <div class="gallery-lightbox" id="gallery-lightbox" aria-hidden="true" role="dialog" aria-label="Gallery image viewer">
        <button class="gallery-lightbox-close" type="button" aria-label="Close gallery">&times;</button>
        <button class="gallery-lightbox-arrow gallery-lightbox-prev" type="button" aria-label="Previous image">&#10094;</button>
        <div class="gallery-lightbox-content">
            <img class="gallery-lightbox-image" src="<?= htmlspecialchars($galleryImages[0]['path']); ?>" alt="<?= htmlspecialchars($galleryImages[0]['title']); ?> at Daliya Ayurvedics">
            <p class="gallery-lightbox-count">1 of <?= count($galleryImages); ?></p>
        </div>
        <button class="gallery-lightbox-arrow gallery-lightbox-next" type="button" aria-label="Next image">&#10095;</button>
    </div>
    <script>
    const galleryImages = <?= json_encode($galleryImages, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT); ?>;
    const lightbox = document.getElementById('gallery-lightbox');
    const lightboxImage = lightbox.querySelector('.gallery-lightbox-image');
    const lightboxCount = lightbox.querySelector('.gallery-lightbox-count');
    const closeButton = lightbox.querySelector('.gallery-lightbox-close');
    const previousButton = lightbox.querySelector('.gallery-lightbox-prev');
    const nextButton = lightbox.querySelector('.gallery-lightbox-next');
    let activeImageIndex = 0;

    function showGalleryImage(index) {
        activeImageIndex = (index + galleryImages.length) % galleryImages.length;
        const image = galleryImages[activeImageIndex];
        lightboxImage.src = image.path;
        lightboxImage.alt = `${image.title} at Daliya Ayurvedics`;
        lightboxCount.textContent = `${activeImageIndex + 1} of ${galleryImages.length}`;
    }

    function openGallery(index) {
        showGalleryImage(index);
        lightbox.classList.add('is-open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.classList.add('lightbox-open');
        closeButton.focus();
    }

    function closeGallery() {
        lightbox.classList.remove('is-open');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('lightbox-open');
    }

    document.querySelectorAll('[data-gallery-index]').forEach((button) => {
        button.addEventListener('click', () => openGallery(Number(button.dataset.galleryIndex)));
    });

    closeButton.addEventListener('click', closeGallery);
    previousButton.addEventListener('click', () => showGalleryImage(activeImageIndex - 1));
    nextButton.addEventListener('click', () => showGalleryImage(activeImageIndex + 1));
    lightbox.addEventListener('click', (event) => {
        if (event.target === lightbox) {
            closeGallery();
        }
    });
    document.addEventListener('keydown', (event) => {
        if (!lightbox.classList.contains('is-open')) {
            return;
        }

        if (event.key === 'Escape') {
            closeGallery();
        } else if (event.key === 'ArrowLeft') {
            showGalleryImage(activeImageIndex - 1);
        } else if (event.key === 'ArrowRight') {
            showGalleryImage(activeImageIndex + 1);
        }
    });
    </script>
<?php endif; ?>
<?php include __DIR__ . '/includes/footer.php'; ?>
