<footer id="contact" class="site-footer">
    <div class="container footer-container">

        <!-- About Section -->
        <div class="footer-about">
            <a href="<?= base_url('home'); ?>"
                class="footer-logo inline-flex items-center space-x-2 transition-opacity duration-300 hover:opacity-80">
                <img src="<?= base_url('images/ithpllogo.png'); ?>" alt="ITHPL Logo" class="footer-logo"
                    loading="lazy" />
            </a>
            <p>
                Empowering businesses with cutting-edge IT solutions since 2015.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
                <li><a href="<?= base_url('services'); ?>">Services</a></li>
                <li><a href="<?= base_url('solutions'); ?>">Solutions</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="<?= base_url('contact-us'); ?>">Contact</a></li>
            </ul>
        </div>

        <!-- Apple Related Links -->
        <div class="footer-links pt-0 sm:pt-13">
            <ul>
                <li><a href="<?= base_url('apple'); ?>">Apple</a></li>
                <li><a href="<?= base_url('apple-enterprises'); ?>">Apple for Enterprise</a></li>
                <li><a href="<?= base_url('apple-smart-epp'); ?>">Apple Smart EPP</a></li>
                <li><a href="<?= base_url('tco-calculator'); ?>">TCO Calculator</a></li>
                <li><a href="<?= base_url('sustainability'); ?>">Sustainability</a></li>
            </ul>
        </div>

        <!-- Policies -->
        <div class="footer-links">
            <h4>Policies</h4>
            <ul>
                <li><a href="<?= base_url('shipping-policy'); ?>">Shipping</a></li>
                <li><a href="<?= base_url('terms-and-conditions'); ?>">Terms & Conditions</a></li>
                <li><a href="<?= base_url('privacy-policy'); ?>">Privacy</a></li>
                <li><a href="<?= base_url('refund-policy'); ?>">Refund</a></li>
            </ul>
        </div>

        <!-- Social Links -->
        <div class="footer-social">
            <h4>Connect With Us</h4>
            <div class="social-icons">
                <a href="https://www.linkedin.com/company/innovative-techhub-pvt-ltd/?viewAsMember=true" target="_blank"
                    rel="noopener noreferrer" aria-label="LinkedIn">
                    <img src="<?= base_url('images/linkedin-logo.png'); ?>" alt="LinkedIn" loading="lazy" />
                </a>
                <a href="https://www.facebook.com/?sk=welcome" target="_blank" rel="noopener noreferrer"
                    aria-label="Facebook">
                    <img src="<?= base_url('images/facebook.svg'); ?>" alt="Facebook" loading="lazy" />
                </a>
                <a href="https://www.instagram.com/innovativetechhubpvtltd/?next=%2F&hl=en" target="_blank"
                    rel="noopener noreferrer" aria-label="Instagram">
                    <img src="<?= base_url('images/instagram-logo.svg'); ?>" alt="Instagram" loading="lazy" />
                </a>
            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container text-center">
            <p>© <?= date('Y'); ?> Innovative Tech Hub Pvt. Ltd</p>
        </div>
    </div>
</footer>

</body>

<!-- JS Files -->
<script src="<?= base_url('js/global.js'); ?>" defer></script>
<script>
    // Optional: Scroll to top, footer animations, etc.
</script>
<script>
    // Simple fade-in animation on scroll
    document.addEventListener('DOMContentLoaded', function () {
        const animatedEls = document.querySelectorAll('.animate-fade-in-up');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                }
            });
        }, { threshold: 0.15 });
        animatedEls.forEach((el) => {
            el.classList.add('opacity-0', 'translate-y-8', 'transition-all', 'duration-700');
            observer.observe(el);
        });
    });
</script>
<!-- <script src="js/gsap.min.js" defer></script>
<script src="js/ScrollTrigger.min.js" defer></script>
<script src="js/ScrollToPlugin.min.js" defer></script>
<script src="js/Scrollbar.js" defer></script> -->
<script src="js/global.js" defer></script>