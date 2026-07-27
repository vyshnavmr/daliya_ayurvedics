<?php
$pageTitle = 'Specialities | Daliya Ayurvedics';
$activePage = 'specialities';
include __DIR__ . '/includes/header.php';
$specialities = [
    ['title' => 'Ayurvedic consultation', 'text' => 'Personalised assessment, wellness guidance and Ayurvedic medicine plans from a certified Ayurvedic doctor.'],
    ['title' => 'Traditional bone setting', 'text' => 'Manual support for selected joint, muscle and mobility concerns with careful patient counselling.'],
    ['title' => 'Physiotherapy support', 'text' => 'Male and female physiotherapy assistance for strengthening, mobility, posture and rehabilitation routines.'],
    ['title' => 'Pain management', 'text' => 'Holistic plans for back pain, neck pain, knee pain, shoulder stiffness and recurring muscular discomfort.'],
    ['title' => 'Lifestyle disorders', 'text' => 'Ayurvedic diet and routine guidance for digestion, stress, sleep and general health improvement.'],
    ['title' => 'Preventive wellness', 'text' => 'Seasonal care, immunity support and daily habit correction to maintain long-term wellbeing.'],
];
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Our specialities</span>
        <h1>Treatments and services available at Daliya Ayurvedics.</h1>
        <p>Our clinic blends Ayurvedic principles, traditional bone setting and physiotherapy support to provide complete musculoskeletal and wellness care.</p>
    </div>
</section>
<section class="section-pad">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Conditions We Treat</span>
            <h2>Conditions We Treat</h2>
            <!-- <p>We provide Ayurvedic treatment, traditional bone setting, and rehabilitation support for a wide range of musculoskeletal conditions.</p> -->
        </div>

        <div class="card-grid four conditions-grid">
            <article class="info-card"><h3>Chronic Back Pain</h3></article>
            <article class="info-card"><h3>Disc Bulge & Slipped Disc</h3></article>
            <article class="info-card"><h3>Neck Pain</h3></article>
            <article class="info-card"><h3>Knee Pain</h3></article>

            <article class="info-card"><h3>Shoulder Pain</h3></article>
            <article class="info-card"><h3>Joint Pain</h3></article>
            <article class="info-card"><h3>Heel Pain</h3></article>
            <article class="info-card"><h3>Sciatica</h3></article>

            <article class="info-card"><h3>Varicose Veins</h3></article>
            <article class="info-card"><h3>Arthritis</h3></article>
            <article class="info-card"><h3>Muscle Stiffness</h3></article>
            <article class="info-card"><h3>Sports Injuries</h3></article>

            <article class="info-card"><h3>Fractures & Sprains</h3></article>
            <article class="info-card"><h3>Walking Difficulty & Mobility Problems</h3></article>
        </div>
    </div>
</section>
<section class="section-pad">
    <div class="container card-grid three">
        <?php foreach ($specialities as $item): ?>
            <article class="info-card tall">
                <h2><?= htmlspecialchars($item['title']); ?></h2>
                <p><?= htmlspecialchars($item['text']); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section-pad soft-bg">
    <div class="container">

        <div class="section-heading">
            <span class="eyebrow">Our Staff</span>
            <h2>Meet Our Team</h2>
        </div>

        <div class="team-grid specialities-team-grid">

            <article class="team-card">

                <div class="avatar">
                    <img src="assets/bonesetter.jpg" alt="Hanshi Ajayakumar Nair">
                </div>

                <h3>Hanshi Ajayakumar Nair</h3>
                <h5>Traditional Bone Setter</h5>
                <p>Hanshi Ajayakumar Nair is an experienced traditional bone setter and complementary medicine practitioner specializing in the diagnosis and treatment of musculoskeletal injuries, particularly fractures, joint dislocations, ligament injuries, and spinal disorders.</p>
            </article>

            <article class="team-card">
                <div class="avatar">
                    <img src="assets/doctor.jpeg" alt="Certified Ayurvedic Doctor">
                </div>
                <h3>Certified Ayurvedic Doctor</h3>
                <h5>Ayurvedic Consultation</h5>
                <p></p>
            </article>

            <article class="team-card">
                <div class="avatar">
                    <img src="assets/physio_female.jpeg" alt="Female Physiotherapist">
                </div>
                <h3>Female Physiotherapist</h3>
                <h5>Physiotherapy & Rehabilitation</h5>
            </article>
            
            <article class="team-card">
                <div class="team-avatar placeholder-avatar" aria-hidden="true">MP</div>

                <h3>Male Physiotherapist</h3>
                <h5>Physiotherapy & Rehabilitation</h5>
            </article>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
