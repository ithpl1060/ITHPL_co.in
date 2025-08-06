<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= esc($meta['meta_title'] ?? 'Innovative Tech Hub Pvt. Ltd.') ?></title>
    <meta name="description" content="<?= esc($meta['meta_description'] ?? '') ?>">
    <meta name="keywords" content="<?= esc($meta['meta_keywords'] ?? '') ?>">

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png') ?>"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Global CSS -->
    <link rel="stylesheet" href="<?= base_url('css/global.css') ?>">

    <!-- Optional Open Graph for Social Sharing -->
    <meta property="og:title" content="<?= esc($meta['meta_title'] ?? 'Innovative Tech Hub Pvt. Ltd.') ?>">
    <meta property="og:description"
        content="<?= esc($meta['meta_description'] ?? 'Comprehensive IT solutions including AMC, Managed Services, and Data Center Management.') ?>">
    <meta property="og:image" content="<?= base_url('images/ithpllogo.png') ?>">
    <meta property="og:type" content="website">
</head>


<body>
    <header class="site-header sticky top-0 z-50 glassmorphism transition-all duration-300 ease-out">
        <div class="container max-w-7xl mx-auto px-8">
            <div class="header-container flex items-center justify-between min-h-20">

                <!-- Logo -->
                <a href="<?= base_url('/') ?>"
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

                    <!-- Home -->
                    <li class="nav-item">
                        <a href="<?= base_url('home') ?>" class="nav-hover">Home</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('#why-choose-us') ?>">Why ITHPL</a>
                            <a href="<?= base_url('#short-about') ?>">About Us</a>
                            <a href="<?= base_url('#core-values') ?>">Key Features</a>
                            <a href="<?= base_url('#products') ?>">Featured Products</a>
                            <a href="<?= base_url('#certifications') ?>">Certifications</a>
                        </div>
                    </li>

                    <!-- About Us -->
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

                    <!-- Products -->
                    <li class="nav-item">
                        <a href="#products" class="nav-hover">Products</a>
                        <!-- <div class="dropdown-menu wide">
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
                        </div> -->
                    </li>

                    <!-- Services -->
                    <li class="nav-item">
                        <a href="<?= base_url('services') ?>" class="nav-hover">Services</a>
                        <!-- <div class="dropdown-menu wide-3col">
                            <div class="dropdown-arrow"></div>
                            <div class="dropdown-column">
                                <a href="<?= base_url('ewastemanagement') ?>">E-Waste Management</a>
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
                                <a href="#">Managed Services</a>
                                <a href="#">Connectivity</a>
                            </div>
                        </div> -->
                    </li>

                    <!-- Solutions -->
                    <li class="nav-item">
                        <a href="<?= base_url('solutions') ?>" class="nav-hover">Solutions</a>
                        <!-- <div class="dropdown-menu wide">
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
                        </div> -->
                    </li>

                    <!-- Apple -->
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-hover">Apple</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('apple-work') ?>">Apple At Work</a>
                            <a href="<?= base_url('apple-business') ?>">Apple for Business</a>
                            <a href="<?= base_url('apple-enterprise') ?>">Apple for Enterprises</a>
                            <a href="<?= base_url('apple-smart-epp') ?>">Apple Smart EPP</a>
                            <a href="<?= base_url('apple#s-why') ?>">Why Apple?</a>
                        </div>
                    </li> -->

                    <!-- Sustainability -->
                    <li class="nav-item">
                        <a href="<?= base_url('sustainability') ?>" class="nav-hover">Sustainability</a>
                        <!-- <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="#">Managed Services</a>
                            <a href="#">Electronics & IT Asset Disposal</a>
                            <a href="#">Data Destruction & Cybersecurity</a>
                            <a href="#">Special Services & Corporate Programs</a>
                            <a href="#">Sustainability & Community Outreach</a>
                        </div> -->
                    </li>
                </nav>

                <!-- Contact Button -->
                <a href="<?= base_url('contact-us') ?>"
                    class="contact-button text-white font-semibold text-sm px-7 py-3.5 rounded-xl transition-all duration-300 relative overflow-hidden gradient-shine border border-white border-opacity-20 hover:shadow-xl active:scale-95"
                    style="background: linear-gradient(135deg, #d09bed 0%, #b678e3 100%);
                      box-shadow: 0 4px 14px rgba(208, 155, 237, 0.25);">
                    Contact
                </a>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav class="main-nav-mobile md:hidden" id="mobileNav">
            <div class="flex flex-col space-y-1">
                <a href="<?= base_url('home') ?>">Home</a>
                <a href="<?= base_url('about-us') ?>">About Us</a>
                <a href="#products">Products</a>
                <a href="<?= base_url('services') ?>">Services</a>
                <a href="<?= base_url('solutions') ?>">Solutions</a>
                <a href="#">Apple</a>
                <a href="<?= base_url('sustainability') ?>">Sustainability</a>
            </div>
        </nav>
    </header>

    <section id="hero-about" class="">
        <div class="hero-background-a"></div>
        <div class="container hero-content-a">

            <h1 class="hero-title-a">
                Accelerate Business Growth with Smarter
                <br>
                <span class="gradient-we">IT Solutions</span>
            </h1>

            <p class="hero-description-a">
                Scalable, secure, and future-ready services that streamline operations,
                drive innovation, and fuel long-term success.
            </p>

            <div class="hero-image-container-a">
                <img src="<?= base_url('images/solution-hero.svg'); ?>" alt="IT professionals providing support"
                    class="hero-image-s" loading="lazy" />
            </div>

        </div>
    </section>

    <section id="services-section" class="services">
        <div class="container">
            <div class="about-container-a">
                <h2 class="about-title-a">Our <span class="gradient-services">Solutions</span></h2>
            </div>
            <div class="horizontal-wrapper">
                <div class="horizontal-container" id="servicesContainer">

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/managed-services.png'); ?>" alt="Server Solutions"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Server Solutions</h3>
                        <p class="service-card-desc-s">
                            Boost performance with robust servers, ensuring high uptime, scalability, and security for
                            business-critical applications and growth.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/tools.png'); ?>" alt="Network Solutions" loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Network Solutions</h3>
                        <p class="service-card-desc-s">
                            Empower connectivity with secure, reliable, and high-performance networks, enabling seamless
                            communication and business operations.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/end-user-computing.png'); ?>" alt="Storage Solutions"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Storage Solutions</h3>
                        <p class="service-card-desc-s">
                            Unlock data potential with scalable, secure, and high-performance storage systems, ensuring
                            data availability and business intelligence.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/Cloud-solutions.png'); ?>" alt="Cloud Solutions"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Cloud Solutions</h3>
                        <p class="service-card-desc-s">
                            Accelerate business with scalable, flexible, and cost-effective cloud infrastructure,
                            enabling innovation and digital transformation.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/CyberSecurity-icon.png'); ?>" alt="Security Solutions"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Security Solutions</h3>
                        <p class="service-card-desc-s">
                            Protect business with robust security systems, ensuring threat detection, vulnerability
                            assessment, and incident response for data and systems.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/application-solution.png'); ?>" alt="Application Solutions"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Application Solutions</h3>
                        <p class="service-card-desc-s">
                            Drive innovation with custom applications, ensuring seamless user experience, improved
                            productivity, and enhanced business outcomes.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/VideoConference.png'); ?>" alt="Audio Video Solutions"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Audio Video Solutions</h3>
                        <p class="service-card-desc-s">
                            Enhance experiences with immersive AV systems, ensuring crystal-clear sound, stunning
                            visuals, and seamless integration for collaboration.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/irisScan2.png'); ?>" alt="Video Surveillance & Biometric"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Video Surveillance & Biometric Solutions</h3>
                        <p class="service-card-desc-s">
                            Secure assets with intelligent security systems, ensuring real-time monitoring, threat
                            detection, and identity verification for protection.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/circularArrows.png'); ?>" alt="Rental & Refurbished"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Rental & Refurbished</h3>
                        <p class="service-card-desc-s">
                            Save costs with flexible rental options and certified refurbished IT assets, reducing
                            e-waste and environmental impact.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                    <div class="service-card-s">
                        <div class="service-icon-s">
                            <img src="<?= base_url('images/ChargingBattery.png'); ?>" alt="Power Solutions"
                                loading="lazy">
                        </div>
                        <h3 class="service-card-title-s">Power Solutions</h3>
                        <p class="service-card-desc-s">
                            Ensure uptime with reliable power systems, including UPS, generators, and PDUs, supporting
                            business continuity and critical infrastructure.
                        </p>
                        <button class="service-card-button-s">Learn More</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="how-we-do-it-section" class="about-container-a">
        <div class="container">
            <h2 class="about-title-a">How <span class="gradient-services">We Do</span> It?</h2>
            <p class="how-subtitle mb-20">
                At Innovative, we develop and deliver innovative solutions that drive business success. Here's our
                approach:
            </p>

            <div class="solution-grid">

                <!-- Card 1 -->
                <div class="how-card-wrapper">
                    <div class="how-card card-1">
                        <div class="border-animation-container">
                            <svg class="border-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path class="border-path"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" stroke="#ff0000" stroke-width="0.2" />
                                <line class="border-line" x1="0" y1="0" x2="15" y2="0">
                                    <animateMotion dur="4s" repeatCount="indefinite" rotate="auto">
                                        <mpath href="#borderPath1" />
                                    </animateMotion>
                                </line>
                                <path id="borderPath1"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" opacity="0" />
                            </svg>
                        </div>
                        <img src="<?= base_url('images/ideation-icon.png'); ?>" alt="Ideation Icon" class="how-icon"
                            loading="lazy">
                            <!-- automatically converting to i->I so keep for now Ideation -->
                        <h3 class="how-card-title">Ideation and Design</h3>
                        <p class="how-card-desc">We collaborate to identify opportunities & craft solutions tailored to
                            your needs.</p>
                    </div>
                    <div class="how-number-circle circle-1">1</div>
                </div>

                <!-- Card 2 -->
                <div class="how-card-wrapper">
                    <div class="how-card card-2">
                        <div class="border-animation-container">
                            <svg class="border-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path class="border-path"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" stroke="#ff5e00" stroke-width="0.2" />
                                <line class="border-line" x1="0" y1="0" x2="15" y2="0">
                                    <animateMotion dur="4.5s" repeatCount="indefinite" rotate="auto">
                                        <mpath href="#borderPath2" />
                                    </animateMotion>
                                </line>
                                <path id="borderPath2"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" opacity="0" />
                            </svg>
                        </div>
                        <img src="<?= base_url('images/development-icon.png'); ?>" alt="Development Icon"
                            class="how-icon" loading="lazy">
                        <h3 class="how-card-title">Development & Testing</h3>
                        <p class="how-card-desc">Our team builds and thoroughly tests to ensure top quality and
                            performance.</p>
                    </div>
                    <div class="how-number-circle circle-2">2</div>
                </div>

                <!-- Card 3 -->
                <div class="how-card-wrapper">
                    <div class="how-card card-3">
                        <div class="border-animation-container">
                            <svg class="border-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path class="border-path"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" stroke="#5400fd" stroke-width="0.2" />
                                <line class="border-line" x1="0" y1="0" x2="15" y2="0">
                                    <animateMotion dur="3.5s" repeatCount="indefinite" rotate="auto">
                                        <mpath href="#borderPath3" />
                                    </animateMotion>
                                </line>
                                <path id="borderPath3"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" opacity="0" />
                            </svg>
                        </div>
                        <img src="<?= base_url('images/imac-settings.png'); ?>" alt="Implementation Icon"
                            class="how-icon" loading="lazy">
                        <h3 class="how-card-title">Implementation & Integration</h3>
                        <p class="how-card-desc">We seamlessly integrate solutions into your setup with minimal
                            disruption.</p>
                    </div>
                    <div class="how-number-circle circle-3">3</div>
                </div>

                <!-- Card 4 -->
                <div class="how-card-wrapper">
                    <div class="how-card card-4">
                        <div class="border-animation-container">
                            <svg class="border-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path class="border-path"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" stroke="#0040ff" stroke-width="0.2" />
                                <line class="border-line" x1="0" y1="0" x2="15" y2="0">
                                    <animateMotion dur="5s" repeatCount="indefinite" rotate="auto">
                                        <mpath href="#borderPath4" />
                                    </animateMotion>
                                </line>
                                <path id="borderPath4"
                                    d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                    fill="none" opacity="0" />
                            </svg>
                        </div>
                        <img src="<?= base_url('images/improvement-icon.png'); ?>" alt="Improvement Icon"
                            class="how-icon" loading="lazy">
                        <h3 class="how-card-title">Continuous Improvement</h3>
                        <p class="how-card-desc">We regularly refine our services to stay aligned with best practices &
                            your goals.</p>
                    </div>
                    <div class="how-number-circle circle-4">4</div>
                </div>

            </div>
        </div>
    </section>

    <section id="partners" class="">
        <h2 class="partners-title section-title-center">
            Our <span class="gradient-partners">Partners</span>
        </h2>

        <div class="container partners-container">
            <div class="partners-flex">

                <!-- Partners Text -->
                <div class="partners-text">
                    <h3 class="partners-subtitle">
                        Trusted Collaborations with Leading Technology Providers
                    </h3>
                    <ul style="list-style-type: disc">
                        <li class="partners-description">
                            We work with 65+ OEM and AV partners to offer a wide range of
                            cutting-edge IT and AV solutions...
                        </li>
                        <li class="partners-description">
                            Our partnerships include top-tier brands in hardware, software,
                            and integrated systems.
                        </li>
                        <li class="partners-description">
                            These strategic alliances allow us to deliver reliable,
                            future-ready infrastructure to our customers.
                        </li>
                    </ul>

                    <p class="partners-description">
                        We work with 65+ OEM and AV partners to offer a wide range of
                        cutting-edge IT and AV solutions...
                    </p>
                </div>

                <!-- Partners Logos -->
                <div class="partners-logos">
                    <div class="logo-scroll-wrapper">
                        <div class="logo-scroll-fade logo-scroll-fade-left"></div>
                        <div class="logo-scroll-fade logo-scroll-fade-right"></div>

                        <div class="logo-scroll-track">

                            <!-- Row 1 -->
                            <div class="logo-row partners-row-1">
                                <?php
                                $partners_row1 = [
                                    'lenovo.svg',
                                    'alogic.svg',
                                    'amazon.svg',
                                    'aruba.svg',
                                    'asus.svg',
                                    'cadyce.svg',
                                    'cisco.svg',
                                    'dell.svg'
                                ];
                                foreach ($partners_row1 as $logo): ?>
                                <div class="logo-item">
                                    <img src="<?= base_url('images/' . $logo); ?>"
                                        alt="<?= pathinfo($logo, PATHINFO_FILENAME); ?> logo" loading="lazy" />
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Row 2 -->
                            <div class="logo-row partners-row-2">
                                <?php
                                $partners_row2 = [
                                    'lg.svg',
                                    'msazure.svg',
                                    'onsitego.svg',
                                    'paloalto.svg',
                                    'samsung.svg',
                                    'scalefusion.svg',
                                    'sentinelone.svg',
                                    'sonicwall.svg',
                                    'digisol.svg',
                                    'fortinet.svg',
                                    'hikvision.svg',
                                    'jabra.svg',
                                    'jamf.svg'
                                ];
                                foreach ($partners_row2 as $logo): ?>
                                <div class="logo-item">
                                    <img src="<?= base_url('images/' . $logo); ?>"
                                        alt="<?= pathinfo($logo, PATHINFO_FILENAME); ?> logo" loading="lazy" />
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Row 3 -->
                            <div class="logo-row partners-row-3">
                                <?php
                                $partners_row3 = [
                                    'sophos.svg',
                                    'symantec.svg',
                                    'veeam.svg',
                                    'lg-logo.svg',
                                    'crestron-logo.svg',
                                    'yotta.svg',
                                    'zoho.svg',
                                    'zoom.svg',
                                    'Apple.svg',
                                    'hp.svg',
                                    'logitech-logo.svg',
                                    'poly.svg'
                                ];
                                foreach ($partners_row3 as $logo): ?>
                                <div class="logo-item">
                                    <img src="<?= base_url('images/' . $logo); ?>"
                                        alt="<?= pathinfo($logo, PATHINFO_FILENAME); ?> logo" loading="lazy" />
                                </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="subscribe" class="">
        <div class="container">
            <div class="subscribe-box">
                <h2 class="subscribe-title">
                    Get Started with ITHPL Today
                </h2>
                <p class="cta-subtitle pb-6">
                    Discover how our services can help you enjoy a hassle-free work process.
                </p>

                <!-- Dynamic Subscribe Form -->
                <form class="subscribe-form" action="<?= base_url('subscribe'); ?>" method="post">
                    <input type="email" name="email" placeholder="Enter your email" class="subscribe-input" required />
                    <button type="submit" class="subscribe-button">Submit</button>
                </form>
            </div>
        </div>
    </section>

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
                    <a href="https://www.linkedin.com/company/innovative-techhub-pvt-ltd/?viewAsMember=true"
                        target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <img src="<?= base_url('images/linkedin-logo.png'); ?>" alt="LinkedIn" loading="lazy" />
                    </a>
                    <a href="https://www.facebook.com/ithpl" target="_blank" rel="noopener noreferrer"
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

    <script src="<?= base_url('js/gsap.min.js'); ?>" defer></script>
    <script src="<?= base_url('js/ScrollToPlugin.min.js'); ?>" defer></script>
    <script src="<?= base_url('js/ScrollTrigger.min.js'); ?>" defer></script>
    <script src="<?= base_url('js/Scrollbar.js'); ?>" defer></script>

</body>

</html>
