<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= esc($meta['meta_title'] ?? 'Innovative Tech Hub Pvt. Ltd.') ?></title>
    <meta name="description" content="<?= esc($meta['meta_description'] ?? '') ?>">
    <meta name="keywords" content="<?= esc($meta['meta_keywords'] ?? '') ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('css/global.css') ?>" />
</head>

<body style="min-height: 100vh">
    <header class="site-header sticky top-0 z-50 glassmorphism transition-all duration-300 ease-out">
        <div class="container max-w-7xl mx-auto px-8">
            <div class="header-container flex items-center justify-between min-h-20">
                <!-- Logo -->
                <a href="<?= base_url('home') ?>"
                    class="logo flex items-center relative logo-glow transition-transform duration-300 hover:scale-105">
                    <img src="<?= base_url('images/ithpllogo.png') ?>" alt="ITHPL Logo"
                        class="h-12 w-auto object-contain transition-all duration-300"
                        style="filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.1))" />
                </a>

                <!-- Mobile Menu Toggle -->
                <button
                    class="mobile-menu-toggle md:hidden flex flex-col cursor-pointer p-2 rounded-lg transition-colors duration-300 hover:bg-brand-purple hover:bg-opacity-10"
                    onclick="toggleMobileMenu()">
                    <span class="w-6 h-0.5 bg-slate-600 mb-1 transition-all duration-300 rounded-full"></span>
                    <span class="w-6 h-0.5 bg-slate-600 mb-1 transition-all duration-300 rounded-full"></span>
                    <span class="w-6 h-0.5 bg-slate-600 transition-all duration-300 rounded-full"></span>
                </button>

                <!-- Desktop Navigation -->
                <nav class="main-nav hidden md:flex items-center gap-2 mx-auto">
                    <li class="nav-item">
                        <a href="<?= base_url('home') ?>" class="nav-hover">Home</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('home#why-choose-us') ?>">Why ITHPL</a>
                            <a href="<?= base_url('home#short-about') ?>">About Us</a>
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
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('products') ?>" class="nav-hover">Products</a>
                        <div class="dropdown-menu wide">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-column">
                                <a href="#">End Point</a>
                                <a href="#">Hand Held</a>
                                <a href="#">Journey</a>
                                <a href="#">Printing & Scanning</a>
                                <a href="#">Visual Display</a>
                            </div>
                            <div class="dropdown-column">
                                <a href="#">Peripheral</a>
                                <a href="#">License</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('services') ?>" class="nav-hover">Services</a>
                        <div class="dropdown-menu wide-3col">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-column">
                                <a href="#">Managed Services</a>
                                <a href="#">AMC & Break Fix</a>
                                <a href="#">End User Computing</a>
                                <a href="#">Data Center Management</a>
                                <a href="#">NOC Management</a>
                            </div>
                            <div class="dropdown-column">
                                <a href="#">Helpdesk Management</a>
                                <a href="#">Security Management</a>
                                <a href="#">Asset Management</a>
                                <a href="#">Building Management System</a>
                                <a href="#">Procurement & Billing</a>
                            </div>
                            <div class="dropdown-column">
                                <a href="#">E-Waste Management</a>
                                <a href="#">Connectivity</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('solutions') ?>" class="nav-hover">Solutions</a>
                        <div class="dropdown-menu wide">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-column">
                                <a href="#">Server Solutions</a>
                                <a href="#">Network Solutions</a>
                                <a href="#">Storage Solutions</a>
                                <a href="#">Cloud Solutions</a>
                                <a href="#">Security Solutions</a>
                            </div>
                            <div class="dropdown-column">
                                <a href="#">Application Solutions</a>
                                <a href="#">Audio Video Solutions</a>
                                <a href="#">Video Surveillance & Biometric</a>
                                <a href="#">Rental & Refurbished</a>
                                <a href="#">Power</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('apple') ?>" class="nav-hover">Apple</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('apple-work') ?>">Apple At Work</a>
                            <a href="<?= base_url('apple-business') ?>">Apple for Business</a>
                            <a href="<?= base_url('apple-enterprises') ?>">Apple for Enterprises</a>
                            <a href="<?= base_url('apple-smart-epp') ?>">Apple Smart EPP</a>
                            <a href="<?= base_url('apple#s-why') ?>">Why Apple?</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('sustainability') ?>" class="nav-hover">Sustainability</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('ewaste-management') ?>">E-Waste Management</a>
                            <a href="#">Electronics & IT Asset Disposal</a>
                            <a href="#">Data Destruction & Cybersecurity</a>
                            <a href="#">Special Services & Corporate Programs</a>
                            <a href="#">Sustainability & Community Outreach</a>
                        </div>
                    </li>
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
            <div class="flex flex-col space-y-1">
                <a href="<?= base_url('home') ?>">Home</a>
                <a href="<?= base_url('about-us') ?>">About Us</a>
                <a href="<?= base_url('products') ?>">Products</a>
                <a href="<?= base_url('services') ?>">Services</a>
                <a href="<?= base_url('solutions') ?>">Solutions</a>
                <a href="<?= base_url('apple') ?>">Apple</a>
                <a href="<?= base_url('sustainability') ?>">Sustainability</a>
            </div>
        </nav>
        <style id="sections-styles">
            h3 {
                font-weight: 700;
                padding: 10px 0;
            }
        </style>
    </header>
    <main>