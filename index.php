<?php
$pageTitle = 'Daliya Ayurvedics | Traditional Ayurvedic Clinic';
$activePage = 'home';
include __DIR__ . '/includes/header.php';
?>



<section class="section-pad carousel-section" aria-labelledby="home-carousel-title">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Inside our care</span>
            <h2 id="home-carousel-title">A calming glimpse of Daliya Ayurvedics.</h2>
            <p>Explore five moments that reflect our patient-first approach to Ayurvedic consultation, traditional bone setting, physiotherapy and family wellness.</p>
        </div>
        <div class="home-carousel" aria-label="Daliya Ayurvedics care highlights">
            <div class="carousel-track">
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-1.svg" alt="Ayurvedic herbs and mortar representing holistic natural care">
                    <figcaption>Holistic Ayurveda</figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-2.svg" alt="Illustration representing careful traditional bone setting support">
                    <figcaption>Bone setting support</figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-3.svg" alt="Ayurvedic doctor consultation card with natural leaf motif">
                    <figcaption>Personalised consultation</figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-4.svg" alt="Physiotherapy care illustration for mobility and recovery">
                    <figcaption>Physiotherapy care</figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-5.svg" alt="Family wellness illustration with leaf and healing cross">
                    <figcaption>Family wellness</figcaption>
                </figure>
            </div>
            <!-- <div class="carousel-dots" aria-hidden="true">
                <span></span><span></span><span></span><span></span><span></span>
            </div> -->
        </div>
    </div>
</section>



<section class="hero section-pad">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow">Traditional care • Modern comfort</span>
            <h1>Daliya Ayurvedics Clinic for holistic healing, bone setting and physiotherapy.</h1>
            <p>We help families understand every treatment option clearly with trusted Ayurvedic care, experienced bone setting support and rehabilitation guidance under one roof.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="contact.php">Book an appointment</a>
                <a class="btn btn-secondary" href="specialities.php">Explore treatments</a>
            </div>
        </div>
        <div class="hero-card">
            <h2>Complete clinic support</h2>
            <ul>
                <li>Bone setting by Hanshi Ajayakumar Nair</li>
                <li>Male and female physiotherapy assistance</li>
                <li>Certified Ayurvedic doctor consultation</li>
                <li>Personalised wellness and recovery plans</li>
            </ul>
        </div>
    </div>
</section>

<section class="carousel-section" aria-labelledby="home-carousel-title">
    <div class="home-carousel" data-carousel aria-label="Daliya Ayurvedics care highlights">
        <button class="carousel-arrow carousel-arrow-left" type="button" data-carousel-prev aria-label="Show previous carousel image">‹</button>
        <div class="carousel-viewport">
            <div class="carousel-track" data-carousel-track>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-1.svg" alt="Ayurvedic herbs and mortar representing holistic natural care">
                    <figcaption>
                        <span>Holistic Ayurveda</span>
                        <strong id="home-carousel-title">A calming glimpse of Daliya Ayurvedics.</strong>
                    </figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-2.svg" alt="Illustration representing careful traditional bone setting support">
                    <figcaption>
                        <span>Traditional care</span>
                        <strong>Bone setting support</strong>
                    </figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-3.svg" alt="Ayurvedic doctor consultation card with natural leaf motif">
                    <figcaption>
                        <span>Personalised guidance</span>
                        <strong>Ayurvedic consultation</strong>
                    </figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-4.svg" alt="Physiotherapy care illustration for mobility and recovery">
                    <figcaption>
                        <span>Recovery support</span>
                        <strong>Physiotherapy care</strong>
                    </figcaption>
                </figure>
                <figure class="carousel-slide">
                    <img src="assets/images/home-carousel-5.svg" alt="Family wellness illustration with leaf and healing cross">
                    <figcaption>
                        <span>Wellness for all ages</span>
                        <strong>Family wellbeing</strong>
                    </figcaption>
                </figure>
            </div>
        </div>
        <button class="carousel-arrow carousel-arrow-right" type="button" data-carousel-next aria-label="Show next carousel image">›</button>
        <div class="carousel-dots" aria-hidden="true">
            <span data-carousel-dot class="active"></span><span data-carousel-dot></span><span data-carousel-dot></span><span data-carousel-dot></span><span data-carousel-dot></span>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('[data-carousel]').forEach((carousel) => {
        const track = carousel.querySelector('[data-carousel-track]');
        const slides = carousel.querySelectorAll('.carousel-slide');
        const dots = carousel.querySelectorAll('[data-carousel-dot]');
        const previous = carousel.querySelector('[data-carousel-prev]');
        const next = carousel.querySelector('[data-carousel-next]');
        let currentSlide = 0;

        const showSlide = (slideIndex) => {
            currentSlide = (slideIndex + slides.length) % slides.length;
            track.style.transform = `translateX(-${currentSlide * 20}%)`;
            dots.forEach((dot, index) => dot.classList.toggle('active', index === currentSlide));
        };

        previous.addEventListener('click', () => showSlide(currentSlide - 1));
        next.addEventListener('click', () => showSlide(currentSlide + 1));
    });
</script>

<section class="section-pad">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Why choose us</span>
            <h2>Patient-first Ayurvedic care for every stage of recovery.</h2>
        </div>
        <div class="card-grid four">
            <article class="info-card"><h3>Experienced team</h3><p>Our clinic combines traditional bone setting knowledge, physiotherapy support and certified Ayurvedic medical guidance.</p></article>
            <article class="info-card"><h3>Clear explanations</h3><p>Patients and families receive simple details about conditions, treatment choices, expected care and follow-up needs.</p></article>
            <article class="info-card"><h3>Natural approach</h3><p>We focus on gentle therapies, Ayurvedic formulations, lifestyle advice and rehabilitation to support long-term wellbeing.</p></article>
            <article class="info-card"><h3>Comfortable visits</h3><p>Separate staff support, appointment guidance and friendly communication make every visit easier for all age groups.</p></article>
        </div>
    </div>
</section>

<section class="section-pad soft-bg">
    <div class="container split-grid">
        <div>
            <span class="eyebrow">Why bone setting therapy</span>
            <h2>A traditional method focused on alignment, mobility and pain relief.</h2>
            <p>Bone setting therapy is a traditional manual practice used to support musculoskeletal concerns such as sprains, joint stiffness, minor dislocations, posture-related discomfort and movement limitations. At Daliya Ayurvedics, bone setting is offered with careful assessment and clear guidance.</p>
        </div>
        <div class="highlight-box">
            <h3>Good for supportive care in</h3>
            <ul class="check-list">
                <li>Joint and muscle pain management</li>
                <li>Sprains and strain recovery support</li>
                <li>Posture and movement correction guidance</li>
                <li>Rehabilitation along with physiotherapy</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-pad">
    <div class="container split-grid reverse">
        <div class="highlight-box leaf">
            <h3>Uses of Ayurvedics</h3>
            <p>Ayurveda supports preventive health, digestion, stress balance, pain management, immunity, skin care, women’s wellness and lifestyle correction through personalised plans.</p>
        </div>
        <div>
            <span class="eyebrow">Why prefer Ayurveda</span>
            <h2>Care that looks at the root cause, not only the symptom.</h2>
            <p>Ayurveda considers body constitution, food habits, sleep, work routine and emotional wellbeing before suggesting care. Many patients prefer Ayurvedic care because it is holistic, uses natural preparations and encourages sustainable lifestyle changes alongside clinical advice.</p>
            <a class="text-link" href="specialities.php">View our specialities →</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
