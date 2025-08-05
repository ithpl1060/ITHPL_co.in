<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($meta['meta_title'] ?? 'Innovative Tech Hub Pvt. Ltd.') ?></title>
    <meta name="description"
        content="<?= esc($meta['meta_description'] ?? 'Your trusted IT services and solutions partner.') ?>">
    <meta name="keywords"
        content="<?= esc($meta['meta_keywords'] ?? 'IT services, IT solutions, Innovative Tech Hub') ?>">
    <meta name="author" content="Innovative Tech Hub Pvt. Ltd.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png') ?>">

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
                        <a class="nav-hover">Home</a>
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

                    <!-- Services -->
                    <li class="nav-item">
                        <a href="<?= base_url('services') ?>" class="nav-hover">Services</a>
                        <div class="dropdown-menu wide-3col">
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
                        </div>
                    </li>

                    <!-- Solutions -->
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

                    <!-- Apple -->
                    <li class="nav-item">
                        <a href="#" class="nav-hover">Apple</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="<?= base_url('apple-work') ?>">Apple At Work</a>
                            <a href="<?= base_url('apple-business') ?>">Apple for Business</a>
                            <a href="<?= base_url('apple-enterprise') ?>">Apple for Enterprises</a>
                            <a href="<?= base_url('apple-smart-epp') ?>">Apple Smart EPP</a>
                            <a href="<?= base_url('apple#s-why') ?>">Why Apple?</a>
                        </div>
                    </li>

                    <!-- Sustainability -->
                    <li class="nav-item">
                        <a href="<?= base_url('sustainability') ?>" class="nav-hover">Sustainability</a>
                        <div class="dropdown-menu single-column">
                            <div class="dropdown-arrow"></div>
                            <a href="#">Managed Services</a>
                            <a href="#">Electronics & IT Asset Disposal</a>
                            <a href="#">Data Destruction & Cybersecurity</a>
                            <a href="#">Special Services & Corporate Programs</a>
                            <a href="#">Sustainability & Community Outreach</a>
                        </div>
                    </li>
                </nav>

                <!-- Contact Button -->
                <a href="<?= base_url('contact') ?>"
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
                <a href="<?= base_url() ?>">Home</a>
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
                Drive Productivity and Growth with Reliable
                <br>
                <span class="gradient-we">IT Services</span>
            </h1>

            <p class="hero-description-a">
                End-to-end IT solutions that ensure uptime, boost efficiency, reduce costs,
                and support business expansion.
            </p>

            <div class="hero-image-container-a">
                <img src="<?= base_url('images/service-hero.png') ?>" alt="IT professionals providing support"
                    class="hero-image-s" />
            </div>
        </div>
    </section>


    <section id="services-section" class="services">
        <div class="container">
            <div class="about-container-a">
                <h2 class="about-title-a">
                    Our <span class="gradient-services">Services</span>
                </h2>
            </div>

            <div class="horizontal-wrapper">
                <div class="horizontal-container" id="servicesContainer">

                    <?php
                    $services = [
                        [
                            'icon' => 'managed-services.png',
                            'title' => 'Managed Services',
                            'desc' => 'Unlock peace of mind with expert device management, security, and support, ensuring seamless operations and maximum productivity.'
                        ],
                        [
                            'icon' => 'tools.png',
                            'title' => 'AMC & Break Fix',
                            'desc' => 'Stay protected with AMC and breakfix services, ensuring minimal downtime, expert support, and cost-effective solutions for devices.'
                        ],
                        [
                            'icon' => 'end-user-computing.png',
                            'title' => 'End User Computing',
                            'desc' => 'Empower workforce with seamless device management, secure data access, and personalized support for efficient work anywhere.'
                        ],
                        [
                            'icon' => 'database-adminstrater.png',
                            'title' => 'Data Center Management',
                            'desc' => 'Optimize data center with expert management, ensuring maximum uptime, security, and efficiency for critical infrastructure and growth.'
                        ],
                        [
                            'icon' => 'network.png',
                            'title' => 'NOC Management',
                            'desc' => 'Maximize uptime with 24/7 monitoring, proactive maintenance, and rapid incident response for smooth network operations.'
                        ],
                        [
                            'icon' => 'request-service.png',
                            'title' => 'Helpdesk Management',
                            'desc' => 'Resolve issues quickly with timely support, efficient ticketing, and effective problem-solving for minimal downtime and maximum productivity.'
                        ],
                        [
                            'icon' => 'security-pass.png',
                            'title' => 'Security Management',
                            'desc' => 'Protect business with robust threat detection, vulnerability assessment, and incident response for data and system security.'
                        ],
                        [
                            'icon' => 'android-phoen.png',
                            'title' => 'Application Management',
                            'desc' => 'Optimize applications with comprehensive support, ensuring seamless functionality, enhanced user experience, and continuous improvement.'
                        ],
                        [
                            'icon' => 'asset-management.png',
                            'title' => 'Asset Management',
                            'desc' => 'Maximize asset value with expert tracking, monitoring, and optimization, ensuring efficient utilization and cost savings.'
                        ],
                        [
                            'icon' => 'system-information.png',
                            'title' => 'Building Management System',
                            'desc' => 'Unlock smart facilities with integrated and automated building systems, optimizing energy efficiency, security, and occupant comfort.'
                        ],
                        [
                            'icon' => 'billing.png',
                            'title' => 'Procurement & Billing',
                            'desc' => 'Streamline procurement and billing with expert vendor management, automated processes, and accurate invoicing for cost savings.'
                        ],
                        [
                            'icon' => 'networking-manager.png',
                            'title' => 'Connectivity',
                            'desc' => 'Stay connected with reliable network infrastructure, ensuring fast, secure, and always-on connectivity for business operations and innovation.'
                        ],
                    ];
                    ?>

                    <?php foreach ($services as $service): ?>
                        <div class="service-card-s">
                            <div class="service-icon-s">
                                <img src="<?= base_url('images/' . $service['icon']) ?>"
                                    alt="<?= esc($service['title']) ?>">
                            </div>
                            <h3 class="service-card-title-s"><?= esc($service['title']) ?></h3>
                            <p class="service-card-desc-s"><?= esc($service['desc']) ?></p>
                            <button class="service-card-button-s">Learn More</button>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>


    <section id="how-we-do-it-section" class="about-container-a">
        <div class="container">
            <h2 class="about-title-a">
                How <span class="gradient-services">We Do</span> It?
            </h2>
            <p class="how-subtitle mb-20">
                At Innovative, we provide expert services that help businesses thrive. Here's how we deliver them:
            </p>

            <div class="how-grid">
                <?php
                $howWeDoIt = [
                    [
                        'icon' => 'assesment-icon.png',
                        'title' => 'Assessment and Planning',
                        'desc' => 'We assess your needs and create a tailored plan to address your challenges.',
                        'color' => '#ff0000',
                        'dur' => '4s'
                    ],
                    [
                        'icon' => 'execution-icon.png',
                        'title' => 'Expert Execution',
                        'desc' => 'Our skilled team delivers precise, high-quality services for outstanding results.',
                        'color' => '#ff5e00',
                        'dur' => '4.5s'
                    ],
                    [
                        'icon' => 'collaboration-icon.png',
                        'title' => 'Collaborative Approach',
                        'desc' => 'We stay closely aligned with you to meet evolving needs and expectations.',
                        'color' => '#5400fd',
                        'dur' => '3.5s'
                    ],
                    [
                        'icon' => 'improvement-icon.png',
                        'title' => 'Continuous Improvement',
                        'desc' => 'We regularly refine our services to stay aligned with best practices and your goals.',
                        'color' => '#0040ff',
                        'dur' => '5s'
                    ],
                ];
                ?>

                <?php $i = 1;
                foreach ($howWeDoIt as $step): ?>
                    <div class="how-card-wrapper">
                        <div class="how-card card-<?= $i ?>">
                            <div class="border-animation-container">
                                <svg class="border-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                                    <path class="border-path"
                                        d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                        fill="none" stroke="<?= $step['color'] ?>" stroke-width="0.2" />
                                    <line class="border-line" x1="0" y1="0" x2="15" y2="0">
                                        <animateMotion dur="<?= $step['dur'] ?>" repeatCount="indefinite" rotate="auto">
                                            <mpath href="#borderPath<?= $i ?>" />
                                        </animateMotion>
                                    </line>
                                    <path id="borderPath<?= $i ?>"
                                        d="M8,2 L92,2 Q98,2 98,8 L98,92 Q98,98 92,98 L8,98 Q2,98 2,92 L2,8 Q2,2 8,2 Z"
                                        fill="none" opacity="0" />
                                </svg>
                            </div>
                            <img src="<?= base_url('images/' . $step['icon']) ?>" alt="<?= esc($step['title']) ?>"
                                class="how-icon">
                            <h3 class="how-card-title"><?= esc($step['title']) ?></h3>
                            <p class="how-card-desc"><?= esc($step['desc']) ?></p>
                        </div>
                        <div class="how-number-circle circle-<?= $i ?>"><?= $i ?></div>
                    </div>
                    <?php $i++; endforeach; ?>
            </div>
        </div>
    </section>


    <section id="partners" class="">
        <h2 class="partners-title section-title-center">
            Our <span class="gradient-partners">Partners</span>
        </h2>

        <div class="container partners-container">
            <div class="partners-flex">

                <!-- Left Text -->
                <div class="partners-text">
                    <h3 class="partners-subtitle">
                        Trusted Collaborations with Leading Technology Providers
                    </h3>
                    <ul style="list-style-type: disc">
                        <li class="partners-description">
                            We work with 65+ OEM and AV partners to offer a wide range of cutting-edge IT and AV
                            solutions...
                        </li>
                        <li class="partners-description">
                            Our partnerships include top-tier brands in hardware, software, and integrated systems.
                        </li>
                        <li class="partners-description">
                            These strategic alliances allow us to deliver reliable, future-ready infrastructure to our
                            customers.
                        </li>
                    </ul>
                </div>

                <!-- Logos Section -->
                <div class="partners-logos">
                    <div class="logo-scroll-wrapper">
                        <div class="logo-scroll-fade logo-scroll-fade-left"></div>
                        <div class="logo-scroll-fade logo-scroll-fade-right"></div>
                        <div class="logo-scroll-track">

                            <?php
                            $partnerRows = [
                                [
                                    'lenovo.svg',
                                    'alogic.svg',
                                    'amazon.svg',
                                    'aruba.svg',
                                    'asus.svg',
                                    'cadyce.svg',
                                    'cisco.svg',
                                    'dell.svg'
                                ],
                                [
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
                                ],
                                [
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
                                ]
                            ];
                            ?>

                            <?php foreach ($partnerRows as $rowIndex => $row): ?>
                                <div class="logo-row partners-row-<?= $rowIndex + 1 ?>">
                                    <?php foreach ($row as $logo): ?>
                                        <div class="logo-item">
                                            <img src="<?= base_url('images/' . $logo) ?>"
                                                alt="<?= pathinfo($logo, PATHINFO_FILENAME) ?> logo" />
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>

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
                    <?= $subscribeTitle ?? 'Get Started with ITHPL Today' ?>
                </h2>
                <p class="cta-subtitle pb-6">
                    <?= $subscribeSubtitle ?? 'Discover how our services can help you enjoy a hassle-free work process.' ?>
                </p>

                <!-- Subscribe Form -->
                <form class="subscribe-form" method="post" action="<?= base_url('subscribe') ?>">
                    <input type="email" name="email" placeholder="Enter your email" class="subscribe-input" required />
                    <button type="submit" class="subscribe-button">Submit</button>
                </form>

                <!-- Success/Error Message -->
                <?php if (session()->getFlashdata('message')): ?>
                    <p class="text-green-500 mt-2"><?= session()->getFlashdata('message') ?></p>
                <?php endif; ?>
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
    <script src="<?= base_url('js/ScrollTrigger.min.js'); ?>" defer></script>
    <script src="<?= base_url('js/Scrollbar.js'); ?>" defer></script>

</body>

</html>