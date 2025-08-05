<section id="hero-about" class="fade-in-section">
    <div class="hero-background-a"></div>
    <div class="container hero-content-a ">

        <h1 class=" hero-title-a    ">We bring technology together to work for <br><span class="gradient-services">your
                business, not against it.</span></h1>

        <p class="hero-description-a">
            Because when your tech runs smoothly, your business does too.
        </p>
        <div class="hero-image-container-a">
            <img src="<?= base_url(relativePath: 'images/Contact_hero.svg'); ?>" alt="Business technology illustration"
                class="hero-image-a" />
        </div>
    </div>
</section>
<section id="contact">
    <h2 class="section-title">Contact <span class="gradient-services">Us</span></h2>
    <div class="contact-section">
        <div class="contact-background"
            style="background-image: url('<?= base_url(relativePath: 'images/contact-form-background.png'); ?>');">
        </div>
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Let’s Get in Touch</h3>
                    <p>Whether you’re looking for IT solutions, product inquiries, or partnership opportunities — we’re
                        here
                        to help. Reach out and let’s start a conversation.</p>
                    <ul class="contact-details">
                        <li><img src="<?= base_url(relativePath: 'images/call-icon.png'); ?>" alt="Call icon"><span>+91
                                92260 54955</span></li>
                        <li><img src="<?= base_url(relativePath: 'images/mail-icon.png'); ?>"
                                alt="Mail icon"><span>info@ithpl.com</span></li>
                        <li><img src="<?= base_url(relativePath: 'images/address-icon.png'); ?>"
                                alt="Address icon"><span>5th Floor, Survey No.15,
                                Plot.No.P7,
                                Innovative Tower, Kharadi, Pune, Maharashtra - 411014</span></li>
                    </ul>
                    <div class="social-icons-c">
                        <a href="#"><img src="<?= base_url(relativePath: 'images/linkedin-before.png'); ?>"
                                alt="LinkedIn"></a>
                        <a href="#"><img src="<?= base_url(relativePath: 'images/instagram-before-icon.png'); ?>"
                                alt="Instagram"></a>
                        <a href="#"><img src="<?= base_url(relativePath: 'images/facebook-before-icon.png'); ?>"
                                alt="Facebook"></a>
                        <a href="#"><img src="<?= base_url(relativePath: 'images/x-before-icon.png'); ?>" alt="X"></a>
                        <a href="#"><img src="<?= base_url(relativePath: 'images/youtube-before-icon.png'); ?>"
                                alt="YouTube"></a>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <h3>Send Us A Message</h3>
                    <form>
                        <div class="form-group"><input type="text" id="name" name="name" placeholder="Name"></div>
                        <div class="form-group"><input type="email" id="email" name="email" placeholder="Email"></div>
                        <div class="form-group"><input type="tel" id="contact-number" name="contact-number"
                                placeholder="Contact Number"></div>
                        <div class="form-group">
                            <div class="select-wrapper">
                                <select id="inquiry-type" name="inquiry-type" required>
                                    <option value="" disabled selected>Inquiry Type</option>
                                    <option value="sales">Sales</option>
                                    <option value="support">Support</option>
                                </select>
                                <img src="<?= base_url(relativePath: 'images/drop-arrow.png'); ?>" alt="dropdown arrow"
                                    class="select-arrow">
                            </div>
                        </div>
                        <div class="form-group"><textarea id="message" name="message" rows="4"
                                placeholder="Message"></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="location" class="location-section">
    <div class="container">
        <h2 class="section-title ">Our <span class="gradient-services">Location</span></h2>
        <div class="glass-effect rounded-2xl p-8 shadow-xl bg-white ">
            <div class="relative w-full h-80 rounded-xl overflow-hidden shadow-lg">
                <iframe class="absolute inset-0 w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.5508452014096!2d73.94087927335211!3d18.54918856830305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c3da737fc32d%3A0x75cf294a9792e8f1!2sINNOVATIVE%20TOWER!5e0!3m2!1sen!2sin!4v1750144244067!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
</section>

<section id="subscribe" class="fade-in-section">
    <div class="container">
        <div class="subscribe-box">
            <h2 class="subscribe-title">
                Stay Updated with IT Trends & Exclusive Offers!
            </h2>
            <form class="subscribe-form">
                <input type="email" placeholder="Enter your email" class="subscribe-input" />
                <button type="submit" class="subscribe-button">Submit</button>
            </form>
        </div>
    </div>
</section>
<script src="<?= base_url('js/global.js'); ?>" defer></script>