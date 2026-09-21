<!-- ==================== APPLE GLOBAL NAVIGATION HEADER ==================== -->
<header class="site-header site-header-apple">
    <div class="header-inner max-w-7xl mx-auto px-4 sm:px-8">
        <div class="header-container flex items-center justify-between min-h-[72px]">
            <!-- Logos -->
            <div class="flex items-center gap-3 sm:gap-6">
                <a href="<?= base_url('home') ?>" class="logo-link flex items-center transition-transform duration-200 hover:scale-[1.02]">
                    <img src="<?= base_url('images/ithpllogo.png') ?>" alt="ITHPL Logo"
                        width="160" height="42"
                        class="h-10 sm:h-12 w-auto object-contain"
                        style="filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.06))" />
                </a>
                <span class="h-6 w-[1px] bg-black/15 hidden sm:block"></span>
                <a href="<?= base_url('apple') ?>" class="logo-link flex items-center transition-transform duration-200 hover:scale-[1.02]">
                    <img src="<?= base_url('images/apple_business_partner_logo.svg') ?>" alt="Apple Business Partner"
                        width="110" height="48"
                        class="h-9 sm:h-11 w-auto object-contain"
                        style="filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.06))" />
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle md:hidden flex flex-col justify-center items-center w-10 h-10 p-2 rounded-lg transition-colors hover:bg-black/5"
                onclick="toggleAppleMobileMenu()"
                type="button"
                aria-label="Toggle navigation menu">
                <span class="w-5 h-0.5 bg-gray-800 mb-1.5 transition-all duration-300 rounded-full"></span>
                <span class="w-5 h-0.5 bg-gray-800 mb-1.5 transition-all duration-300 rounded-full"></span>
                <span class="w-5 h-0.5 bg-gray-800 transition-all duration-300 rounded-full"></span>
            </button>

            <!-- Desktop Navigation -->
            <nav class="main-nav hidden md:flex items-center gap-1 mx-auto" aria-label="Main Navigation">
                <ul class="main-nav-list flex items-center gap-1 m-0 p-0 list-none">
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
                        <a href="<?= base_url('apple') ?>" class="nav-hover font-semibold text-blue-600">Apple</a>
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
                class="contact-button text-white font-semibold text-xs sm:text-sm px-5 sm:px-6 py-2.5 sm:py-3 rounded-xl transition-all duration-300 relative overflow-hidden shadow-sm hover:shadow-lg active:scale-95 shrink-0"
                style="background: linear-gradient(135deg, #d09bed 0%, #b678e3 100%);">
                Contact
            </a>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <nav class="main-nav-mobile md:hidden hidden bg-white/95 backdrop-blur-xl border-t border-black/[0.08] px-6 py-5 transition-all duration-300" id="appleMobileNav">
        <div class="flex flex-col space-y-3 text-sm font-medium text-gray-800">
            <a href="<?= base_url('home') ?>" class="py-1 hover:text-blue-600 transition-colors">Home</a>
            <a href="<?= base_url('about-us') ?>" class="py-1 hover:text-blue-600 transition-colors">About Us</a>
            <a href="https://store.ithpl.com/" target="_self" class="py-1 hover:text-blue-600 transition-colors">Products</a>
            <a href="<?= base_url('services') ?>" class="py-1 hover:text-blue-600 transition-colors">Services</a>
            <a href="<?= base_url('solutions') ?>" class="py-1 hover:text-blue-600 transition-colors">Solutions</a>
            
            <!-- Apple Submenu -->
            <div class="border-t border-b border-gray-100 py-2">
                <div class="flex items-center justify-between py-1 cursor-pointer" onclick="toggleAppleSubmenuMobile()">
                    <a href="<?= base_url('apple') ?>" class="font-semibold text-blue-600">Apple Overview</a>
                    <span id="appleArrowMobile" class="text-xs text-gray-500 transition-transform duration-200">▾</span>
                </div>
                <div id="appleSubmenuMobile" class="flex flex-col space-y-2 pl-3 pt-2 text-xs text-gray-600">
                    <a href="<?= base_url('apple-enterprises') ?>" class="hover:text-blue-600">Apple for Enterprises</a>
                    <a href="<?= base_url('apple-smart-epp') ?>" class="hover:text-blue-600">Apple Smart EPP</a>
                    <a href="<?= base_url('apple-tco-calc') ?>" class="hover:text-blue-600">Apple TCO Calculator</a>
                    <a href="<?= base_url('mac-studio') ?>" class="hover:text-blue-600">Mac Studio</a>
                    <a href="<?= base_url('mac-mini') ?>" class="hover:text-blue-600">Mac mini</a>
                    <a href="<?= base_url('iphone-18-pro') ?>" class="hover:text-blue-600">iPhone 18 Pro</a>
                    <a href="<?= base_url('apple-watch-ultra') ?>" class="hover:text-blue-600">Apple Watch Ultra</a>
                    <a href="<?= base_url('apple-watch-series-12') ?>" class="hover:text-blue-600">Apple Watch Series 12</a>
                    <a href="<?= base_url('apple-airpods') ?>" class="hover:text-blue-600">AirPods</a>
                </div>
            </div>

            <a href="<?= base_url('sustainability') ?>" class="py-1 hover:text-blue-600 transition-colors">Sustainability</a>
            <a href="<?= base_url('contact-us') ?>" class="pt-2 text-center bg-purple-600 text-white py-2.5 rounded-lg font-semibold">Contact Us</a>
        </div>
    </nav>
</header>

<style>
/* Scoped styles ensuring perfect render even inside cloned Apple pages */
.site-header-apple {
    position: sticky !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    z-index: 10000 !important;
    background: rgba(255, 255, 255, 0.94) !important;
    backdrop-filter: saturate(180%) blur(20px) !important;
    -webkit-backdrop-filter: saturate(180%) blur(20px) !important;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08) !important;
    box-shadow: 0 2px 16px rgba(0, 0, 0, 0.04) !important;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif !important;
    line-height: 1.5 !important;
    box-sizing: border-box !important;
}
.site-header-apple *,
.site-header-apple *::before,
.site-header-apple *::after {
    box-sizing: border-box !important;
}
.site-header-apple .nav-hover {
    color: #1d1d1f !important;
    font-size: 13.5px !important;
    font-weight: 500 !important;
    padding: 8px 14px !important;
    border-radius: 8px !important;
    transition: all 0.2s ease !important;
    text-decoration: none !important;
    display: inline-block !important;
}
.site-header-apple .nav-hover:hover {
    color: #0071e3 !important;
    background: rgba(0, 0, 0, 0.04) !important;
}
.site-header-apple .nav-item {
    position: relative !important;
    list-style: none !important;
    margin: 0 !important;
    padding: 0 !important;
}
.site-header-apple .dropdown-menu {
    position: absolute !important;
    top: 100% !important;
    left: 50% !important;
    transform: translateX(-50%) translateY(8px) !important;
    background: rgba(255, 255, 255, 0.98) !important;
    backdrop-filter: blur(25px) !important;
    -webkit-backdrop-filter: blur(25px) !important;
    border: 1px solid rgba(0, 0, 0, 0.08) !important;
    border-radius: 14px !important;
    box-shadow: 0 16px 36px rgba(0, 0, 0, 0.12) !important;
    padding: 10px !important;
    min-width: 220px !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1) !important;
    z-index: 10001 !important;
}
.site-header-apple .nav-item:hover .dropdown-menu {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateX(-50%) translateY(0) !important;
}
.site-header-apple .dropdown-menu.wide {
    display: grid !important;
    grid-template-columns: 1fr 1fr !important;
    gap: 8px !important;
    min-width: 360px !important;
}
.site-header-apple .dropdown-menu a {
    display: block !important;
    padding: 7px 12px !important;
    font-size: 13px !important;
    font-weight: 500 !important;
    color: #1d1d1f !important;
    text-decoration: none !important;
    border-radius: 8px !important;
    transition: all 0.15s ease !important;
    white-space: nowrap !important;
}
.site-header-apple .dropdown-menu a:hover {
    color: #0071e3 !important;
    background: rgba(0, 113, 227, 0.08) !important;
}
.site-header-apple .dropdown-arrow {
    position: absolute !important;
    top: -6px !important;
    left: 50% !important;
    transform: translateX(-50%) rotate(45deg) !important;
    width: 12px !important;
    height: 12px !important;
    background: rgba(255, 255, 255, 0.98) !important;
    border-left: 1px solid rgba(0, 0, 0, 0.08) !important;
    border-top: 1px solid rgba(0, 0, 0, 0.08) !important;
}
</style>

<script>
function toggleAppleMobileMenu() {
    var nav = document.getElementById('appleMobileNav');
    if (nav) {
        nav.classList.toggle('hidden');
    }
}
function toggleAppleSubmenuMobile() {
    var sub = document.getElementById('appleSubmenuMobile');
    var arrow = document.getElementById('appleArrowMobile');
    if (sub) {
        sub.classList.toggle('hidden');
    }
    if (arrow) {
        arrow.style.transform = sub && !sub.classList.contains('hidden') ? 'rotate(180deg)' : 'rotate(0deg)';
    }
}
</script>
