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
            <p><strong>Phone:</strong> +91 00000 00000</p>
            <p><strong>Email:</strong> care@daliyaayurvedics.com</p>
            <p><strong>Address:</strong> Daliya Ayurvedics Clinic, Your Town, Kerala, India</p>
            <p><strong>Hours:</strong> Monday - Saturday, 9:00 AM - 6:00 PM</p>
        </div>
        <form class="contact-form" 
         action="mailto:vyshnav2004sk@gmail.com"
         method="post" enctype="text/plain">
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
            <button class="btn btn-primary" type="submit">Send enquiry</button>
        </form>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
