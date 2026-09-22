<!-- ==================== APPLE GLOBAL NAVIGATION HEADER ==================== -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

<header class="site-header sticky top-0 z-50 glassmorphism transition-all duration-300 ease-out">
    <div class="container max-w-7xl mx-auto px-8">
        <div class="header-container flex items-center justify-between min-h-20">
            <!-- Logos -->
            <a href="<?= base_url('home') ?>"
                class="logo flex items-center relative logo-glow transition-transform duration-300 hover:scale-105">
                <img src="<?= base_url('images/ithpllogo.png') ?>" alt="ITHPL Logo"
                    width="193" height="48"
                    class="h-16 w-30 object-contain transition-all duration-300"
                    style="filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.1))" />
            </a>
            <a href="<?= base_url('apple') ?>"
                class="logo flex items-center relative logo-glow transition-transform duration-300 hover:scale-105">
                <img src="<?= base_url('images/apple_business_partner_logo.svg') ?>"
                    alt="Apple Logo"
                    width="120" height="64"
                    class="h-16 w-30 object-contain transition-all duration-300"
                    style="filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.1))" />
            </a>

            <!-- Mobile Menu Toggle -->
            <button
                class="mobile-menu-toggle md:hidden flex flex-col cursor-pointer p-2 rounded-lg transition-colors duration-300 hover:bg-brand-purple hover:bg-opacity-10"
                onclick="toggleMobileMenu()"
                type="button"
                aria-label="Toggle navigation menu">
                <span class="w-6 h-0.5 bg-slate-600 mb-1 transition-all duration-300 rounded-full"></span>
                <span class="w-6 h-0.5 bg-slate-600 mb-1 transition-all duration-300 rounded-full"></span>
                <span class="w-6 h-0.5 bg-slate-600 transition-all duration-300 rounded-full"></span>
            </button>

            <!-- Desktop Navigation -->
            <nav class="main-nav hidden md:flex items-center gap-2 mx-auto" aria-label="Main Navigation">
                <ul class="main-nav-list flex items-center gap-2 m-0 p-0 list-none">
                    <li class="nav-item">
                        <a href="<?= base_url('home') ?>" class="nav-hover">Home</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('home#why-choose-us') ?>">Why ITHPL</a>
                            <a href="<?= base_url('home#core-values') ?>">Key Features</a>
                            <a href="<?= base_url('home#products') ?>">Featured Products</a>
                            <a href="<?= base_url('home#certifications') ?>">Certifications</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('about-us') ?>" class="nav-hover">About Us</a>
                        <div class="dropdown-menu wide">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-column">
                                <a href="<?= base_url('about-us#about-a') ?>">Who We Are</a>
                                <a href="<?= base_url('about-us#drives-us-a') ?>">Mission, Vision & Value</a>
                                <a href="<?= base_url('about-us#journey') ?>">Journey</a>
                                <a href="<?= base_url('about-us#core-team') ?>">Core Team</a>
                                <a href="<?= base_url('about-us#partners') ?>">Partners</a>
                            </div>
                            <div class="dropdown-column">
                                <a href="<?= base_url('about-us#clients') ?>">Customers</a>
                                <a href="<?= base_url('about-us#testimonials') ?>">Testimonials</a>
                                <a href="<?= base_url('blogs') ?>">Blogs</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="https://store.ithpl.com/" class="nav-hover" target="_self">Products</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('services') ?>" class="nav-hover">Services</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-column">
                                <a href="<?= base_url('ewaste-management') ?>">E-Waste Management</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('solutions') ?>" class="nav-hover">Solutions</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('apple') ?>" class="nav-hover">Apple</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('apple-enterprises') ?>">Apple for Enterprises</a>
                            <a href="<?= base_url('apple-smart-epp') ?>">Apple Smart EPP</a>
                            <a href="<?= base_url('apple-tco-calc') ?>">Apple TCO Calculator</a>
                            <a href="<?= base_url('mac-studio') ?>">Mac Studio</a>
                            <a href="<?= base_url('mac-mini') ?>">Mac mini</a>
                            <a href="<?= base_url('iphone-18-pro') ?>">iPhone 18 Pro</a>
                            <a href="<?= base_url('apple-watch-ultra') ?>">Apple Watch Ultra</a>
                            <a href="<?= base_url('apple-watch-series-12') ?>">Apple Watch Series 12</a>
                            <a href="<?= base_url('apple-airpods') ?>">AirPods</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('sustainability') ?>" class="nav-hover">Sustainability</a>
                    </li>
                </ul>
            </nav>

            <!-- Contact Button -->
            <a href="<?= base_url('contact-us') ?>"
                class="contact-button text-white font-semibold text-sm px-7 py-3.5 rounded-xl transition-all duration-300 relative overflow-hidden gradient-shine border border-white border-opacity-20 hover:shadow-xl active:scale-95"
                style="background: linear-gradient(135deg, #d09bed 0%, #b678e3 100%);
                  box-shadow: 0 4px 14px rgba(208, 155, 237, 0.25);
                  transform: translateY(0);"
                onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(208, 155, 237, 0.4)'"
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 14px rgba(208, 155, 237, 0.25)'"
                onmousedown="this.style.transform='translateY(-1px)'"
                onmouseup="this.style.transform='translateY(-3px)'">
                Contact
            </a>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="main-nav-mobile md:hidden" id="mobileNav">
        <div class="flex flex-col space-y-1 p-4">
            <a href="<?= base_url('home') ?>">Home</a>
            <a href="<?= base_url('about-us') ?>">About Us</a>
            <a href="https://store.ithpl.com/" target="_self">Products</a>
            <a href="<?= base_url('services') ?>">Services</a>
            <a href="<?= base_url('solutions') ?>">Solutions</a>
            <!-- Apple with submenu -->
            <div class="w-full flex flex-col items-center text-gray-600 p-2">
                <div class="flex items-center gap-2">
                    <a href="<?= base_url('apple') ?>" class="mobile-link font-semibold">Apple</a>
                    <button type="button" class="arrow-btn" onclick="toggleAppleSubmenu(event)" aria-label="Toggle Apple Submenu">
                        <span class="arrow" id="mobileAppleArrow">▾</span>
                    </button>
                </div>
                <div id="appleSubmenu" class="hidden flex flex-col items-center space-y-2 mt-2 text-sm">
                    <a class="mobile-sublink" href="<?= base_url('apple-enterprises') ?>">Apple for Enterprises</a>
                    <a href="<?= base_url('apple-smart-epp') ?>" class="mobile-sublink">Apple Smart EPP</a>
                    <a href="<?= base_url('apple-tco-calc') ?>" class="mobile-sublink">Apple TCO Calculator</a>
                    <a href="<?= base_url('mac-studio') ?>" class="mobile-sublink">Mac Studio</a>
                    <a href="<?= base_url('mac-mini') ?>" class="mobile-sublink">Mac mini</a>
                    <a href="<?= base_url('iphone-18-pro') ?>" class="mobile-sublink">iPhone 18 Pro</a>
                    <a href="<?= base_url('apple-watch-ultra') ?>" class="mobile-sublink">Apple Watch Ultra</a>
                    <a href="<?= base_url('apple-watch-series-12') ?>" class="mobile-sublink">Apple Watch Series 12</a>
                    <a href="<?= base_url('apple-airpods') ?>" class="mobile-sublink">AirPods</a>
                </div>
            </div>
            <a href="<?= base_url('sustainability') ?>">Sustainability</a>
            <a href="<?= base_url('blogs') ?>">Blogs</a>
            <a href="<?= base_url('contact-us') ?>" class="pt-2 text-center bg-purple-600 text-white py-2.5 rounded-lg font-semibold">Contact Us</a>
        </div>
    </nav>
</header>

<style>
/* Exact styling matching appleheader.php and global.css */
.site-header {
    position: sticky !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    z-index: 10000 !important;
    transition: all 0.3s ease !important;
    background: rgba(255, 255, 255, 0.85) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    box-sizing: border-box !important;
}

.site-header *,
.site-header *::before,
.site-header *::after {
    box-sizing: border-box !important;
}

.site-header .container {
    width: 100% !important;
    max-width: 80rem !important; /* max-w-7xl */
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 2rem !important;
    padding-right: 2rem !important;
}

.site-header .header-container {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    min-height: 5rem !important; /* min-h-20 = 80px */
}

/* Logos */
.site-header .logo {
    display: flex !important;
    align-items: center !important;
    position: relative !important;
    transition: transform 0.3s ease !important;
    text-decoration: none !important;
}

.site-header .logo:hover {
    transform: scale(1.05) !important;
}

.site-header .logo img {
    height: 4rem !important; /* h-16 */
    width: 7.5rem !important; /* w-30 */
    object-fit: contain !important;
    transition: all 0.3s ease !important;
}

.site-header .logo-glow::after {
    content: "" !important;
    position: absolute !important;
    inset: -8px !important;
    border-radius: 12px !important;
    background: linear-gradient(
        135deg,
        rgba(208, 155, 237, 0.1),
        rgba(182, 120, 227, 0.1)
    ) !important;
    opacity: 0 !important;
    transition: opacity 0.3s ease !important;
    z-index: -1 !important;
}

.site-header .logo-glow:hover::after {
    opacity: 1 !important;
}

/* Navigation List */
.site-header .main-nav {
    display: none !important;
    align-items: center !important;
    gap: 0.5rem !important;
    margin-left: auto !important;
    margin-right: auto !important;
}

@media (min-width: 768px) {
    .site-header .main-nav {
        display: flex !important;
    }
}

.site-header .main-nav-list {
    display: flex !important;
    align-items: center !important;
    gap: 0.5rem !important;
    margin: 0 !important;
    padding: 0 !important;
    list-style: none !important;
}

.site-header .nav-item {
    position: relative !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
}

.site-header .nav-item::before,
.site-header .nav-item::after,
.site-header .nav-item::marker {
    display: none !important;
    content: "" !important;
}

/* Nav Item Link */
.site-header .nav-hover {
    color: #000000 !important;
    font-family: "Poppins", "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    font-weight: 400 !important;
    font-size: 0.875rem !important;
    padding: 0.75rem 1.25rem !important;
    text-decoration: none !important;
    border-radius: 0.75rem !important;
    transition: all 0.3s ease !important;
    display: block !important;
    position: relative !important;
    cursor: pointer !important;
    line-height: normal !important;
}

.site-header .nav-hover:hover {
    color: #000000 !important;
    transform: translateY(-2px) !important;
}

/* Dropdown Menu Styles */
.site-header .dropdown-menu {
    position: absolute !important;
    top: 100% !important;
    left: 0 !important;
    min-width: 280px !important;
    background: rgb(255, 255, 255) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border: 1px solid rgba(255, 255, 255, 0.18) !important;
    border-radius: 1rem !important;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12) !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transform: translateY(-10px) !important;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    margin-top: 0.5rem !important;
    z-index: 10001 !important;
    padding: 1rem !important;
}

.site-header .nav-item:hover .dropdown-menu {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateY(0) !important;
}

.site-header .dropdown-menu.single-column {
    display: flex !important;
    flex-direction: column !important;
    gap: 0.25rem !important;
}

.site-header .dropdown-menu.wide {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    gap: 1rem !important;
    min-width: 400px !important;
}

.site-header .dropdown-column {
    display: flex !important;
    flex-direction: column !important;
    gap: 0.25rem !important;
}

.site-header .dropdown-menu a {
    color: #000000 !important;
    font-family: "Poppins", "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    font-weight: 500 !important;
    font-size: 0.875rem !important;
    padding: 0.5rem 0.75rem !important;
    text-decoration: none !important;
    border-radius: 0.5rem !important;
    transition: all 0.2s ease !important;
    display: block !important;
    white-space: nowrap !important;
    text-align: left !important;
}

.site-header .dropdown-menu a:hover {
    color: #000000 !important;
    background: rgba(182, 182, 182, 0.38) !important;
    backdrop-filter: blur(9.5px) !important;
}

.site-header .dropdown-arrow {
    position: absolute !important;
    top: -8px !important;
    left: 2rem !important;
    width: 0 !important;
    height: 0 !important;
    border-left: 8px solid transparent !important;
    border-right: 8px solid transparent !important;
    border-bottom: 8px solid rgb(255, 255, 255) !important;
}

/* Contact Button */
.site-header .contact-button {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 0.875rem 1.75rem !important; /* px-7 py-3.5 */
    background: linear-gradient(135deg, #d09bed 0%, #b678e3 100%) !important;
    color: #ffffff !important;
    font-family: "Poppins", "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    font-weight: 600 !important;
    font-size: 0.875rem !important;
    text-decoration: none !important;
    border-radius: 0.75rem !important;
    box-shadow: 0 4px 14px rgba(208, 155, 237, 0.25) !important;
    transition: all 0.3s ease !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    position: relative !important;
    overflow: hidden !important;
    line-height: normal !important;
    flex-shrink: 0 !important;
}

.site-header .contact-button:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 8px 25px rgba(208, 155, 237, 0.4) !important;
}

.site-header .contact-button:active {
    transform: translateY(-1px) !important;
}

.site-header .gradient-shine::before {
    content: "" !important;
    position: absolute !important;
    top: 0 !important;
    left: -100% !important;
    width: 100% !important;
    height: 100% !important;
    background: linear-gradient(
        90deg,
        transparent,
        rgba(255, 255, 255, 0.3),
        transparent
    ) !important;
    transition: left 0.5s ease !important;
}

.site-header .gradient-shine:hover::before {
    left: 100% !important;
}

/* Mobile Menu Toggle */
.site-header .mobile-menu-toggle {
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;
    align-items: center !important;
    width: 2.5rem !important;
    height: 2.5rem !important;
    background: transparent !important;
    border: none !important;
    cursor: pointer !important;
    padding: 0 !important;
    z-index: 1100 !important;
    border-radius: 0.5rem !important;
    transition: background-color 0.3s ease !important;
}

@media (min-width: 768px) {
    .site-header .mobile-menu-toggle {
        display: none !important;
    }
}

.site-header .mobile-menu-toggle:hover {
    background: rgba(139, 92, 246, 0.1) !important;
}

.site-header .mobile-menu-toggle span {
    display: block !important;
    width: 1.5rem !important;
    height: 2px !important;
    background: #64748b !important;
    margin: 0.1875rem 0 !important;
    transition: all 0.3s ease !important;
    transform-origin: center !important;
    border-radius: 1px !important;
}

/* Mobile Navigation Drawer */
.site-header .main-nav-mobile {
    position: absolute !important;
    top: 100% !important;
    left: 0 !important;
    right: 0 !important;
    background: rgba(255, 255, 255, 0.98) !important;
    backdrop-filter: blur(20px) !important;
    -webkit-backdrop-filter: blur(20px) !important;
    border-top: 1px solid rgba(0, 0, 0, 0.08) !important;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    border-radius: 0 0 1rem 1rem !important;
    overflow: hidden !important;
    transition: all 0.3s ease !important;
    transform: translateY(-10px) !important;
    opacity: 0 !important;
    pointer-events: none !important;
    display: none !important;
}

.site-header .main-nav-mobile.active {
    transform: translateY(0) !important;
    opacity: 1 !important;
    pointer-events: auto !important;
    display: block !important;
}

.site-header .main-nav-mobile a {
    display: block !important;
    padding: 0.75rem 1rem !important;
    text-align: center !important;
    color: #64748b !important;
    font-weight: 500 !important;
    font-size: 0.95rem !important;
    transition: all 0.2s ease !important;
    border-radius: 0.5rem !important;
    text-decoration: none !important;
}

.site-header .main-nav-mobile a:hover {
    background: rgba(139, 92, 246, 0.1) !important;
    color: #7c3aed !important;
}

.site-header .arrow-btn {
    background: transparent !important;
    border: none !important;
    cursor: pointer !important;
    padding: 4px 8px !important;
    font-size: 14px !important;
    color: #64748b !important;
}
</style>

<script>
function toggleMobileMenu() {
    var mobileNav = document.getElementById('mobileNav');
    var toggleButton = document.querySelector('.mobile-menu-toggle');
    if (!mobileNav || !toggleButton) return;
    
    mobileNav.classList.toggle('active');
    var spans = toggleButton.querySelectorAll('span');
    var isActive = mobileNav.classList.contains('active');
    
    if (spans.length >= 3) {
        spans[0].style.transform = isActive ? 'translateY(8px) rotate(45deg)' : 'none';
        spans[1].style.opacity = isActive ? '0' : '1';
        spans[2].style.transform = isActive ? 'translateY(-8px) rotate(-45deg)' : 'none';
    }
}

function toggleAppleSubmenu(e) {
    if (e) e.preventDefault();
    var submenu = document.getElementById('appleSubmenu');
    var arrow = document.getElementById('mobileAppleArrow');
    if (submenu) {
        submenu.classList.toggle('hidden');
        if (arrow) {
            arrow.style.transform = submenu.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        }
    }
}

document.addEventListener('click', function(event) {
    var mobileNav = document.getElementById('mobileNav');
    var toggleButton = document.querySelector('.mobile-menu-toggle');
    if (mobileNav && toggleButton && 
        !toggleButton.contains(event.target) && 
        !mobileNav.contains(event.target) && 
        mobileNav.classList.contains('active')) {
        toggleMobileMenu();
    }
});
</script>
