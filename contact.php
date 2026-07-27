<?php
$pageTitle = 'Contact Us | Daliya Ayurvedics';
$activePage = 'contact';
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Contact us</span>
        <h1>Book an appointment or ask about treatments.</h1>
        <p>Share your concern with our doctors and we will guide you to the right consultation or therapy support.</p>
    </div>
</section>
<section class="section-pad">
    <div class="container contact-grid">
        <div class="contact-card">
            <h2>Clinic details</h2>
            <p><strong>Phone:</strong> +91 89210 65523, +91 92924 11503</p>
            <p><strong>Email:</strong> regmikasunil@gmail.com</p>
            <p><strong>Address:</strong> Daliya Ayurvedic and bone setting centre, Kollam, Kerala, India</p>
            <p><a class="btn btn-primary direction-btn" href="https://maps.app.goo.gl/VUqrLboqNCWj5bNU7" target="_blank" rel="noopener">Get direction</a></p>
            <p><strong>Hours:</strong> Monday - Saturday, 9:00 AM - 6:00 PM</p>
        </div>
        <form class="contact-form whatsapp-enquiry-form">
            <label>Name<input type="text" name="name" required></label>
            <label>Phone<input type="tel" name="phone" required></label>
            <label>Treatment interest
                <select name="interest">
                    <option>Ayurvedic consultation</option>
                    <option>Bone setting</option><option>Physiotherapy</option>
                    <option>General enquiry</option>
                </select>
            </label>
            <label>Message<textarea name="message" rows="5"></textarea>
            </label>
            <button class="btn btn-primary" type="submit">Send WhatsApp enquiry</button>
        </form>
    </div>
</section>
<script>
document.querySelector('.whatsapp-enquiry-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const form = event.currentTarget;
    const message = [
        'New enquiry from Daliya Ayurvedics website',
        '',
        `Name: ${form.elements.name.value.trim()}`,
        `Phone: ${form.elements.phone.value.trim()}`,
        `Treatment interest: ${form.elements.interest.value}`,
        `Message: ${form.elements.message.value.trim() || 'No message provided'}`
    ].join('\n');

    window.open(`https://wa.me/918921065523?text=${encodeURIComponent(message)}`, '_blank', 'noopener');
});
</script>
<?php include __DIR__ . '/includes/footer.php'; ?>
