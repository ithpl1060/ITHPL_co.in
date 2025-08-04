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
        <style>
            .hero-section-s {
                min-height: 100vh;
                position: relative;
                overflow: hidden;
                display: flex;
                align-items: center;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
            }


            .hero-bg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 0;
            }

            .hero-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Gradient overlay */
            .hero-bg::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 3.85%, rgba(170, 170, 170, 0.25) 44.24%, rgba(0, 0, 0, 0.25) 100%);
                backdrop-filter: blur(2.399999618530273px);
            }

            .hero-content-wrapper {
                width: 100%;
                max-width: 1400px;
                margin: 0 auto;
                position: relative;
                z-index: 1;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-around;

            }

            .hero-content {
                flex: 1;
                max-width: 600px;
                padding: 50px;
            }

            .content-slider {
                position: relative;
                min-height: 250px;

            }

            .content-slide {
                position: absolute;
                opacity: 0;
                transform: translateY(20px);
                transition: all var(--transition-duration) ease;
            }



            .content-slide.active {
                opacity: 1;

                transform: translateY(0);
                position: relative;
            }

            .hero-content h1 {
                color: #fff;
                font-size: 3.2rem;
                line-height: 1.2;
                margin-bottom: 20px;
                font-weight: 700;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            }



            .hero-content p {
                color: rgba(255, 255, 255, 0.9);
                font-size: 1.2rem;
                line-height: 1.6;
                margin-bottom: 30px;
            }


            .image-carousel-container {
                flex: 1;
                position: relative;
                width: 100%;
                height: 300px;
                min-height: 200px;
                max-width: 370px;


            }

            .image-carousel {

                width: 100%;
                height: 100%;


            }



            .carousel-slide {
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: 0;
                transform: scale(1.1);
                transition: all var(--transition-duration) ease;
                border-radius: 15px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            }

            .carousel-slide.active {
                opacity: 1;
                transform: scale(1);

            }

            /* Responsive Design */
            @media (max-width: 1400px) {
                .hero-content-wrapper {
                    padding: 0 40px;
                }
            }

            @media (max-width: 1200px) {
                .hero-content-wrapper {
                    flex-direction: column;
                    gap: 40px;
                    padding: 0 30px;
                }

                .image-carousel-container {
                    height: 400px;
                    min-height: 350px;
                    order: -1;
                    max-width: 100%;
                }

                .hero-content {
                    max-width: 100%;
                    flex: none;
                }
            }

            @media (max-width: 768px) {
                .hero-content-wrapper {
                    padding: 0 20px;
                    gap: 30px;
                }

                .hero-content {
                    padding: 30px;
                }

                .hero-content h1 {
                    font-size: 2.5rem;
                }

                .image-carousel-container {
                    height: 300px;
                    min-height: 250px;
                }
            }

            @media (max-width: 640px) {
                .hero-content-wrapper {
                    padding: 0 15px;
                }

                .hero-content {
                    padding: 25px;
                }

                .hero-content h1 {
                    font-size: 2.2rem;
                }

                .image-carousel-container {
                    height: 280px;
                    min-height: 220px;
                }
            }

            @media (max-width: 480px) {
                .hero-content h1 {
                    font-size: 2rem;
                }

                .hero-content p {
                    font-size: 1rem;
                }

                .image-carousel-container {
                    height: 250px;
                    min-height: 200px;
                }

                .hero-content {
                    padding: 20px;
                }
            }

            @media (max-width: 400px) {
                .hero-content h1 {
                    font-size: 1.8rem;
                }

                .image-carousel-container {
                    padding-left: 40px;
                    height: 220px;
                    min-height: 180px;
                }

                .hero-content {
                    padding: 15px;
                }

                .hero-button {
                    padding: 12px 24px;
                    font-size: 0.9rem;
                }
            }

            /* Landscape mobile orientation */
            @media (max-height: 500px) and (orientation: landscape) {
                .hero-section-s {

                    min-height: auto;
                    padding: 40px 0;
                }

                .hero-content-wrapper {
                    flex-direction: row;
                    gap: 30px;
                }

                .image-carousel-container {
                    height: 250px;
                    order: 0;
                    flex: 0.8;

                }

                .hero-content {
                    flex: 1.2;
                    padding: 20px;
                }

                .content-slider {
                    min-height: 150px;
                }

                .hero-content h1 {
                    font-size: 1.8rem;
                    margin-bottom: 10px;
                }

                .hero-content p {
                    font-size: 0.9rem;
                    margin-bottom: 15px;
                }
            }

            /* Animations */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            .hero-content {
                animation: fadeIn 1s ease-out;
            }

            .image-carousel {
                animation: fadeIn 1s ease-out 0.3s both;
            }


            /* CSS for section section:why-sustainability */
            .why-sustainability-content {
                display: flex;
                align-items: center;
                gap: 60px;
            }

            .why-sustainability-image {
                flex: 0 0 550px;
            }

            .why-sustainability-image img {
                width: 100%;
                height: auto;
                border-radius: 16px;
            }

            .why-sustainability-text {
                flex: 1;
            }

            .why-sustainability-text h3 {
                font-size: 42px;
                font-weight: 600;
                line-height: 1.2;
                color: var(--text-light);
                margin-bottom: 24px;
            }

            .why-sustainability-text p {
                font-size: 33px;
                line-height: 1.5;
                margin-bottom: 40px;
            }

            .why-sustainability-text p strong {
                font-weight: 600;
            }

            @media (max-width: 992px) {
                .why-sustainability-content {
                    flex-direction: column;
                    gap: 40px;
                }

                .why-sustainability-image {
                    flex: 0 0 auto;
                    width: 100%;
                    max-width: 550px;
                }

                .why-sustainability-text {
                    text-align: center;
                }

                .why-sustainability-text p {
                    font-size: 24px;
                }
            }

            .subscribe-button-s {
                padding: 10px 20px;
                border: none;
                background: #42AE40;
                ;
                backdrop-filter: blur(15px);
                -webkit-backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: #ffffff;
                font-size: 16px;
                border-radius: 5px;
                cursor: pointer;
                box-shadow: 0px 6px 9px 0px rgba(8, 142, 42, 0.2);
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .subscribe-button-s::before {
                content: "";
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg,
                        transparent,
                        rgba(255, 255, 255, 0.3),
                        transparent);
                transition: left 0.5s ease;
            }

            .subscribe-button-s:hover::before {
                left: 100%;
            }

            .subscribe-button-s:hover {
                background: #2a8428;
                ;
                transform: translateY(-2px);
                box-shadow: 0px 10px 18px 0px rgba(48, 174, 42, 0.4);
            }


            /* CSS for section section:initiatives */

            .initiatives-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 30px;
                padding: 20px;
                max-width: 1200px;
                margin: 0 auto;
            }

            .initiative-card {
                width: 100%;
                position: relative;
            }

            .initiative-image-wrapper {
                aspect-ratio: 1/1;
                width: 100%;
                perspective: 1000px;
                cursor: pointer;
                position: relative;
            }


            .initiative-icon {
                position: absolute;
                left: 50%;
                bottom: 0;
                transform: translate(-50%, 50%);
                width: 95px;
                height: 95px;
                z-index: 10;
                pointer-events: none;
            }


            .initiative-icon .icon-bg,
            .initiative-icon .icon-fg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 1 !important;
                visibility: visible !important;
            }

            .initiative-icon .icon-fg {
                object-fit: contain;
                padding: 10px;
                z-index: 2;
            }


            .card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                transition: transform 0.6s;
                transform-style: preserve-3d;
            }

            .initiative-image-wrapper:hover .card-inner {
                transform: rotateY(180deg);
            }


            .card-front,
            .card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                border-radius: 14px;
                overflow: hidden;
            }



            .card-front img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }


            .card-back {
                background: rgba(255, 255, 255);
                backdrop-filter: blur(80px);
                -webkit-backdrop-filter: blur(80px);
                transform: rotateY(180deg);
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
                color: #ffffff;
                font-size: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.3);
            }



            .card-back::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: inherit;
                background-size: cover;
                background-position: center;
                opacity: 0.5;
                z-index: -1;
            }

            .initiative-card p {
                text-align: center;
                margin-top: 50px;
                font-weight: 600;
                color: #000000;
            }

            @media (max-width: 1024px) {
                .initiatives-grid {
                    grid-template-columns: repeat(3, 1fr);
                    gap: 25px;
                }

                .initiative-icon {
                    width: 85px;
                    height: 85px;
                }
            }

            @media (max-width: 768px) {
                .initiatives-grid {
                    grid-template-columns: repeat(2, 1fr);
                    gap: 20px;
                }

                .initiative-icon {
                    width: 75px;
                    height: 75px;
                }

                .card-back {
                    padding: 15px;
                    font-size: 14px;
                }
            }

            @media (max-width: 480px) {
                .initiatives-grid {
                    grid-template-columns: 1fr;
                    gap: 15px;
                    padding: 15px;
                }

                .initiative-icon {
                    width: 65px;
                    height: 65px;
                }

                .initiative-card p {
                    margin-top: 40px;
                    font-size: 14px;
                }
            }


            @media (max-width: 360px) {
                .initiative-icon {
                    width: 55px;
                    height: 55px;
                }

                .card-back {
                    padding: 10px;
                    font-size: 13px;
                }
            }


            @media (hover: none) {
                .initiative-image-wrapper:hover .card-inner {
                    transform: none;
                }

                .initiative-image-wrapper.flipped .card-inner {
                    transform: rotateY(180deg);
                }
            }

            /* CSS for section section:certified */
            .certified-content {
                display: flex;
                align-items: center;
                gap: 40px;
                padding-left: 20px;
            }

            .certified-image {
                position: relative;
                flex: 0 0 537px;
            }

            .certified-image>img {
                width: 100%;
                border-radius: 14px;
                display: block;
            }

            .certified-badge {
                position: absolute;
                left: 0;
                bottom: 0;
                transform: translate(-20%, 20%);
                width: 171px;
                height: 171px;
            }

            .certified-badge .badge-bg,
            .certified-badge .badge-fg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .certified-badge .badge-fg {
                object-fit: contain;
                padding: 10px;
            }

            .certified-text {
                flex: 1;
            }

            .certified-header {
                display: flex;
                align-items: center;
                gap: 15px;
                margin-bottom: 16px;
            }

            .eco-label-icon {
                width: 74px;
                height: auto;
            }

            .certified-text h3 {
                font-size: 40px;
                font-weight: 600;
                line-height: 1.2;
            }

            .certified-subtitle {
                font-size: 22px;
                line-height: 1.5;
                margin-bottom: 24px;
            }

            .certified-text ul {
                list-style-type: '• ';
                padding-left: 20px;
                margin: 0;
            }

            .certified-text li {
                font-size: 16px;
                font-weight: 300;
                line-height: 1.5;
                margin-bottom: 12px;
            }

            @media (max-width: 992px) {
                .certified-content {
                    flex-direction: column;
                }

                .certified-image {
                    flex: 0 0 auto;
                    width: 100%;
                    max-width: 537px;
                }

                .certified-text h3 {
                    font-size: 32px;
                }

                .certified-subtitle {
                    font-size: 24px;
                }

                .certified-text li {
                    font-size: 20px;
                }
            }

            /* CSS for section section:timeline */
            .timeline-section {
                padding-bottom: 120px;
            }

            .timeline-wrapper {
                position: relative;
                padding: 40px 20px;
                border-radius: 12px;
                background-color: rgba(255, 255, 255, 0.03);
                backdrop-filter: blur(2px);
                box-shadow: 7px 12px 27px 0px rgba(67, 232, 34, 0.34);
            }

            .timeline-bg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
                z-index: -1;
                border-radius: 12px;
            }

            .timeline-bg-img1,
            .timeline-bg-img2 {
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* .timeline-bg-img1 { top: -15px; } */
            .timeline-bg-img2 {
                top: 15px;
            }

            .timeline-items {
                display: flex;
                justify-content: space-around;
                position: relative;
                padding-bottom: 200px;
            }

            .timeline-item {
                text-align: left;
                max-width: 200px;
                position: relative;
                padding-left: 20px;
            }

            .timeline-item::before {
                content: '';
                position: absolute;
                left: 0;
                top: 0;
                width: 2px;
                height: 100%;
                background-color: var(--green-primary);
            }

            .timeline-item h4 {
                font-size: 28px;
                font-weight: 600;
                line-height: 1.2;
            }

            .timeline-item h5 {
                font-size: 22px;
                font-weight: 500;
                margin: 8px 0;
            }

            .timeline-item p {
                font-size: 20px;
                font-weight: 500;
                line-height: 1.4;
            }

            @media (max-width: 1200px) {
                .timeline-items {
                    flex-wrap: wrap;
                    gap: 40px;
                    justify-content: center;
                    padding-top: 20px;
                }

                .timeline-item {
                    flex-basis: 40%;
                }
            }

            @media (max-width: 768px) {
                .timeline-items {
                    flex-direction: column;
                    align-items: center;
                }

                .timeline-item {
                    flex-basis: auto;
                    width: 100%;
                    max-width: 300px;
                    text-align: left;
                }
            }

            @keyframes wave {
                0% {
                    transform: translateY(0) scaleY(1);
                }

                50% {
                    transform: translateY(-4px) scaleY(0.95);
                }

                /* Moves up */
                100% {
                    transform: translateY(0) scaleY(1);
                }
            }

            .animate-wave {
                animation: wave 3s ease-in-out infinite;
            }

            .animate-pulse-slow {
                animation: pulse 8s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            }

            @keyframes pulse {

                0%,
                100% {
                    opacity: 0.8;
                }

                50% {
                    opacity: 0.9;
                }
            }

            /* CSS for section section:cta */
            .cta-section {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 500px;
                padding-left: 60px;
                padding-right: 20px;
            }

            .cta-bg {
                position: absolute;
                bottom: 20%;
                right: 15%;

                width: 1000px;
                height: 400px;

                z-index: -1;
            }

            .cta-bg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 20px;

            }

            .cta-content {
                background-color: rgba(255, 255, 255, 0.21);
                border-radius: 19px;
                backdrop-filter: blur(10px);
                padding: 50px;
                max-width: 1032px;
                width: 100%;
                text-align: left;
                box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            }

            .cta-content h2 {
                font-size: 53px;
                font-weight: 700;
                line-height: 1.2;
                color: var(--text-light);
                margin-bottom: 20px;
            }

            .cta-content p {
                font-family: 'Poppins', sans-serif;
                font-size: 30px;
                line-height: 1.5;
                color: var(--text-light);
                margin-bottom: 40px;
            }

            @media (max-width: 768px) {
                .cta-content {
                    padding: 30px;
                    text-align: center;
                }

                .cta-content h2 {
                    font-size: 36px;
                }

                .cta-content p {
                    font-size: 20px;
                }
            }
        </style>
        </head>

        <body style="min-height: 100vh">

            <header class="site-header sticky top-0 z-50 glassmorphism transition-all duration-300 ease-out">
                <div class="container max-w-7xl mx-auto px-8">
                    <div class="header-container flex items-center justify-between min-h-20">
                        <!-- Logo -->
                        <a href="#"
                            class="logo flex items-center relative logo-glow transition-transform duration-300 hover:scale-105">
                            <img src="<?= base_url(relativePath: 'images/ithpllogo.png'); ?>" alt="ITHPL Logo"
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


                        <nav class="main-nav hidden md:flex items-center gap-2 mx-auto">
                            <!-- Home -->
                            <li class="nav-item">
                                <a class="nav-hover">Home</a>
                                <div class="dropdown-menu   single-column">
                                    <div class="dropdown-arrow"></div>
                                    <a href="index.html#why-choose-us">Why ITHPL</a>
                                    <a href="index.html#short-about">About Us</a>
                                    <a href="index.html#core-values">Key Features</a>
                                    <a href="index.html#products">Featured Products</a>
                                    <a href="index.html#certifications">Certifications</a>
                                </div>
                            </li>

                            <!-- About Us -->
                            <li class="nav-item">
                                <a href="aboutus.html" class="nav-hover">About Us</a>
                                <div class="dropdown-menu wide">
                                    <div class="dropdown-arrow"></div>
                                    <div class="dropdown-column">
                                        <a href="aboutus.html#about-a">Who We Are</a>
                                        <a href="aboutus.html#drives-us-a">Mission, Vision & Value</a>
                                        <a href="aboutus.html#journey">Journey</a>
                                        <a href="aboutus.html#core-team">Core Team</a>
                                        <a href="aboutus.html#partners">Partners</a>
                                    </div>
                                    <div class="dropdown-column">
                                        <a href="aboutus.html#clients">Customers</a>
                                        <a href="aboutus.html#testimonials">Testimonials</a>
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
                                <a href="services.html" class="nav-hover">Services</a>
                                <div class="dropdown-menu wide-3col">
                                    <div class="dropdown-arrow"></div>
                                    <div class="dropdown-column">
                                        <a href="ewastemanagement.html">E-Waste Management</a>
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
                                <a href="solutions.html" class="nav-hover">Solutions</a>
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
                                    <a href="apple-work.html">Apple At Work</a>
                                    <a href="apple-business.html">Apple for Business</a>
                                    <a href="apple-enterprise.html">Apple for Enterprises</a>
                                    <a href="apple-smart-epp.html">Apple Smart EPP</a>
                                    <a href="apple.html#s-why">Why Apple?</a>
                                </div>
                            </li>


                            <!-- Sustainability -->
                            <li class="nav-item">
                                <a href="sustainabilty.html" class="nav-hover">Sustainability</a>
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
                        <a href="contact.html"
                            class="contact-button text-white font-semibold text-sm px-7 py-3.5 rounded-xl transition-all duration-300 relative overflow-hidden gradient-shine border border-white border-opacity-20 hover:shadow-xl active:scale-95"
                            style="
              background: #87a862;
              box-shadow: 0 4px 14px rgba(37, 170, 55, 0.34);
              transform: translateY(0);
            " onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(37, 170, 55, 0.4)'"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 14px rgba(37, 170, 55, 0.4)'"
                            onmousedown="this.style.transform='translateY(-1px)'"
                            onmouseup="this.style.transform='translateY(-3px)'">
                            Contact
                        </a>
                    </div>
                </div>

                <!-- Mobile Navigation -->
                <nav class="main-nav-mobile md:hidden" id="mobileNav">
                    <div class="flex flex-col space-y-1">
                        <a href="index.html">Home</a>
                        <a href="AboutUs.html">About Us</a>
                        <a href="#products">Products</a>
                        <a href="services.html">Services</a>
                        <a href="solutions.html">Solutions</a>
                        <a href="#">Apple</a>
                        <a href="sustainabilty.html">Sustainability</a>
                    </div>
                </nav>
            </header>

            <section class="hero-section-s">
                <div class="hero-bg">
                    <img src="<?= base_url(relativePath: 'images/abstract-green-bg.png'); ?>" alt="Abstract green background">
                </div>
                <div class="hero-content-wrapper">
                    <div class="hero-content">
                        <div class="content-slider">
                            <div class="content-slide active">
                                <h1>Greening <span class="gradient-sustain">Our Future,</span> One Tree at a Time.</h1>
                                <p>Through regular plantation drives, we're growing green cover and cultivating a more
                                    sustainable future.</p>
                            </div>
                            <div class="content-slide">
                                <h1>Turning Pages into <span class="gradient-sustain">Digital Pixels.</span></h1>
                                <p>We've embraced digital alternatives across our operations to significantly cut down
                                    on paper usage.</p>
                            </div>
                            <div class="content-slide">
                                <h1>Clean Energy, Smarter Moves <span class="gradient-sustain">Greener Choices.</span>
                                </h1>
                                <p>From electric vehicles to energy-efficient Macs, we're investing in clean energy and
                                    smarter technology.</p>
                            </div>
                        </div>
                        <div class="hero-buttons">
                            <a href="#section-initiatives" class="hero-button">Explore More</a>
                        </div>
                    </div>

                    <div class="image-carousel-container ">
                        <div class="image-carousel ">
                            <div class="carousel-inner ">
                                <img src="<?= base_url(relativePath: 'images/tree-planting.png'); ?>" alt="Tree planting" class="carousel-slide ">
                                <img src="<?= base_url(relativePath: 'images/recycle-paper.png'); ?>" alt="Digital workplace"
                                    class="carousel-slide active">
                                <img src="<?= base_url(relativePath: 'images/renewable-energy.png'); ?>" alt="Clean energy solutions"
                                    class="carousel-slide">
                            </div>
                        </div>
                    </div>
                </div>
            </section>









            <section id="section-why-sustainability" class="page-container">
                <h2 class="section-title">Why <span class="gradient-susatcore">Sustainability</span>?</h2>
                <div class="why-sustainability-content">
                    <div class="why-sustainability-image">
                        <img src="<?= base_url(relativePath: 'images/sustainable_activities.png'); ?>" alt="Collage of sustainable activities">
                    </div>
                    <div class="why-sustainability-text">
                        <h3>The Case for Sustainability</h3>
                        <p>At <strong>ITHPL</strong>, we understand the growing impact of the tech industry, from rising
                            <strong>e-waste to high energy</strong> use. That’s why we are making conscious choices
                            every day to <strong>reduce our impact</strong> and move toward a <strong>greener
                                future.</strong></p>
                        <div class="hero-buttons">
                            <a href="#section-initiatives" class="hero-button mt-2 sm:m-4">Explore Our Initiatives</a>
                        </div>




                    </div>
                </div>
            </section>

            <section id="section-initiatives" class="page-container">
                <h2 class="section-title">What We're <span class="gradient-sustain2">Doing?</span></h2>
                <div class="initiatives-grid">

                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="green-circle" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/zero-printout-icon.png'); ?>" alt="Zero Printouts Icon" class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/office_with_no_print.png'); ?>" alt="Office with no printouts">
                                </div>
                                <div class="card-back" style="background-image: url('images/office_with_no_print.png')">
                                    <p>Going fully digital has helped us cut down unnecessary paper use.</p>
                                </div>
                            </div>
                        </div>
                        <p>Zero Printouts</p>
                    </div>


                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/hand-icon.png'); ?>" alt="Hand Icon" class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/hand_dryer.png'); ?>" alt="Hand dryer in a washroom">
                                </div>
                                <div class="card-back" style="background-image: url('images/hand_dryer.png')">
                                    <p>Reducing paper waste in all our facilities.</p>
                                </div>
                            </div>
                        </div>
                        <p>Hand Dryers, Not Tissues</p>
                    </div>


                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/led_bulb_icon.png'); ?>" alt="LED Bulb Icon" class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/led_bulbs.png'); ?>" alt="LED light bulbs">
                                </div>
                                <div class="card-back" style="background-image: url('images/led_bulbs.png')">
                                    <p>All our workspaces use energy-efficient LED lighting.</p>
                                </div>
                            </div>
                        </div>
                        <p>LED Lighting</p>
                    </div>


                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/solar_icon_energy.png'); ?>" alt="Solar Energy Icon" class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/solar_panels.png'); ?>" alt="Solar panels in a field">
                                </div>
                                <div class="card-back" style="background-image: url('images/solar-energy.jpg')">
                                    <p>10% of our power needs are met via solar panels and we’re expanding further..</p>
                                </div>
                            </div>
                        </div>
                        <p>Solar Energy Usage</p>
                    </div>

                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/packaging_icon.png'); ?>" alt="Packaging Icon" class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/eco_friendly_card.png'); ?>" alt="Eco-friendly cardboard boxes">
                                </div>
                                <div class="card-back" style="background-image: url('images/eco_friendly_card.png')">
                                    <p>We’ve switched to biodegradable or recyclable packaging for all shipments.</p>
                                </div>
                            </div>
                        </div>
                        <p>Eco-Conscious Packaging</p>
                    </div>


                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/waste-segragation-icon.png'); ?>" alt="Waste Segregation Icon"
                                    class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/segragated-waste-bins.png'); ?>" alt="Segregated waste bins">
                                </div>
                                <div class="card-back"
                                    style="background-image: url('images/segragated-waste-bins.png')">
                                    <p>Our teams are trained to separate recyclables, e-waste, and general waste..</p>
                                </div>
                            </div>
                        </div>
                        <p>Waste Segregation</p>
                    </div>


                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/recycle_icon.png'); ?>" alt="Recycle Icon" class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/waste-bins.png'); ?>" alt="Waste bin with recyclable materials">
                                </div>
                                <div class="card-back" style="background-image: url('images/waste-bins.png')">
                                    <p>Active internal and client recycling programs to dispose of e-waste responsibly..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p>Recycling Programs</p>
                    </div>

                    <div class="initiative-card">
                        <div class="initiative-image-wrapper">
                            <div class="initiative-icon">
                                <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                <img src="<?= base_url(relativePath: 'images/glass-icon.png'); ?>" alt="Glass Icon" class="icon-fg">
                            </div>
                            <div class="card-inner">
                                <div class="card-front">
                                    <img src="<?= base_url(relativePath: 'images/glass-bottles.png'); ?>" alt="Glass bottle instead of plastic">
                                </div>
                                <div class="card-back" style="background-image: url('images/glass-bottles.png')">
                                    <p>We've eliminated plastic bottles and now use glass containers to reduce
                                        single-use plastic.</p>
                                </div>
                            </div>
                        </div>
                        <p>Glass Over Plastic</p>
                    </div>
                </div>
            </section>

            <section id="section-certified" class="page-container">
                <h2 class="section-title">Certified for a <span class="gradient-sustain2">Greener Tomorrow</span></h2>
                <div class="certified-content">
                    <div class="certified-image">
                        <img src="<?= base_url(relativePath: 'images/plant-growing-from-coins.png'); ?>"
                            alt="Plant growing from coins with sustainability icons">
                        <!--merged image-->
                        <div class="certified-badge">
                            <img src="<?= base_url(relativePath: 'images/eclipse-white.png'); ?>" alt="" class="badge-bg">
                            <img src="<?= base_url(relativePath: 'images/iso-14001-certified.png'); ?>" alt="ISO 14001 Certified Badge" class="badge-fg">
                        </div>
                    </div>
                    <div class="certified-text">
                        <div class="certified-header">
                            <img src="<?= base_url(relativePath: 'images/eco-label-icon.png'); ?>" alt="Eco Label Icon" class="eco-label-icon">
                            <h3>ISO 14001:2015 Certified</h3>
                        </div>
                        <p class="certified-subtitle">We’re proud to hold an internationally recognized certification
                            for environmental responsibility.</p>
                        <ul>
                            <li>Certified for Environmental Management System (EMS)</li>
                            <li>Follows the ISO 14001:2015 global standard</li>
                            <li>Ensures waste reduction, energy conservation & pollution control</li>
                            <li>Reflects our ongoing commitment to sustainable operations</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="section-timeline" class="timeline-section">
                <div class="page-container">
                    <h2 class="section-title">
                        Towards <span class="gradient-sustain2">Net Zero</span> by 2030
                    </h2>

                    <div class="timeline-wrapper">
                        <div class="timeline-container">
                            <img src="<?= base_url(relativePath: 'images/Milestone.gif'); ?>" alt="Milestone" class="timeline-animation" />
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-impact" class="py-16 px-4 bg-gray-50">
                <h2 class="text-center text-4xl md:text-5xl font-bold mb-16">Our <span
                        class="gradient-sustain2">Impact</span> in Numbers</h2>

                <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">

                    <div class="impact-item group">
                        <div
                            class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                            < <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90">
                        </div>


                        <div class="liquid-container absolute bottom-0 w-full h-[68%] overflow-hidden">
                            <svg viewBox="0 0 200 200" preserveAspectRatio="none" class="w-full h-full animate-wave">
                                <defs>
                                    <linearGradient id="liquid-green" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#1BA109" />
                                        <stop offset="100%" stop-color="#0A3B03" />
                                    </linearGradient>
                                </defs>
                                <path fill="url(#liquid-green)" d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                            </svg>
                        </div>

                        <!-- Glass Effect -->
                        <div
                            class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                        </div>

                        <!-- Number -->
                        <span class="relative z-10 text-5xl font-bold text-gray-900 drop-shadow-lg">68%</span>
                    </div>
                    <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">Waste Reduced</p>
                </div>

                <!-- CO₂ Saved - 124/150 = 82.67% -->
                <div class="impact-item group">
                    <div
                        class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                        <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90"></div>

                        <div class="liquid-container absolute bottom-0 w-full h-[82.67%] overflow-hidden">
                            <svg viewBox="0 0 200 200" preserveAspectRatio="none" class="w-full h-full animate-wave"
                                style="animation-duration: 5s">
                                <defs>
                                    <linearGradient id="liquid-green-2" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#1BA109" />
                                        <stop offset="100%" stop-color="#0A3B03" />
                                    </linearGradient>
                                </defs>
                                <path fill="url(#liquid-green-2)"
                                    d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                            </svg>
                        </div>

                        <div
                            class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                        </div>
                        <span class="relative z-10 text-5xl font-bold text-gray-900 drop-shadow-lg">124T</span>
                    </div>
                    <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">CO₂ Saved</p>
                </div>

                <!-- Printouts Avoided - 1.2/1.5 = 80% -->
                <div class="impact-item group">
                    <div
                        class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                        <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90"></div>

                        <div class="liquid-container absolute bottom-0 w-full h-[80%] overflow-hidden">
                            <svg viewBox="0 0 200 200" preserveAspectRatio="none" class="w-full h-full animate-wave"
                                style="animation-duration: 4s">
                                <defs>
                                    <linearGradient id="liquid-green-3" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#1BA109" />
                                        <stop offset="100%" stop-color="#0A3B03" />
                                    </linearGradient>
                                </defs>
                                <path fill="url(#liquid-green-3)"
                                    d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                            </svg>
                        </div>

                        <div
                            class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                        </div>
                        <span class="relative z-10 text-5xl font-bold text-gray-900 drop-shadow-lg">1.2M</span>
                    </div>
                    <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">Printouts Avoided</p>
                </div>

                <!-- Plastic Saved - 4300/5000 = 86% -->
                <div class="impact-item group">
                    <div
                        class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                        <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90"></div>

                        <div class="liquid-container absolute bottom-0 w-full h-[86%] overflow-hidden">
                            <svg viewBox="0 0 200 200" preserveAspectRatio="none" class="w-full h-full animate-wave"
                                style="animation-duration: 7s">
                                <defs>
                                    <linearGradient id="liquid-green-4" x1="0%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#1BA109" />
                                        <stop offset="100%" stop-color="#0A3B03" />
                                    </linearGradient>
                                </defs>
                                <path fill="url(#liquid-green-4)"
                                    d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                            </svg>
                        </div>

                        <div
                            class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                        </div>
                        <span class="relative z-10 text-4xl font-bold text-gray-900 drop-shadow-lg">4,300KG</span>
                    </div>
                    <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">Plastic Saved</p>
                </div>
                </div>
            </section>


            <section id="section-cta" class="cta-section">
                <div class="cta-bg">
                    <img src="<?= base_url(relativePath: 'images/green-solar-bg.png'); ?>" alt="Green solar panels background">
                </div>
                <div class="cta-content">
                    <h2>Let’s Build a Better Future</h2>
                    <p>Join us in creating a greener tomorrow. Whether you're a client, partner, or supporter — your
                        role matters.</p>
                    <div class="hero-buttons">
                        <a href="#section-footer" class="hero-button">Get in Touch</a>
                    </div>
                </div>
            </section>


            <section id="subscribe" class="fade-in-section">
                <div class="container">
                    <div class="subscribe-box">
                        <h2 class="subscribe-title">
                            Join the Movement for a Greener Tomorrow
                        </h2>
                        <p class="pb-8">Discover how you can be part of our sustainability journey..</p>

                        <form class="subscribe-form">
                            <input type="email" placeholder="Enter your email" class="subscribe-input" />
                            <button type="submit" class="subscribe-button-s">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
            <style>
                .hero-section-s {
                    min-height: 100vh;
                    position: relative;
                    overflow: hidden;
                    display: flex;
                    align-items: center;
                    background: rgba(255, 255, 255, 0.15);
                    backdrop-filter: blur(20px);
                    -webkit-backdrop-filter: blur(20px);
                }


                .hero-bg {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 0;
                }

                .hero-bg img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                /* Gradient overlay */
                .hero-bg::after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 3.85%, rgba(170, 170, 170, 0.25) 44.24%, rgba(0, 0, 0, 0.25) 100%);
                    backdrop-filter: blur(2.399999618530273px);
                }

                .hero-content-wrapper {
                    width: 100%;
                    max-width: 1400px;
                    margin: 0 auto;
                    position: relative;
                    z-index: 1;
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-around;

                }

                .hero-content {
                    flex: 1;
                    max-width: 600px;
                    padding: 50px;
                }

                .content-slider {
                    position: relative;
                    min-height: 250px;

                }

                .content-slide {
                    position: absolute;
                    opacity: 0;
                    transform: translateY(20px);
                    transition: all var(--transition-duration) ease;
                }



                .content-slide.active {
                    opacity: 1;

                    transform: translateY(0);
                    position: relative;
                }

                .hero-content h1 {
                    color: #fff;
                    font-size: 3.2rem;
                    line-height: 1.2;
                    margin-bottom: 20px;
                    font-weight: 700;
                    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                }



                .hero-content p {
                    color: rgba(255, 255, 255, 0.9);
                    font-size: 1.2rem;
                    line-height: 1.6;
                    margin-bottom: 30px;
                }


                .image-carousel-container {
                    flex: 1;
                    position: relative;
                    width: 100%;
                    height: 300px;
                    min-height: 200px;
                    max-width: 370px;


                }

                .image-carousel {

                    width: 100%;
                    height: 100%;


                }



                .carousel-slide {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    opacity: 0;
                    transform: scale(1.1);
                    transition: all var(--transition-duration) ease;
                    border-radius: 15px;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
                }

                .carousel-slide.active {
                    opacity: 1;
                    transform: scale(1);

                }

                /* Responsive Design */
                @media (max-width: 1400px) {
                    .hero-content-wrapper {
                        padding: 0 40px;
                    }
                }

                @media (max-width: 1200px) {
                    .hero-content-wrapper {
                        flex-direction: column;
                        gap: 40px;
                        padding: 0 30px;
                    }

                    .image-carousel-container {
                        height: 400px;
                        min-height: 350px;
                        order: -1;
                        max-width: 100%;
                    }

                    .hero-content {
                        max-width: 100%;
                        flex: none;
                    }
                }

                @media (max-width: 768px) {
                    .hero-content-wrapper {
                        padding: 0 20px;
                        gap: 30px;
                    }

                    .hero-content {
                        padding: 30px;
                    }

                    .hero-content h1 {
                        font-size: 2.5rem;
                    }

                    .image-carousel-container {
                        height: 300px;
                        min-height: 250px;
                    }
                }

                @media (max-width: 640px) {
                    .hero-content-wrapper {
                        padding: 0 15px;
                    }

                    .hero-content {
                        padding: 25px;
                    }

                    .hero-content h1 {
                        font-size: 2.2rem;
                    }

                    .image-carousel-container {
                        height: 280px;
                        min-height: 220px;
                    }
                }

                @media (max-width: 480px) {
                    .hero-content h1 {
                        font-size: 2rem;
                    }

                    .hero-content p {
                        font-size: 1rem;
                    }

                    .image-carousel-container {
                        height: 250px;
                        min-height: 200px;
                    }

                    .hero-content {
                        padding: 20px;
                    }
                }

                @media (max-width: 400px) {
                    .hero-content h1 {
                        font-size: 1.8rem;
                    }

                    .image-carousel-container {
                        padding-left: 40px;
                        height: 220px;
                        min-height: 180px;
                    }

                    .hero-content {
                        padding: 15px;
                    }

                    .hero-button {
                        padding: 12px 24px;
                        font-size: 0.9rem;
                    }
                }

                /* Landscape mobile orientation */
                @media (max-height: 500px) and (orientation: landscape) {
                    .hero-section-s {

                        min-height: auto;
                        padding: 40px 0;
                    }

                    .hero-content-wrapper {
                        flex-direction: row;
                        gap: 30px;
                    }

                    .image-carousel-container {
                        height: 250px;
                        order: 0;
                        flex: 0.8;

                    }

                    .hero-content {
                        flex: 1.2;
                        padding: 20px;
                    }

                    .content-slider {
                        min-height: 150px;
                    }

                    .hero-content h1 {
                        font-size: 1.8rem;
                        margin-bottom: 10px;
                    }

                    .hero-content p {
                        font-size: 0.9rem;
                        margin-bottom: 15px;
                    }
                }

                /* Animations */
                @keyframes fadeIn {
                    from {
                        opacity: 0;
                    }

                    to {
                        opacity: 1;
                    }
                }

                .hero-content {
                    animation: fadeIn 1s ease-out;
                }

                .image-carousel {
                    animation: fadeIn 1s ease-out 0.3s both;
                }


                /* CSS for section section:why-sustainability */
                .why-sustainability-content {
                    display: flex;
                    align-items: center;
                    gap: 60px;
                }

                .why-sustainability-image {
                    flex: 0 0 550px;
                }

                .why-sustainability-image img {
                    width: 100%;
                    height: auto;
                    border-radius: 16px;
                }

                .why-sustainability-text {
                    flex: 1;
                }

                .why-sustainability-text h3 {
                    font-size: 42px;
                    font-weight: 600;
                    line-height: 1.2;
                    color: var(--text-light);
                    margin-bottom: 24px;
                }

                .why-sustainability-text p {
                    font-size: 33px;
                    line-height: 1.5;
                    margin-bottom: 40px;
                }

                .why-sustainability-text p strong {
                    font-weight: 600;
                }

                @media (max-width: 992px) {
                    .why-sustainability-content {
                        flex-direction: column;
                        gap: 40px;
                    }

                    .why-sustainability-image {
                        flex: 0 0 auto;
                        width: 100%;
                        max-width: 550px;
                    }

                    .why-sustainability-text {
                        text-align: center;
                    }

                    .why-sustainability-text p {
                        font-size: 24px;
                    }
                }

                .subscribe-button-s {
                    padding: 10px 20px;
                    border: none;
                    background: #42AE40;
                    ;
                    backdrop-filter: blur(15px);
                    -webkit-backdrop-filter: blur(15px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                    color: #ffffff;
                    font-size: 16px;
                    border-radius: 5px;
                    cursor: pointer;
                    box-shadow: 0px 6px 9px 0px rgba(8, 142, 42, 0.2);
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                }

                .subscribe-button-s::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg,
                            transparent,
                            rgba(255, 255, 255, 0.3),
                            transparent);
                    transition: left 0.5s ease;
                }

                .subscribe-button-s:hover::before {
                    left: 100%;
                }

                .subscribe-button-s:hover {
                    background: #2a8428;
                    ;
                    transform: translateY(-2px);
                    box-shadow: 0px 10px 18px 0px rgba(48, 174, 42, 0.4);
                }


                /* CSS for section section:initiatives */

                .initiatives-grid {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 30px;
                    padding: 20px;
                    max-width: 1200px;
                    margin: 0 auto;
                }

                .initiative-card {
                    width: 100%;
                    position: relative;
                }

                .initiative-image-wrapper {
                    aspect-ratio: 1/1;
                    width: 100%;
                    perspective: 1000px;
                    cursor: pointer;
                    position: relative;
                }


                .initiative-icon {
                    position: absolute;
                    left: 50%;
                    bottom: 0;
                    transform: translate(-50%, 50%);
                    width: 95px;
                    height: 95px;
                    z-index: 10;
                    pointer-events: none;
                }


                .initiative-icon .icon-bg,
                .initiative-icon .icon-fg {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    opacity: 1 !important;
                    visibility: visible !important;
                }

                .initiative-icon .icon-fg {
                    object-fit: contain;
                    padding: 10px;
                    z-index: 2;
                }


                .card-inner {
                    position: relative;
                    width: 100%;
                    height: 100%;
                    transition: transform 0.6s;
                    transform-style: preserve-3d;
                }

                .initiative-image-wrapper:hover .card-inner {
                    transform: rotateY(180deg);
                }


                .card-front,
                .card-back {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    backface-visibility: hidden;
                    border-radius: 14px;
                    overflow: hidden;
                }



                .card-front img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    display: block;
                }


                .card-back {
                    background: rgba(255, 255, 255);
                    backdrop-filter: blur(80px);
                    -webkit-backdrop-filter: blur(80px);
                    transform: rotateY(180deg);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 20px;
                    color: #ffffff;
                    font-size: 16px;
                    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                    border: 1px solid rgba(255, 255, 255, 0.3);
                }



                .card-back::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-image: inherit;
                    background-size: cover;
                    background-position: center;
                    opacity: 0.5;
                    z-index: -1;
                }

                .initiative-card p {
                    text-align: center;
                    margin-top: 50px;
                    font-weight: 600;
                    color: #000000;
                }

                @media (max-width: 1024px) {
                    .initiatives-grid {
                        grid-template-columns: repeat(3, 1fr);
                        gap: 25px;
                    }

                    .initiative-icon {
                        width: 85px;
                        height: 85px;
                    }
                }

                @media (max-width: 768px) {
                    .initiatives-grid {
                        grid-template-columns: repeat(2, 1fr);
                        gap: 20px;
                    }

                    .initiative-icon {
                        width: 75px;
                        height: 75px;
                    }

                    .card-back {
                        padding: 15px;
                        font-size: 14px;
                    }
                }

                @media (max-width: 480px) {
                    .initiatives-grid {
                        grid-template-columns: 1fr;
                        gap: 15px;
                        padding: 15px;
                    }

                    .initiative-icon {
                        width: 65px;
                        height: 65px;
                    }

                    .initiative-card p {
                        margin-top: 40px;
                        font-size: 14px;
                    }
                }


                @media (max-width: 360px) {
                    .initiative-icon {
                        width: 55px;
                        height: 55px;
                    }

                    .card-back {
                        padding: 10px;
                        font-size: 13px;
                    }
                }


                @media (hover: none) {
                    .initiative-image-wrapper:hover .card-inner {
                        transform: none;
                    }

                    .initiative-image-wrapper.flipped .card-inner {
                        transform: rotateY(180deg);
                    }
                }

                /* CSS for section section:certified */
                .certified-content {
                    display: flex;
                    align-items: center;
                    gap: 40px;
                    padding-left: 20px;
                }

                .certified-image {
                    position: relative;
                    flex: 0 0 537px;
                }

                .certified-image>img {
                    width: 100%;
                    border-radius: 14px;
                    display: block;
                }

                .certified-badge {
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    transform: translate(-20%, 20%);
                    width: 171px;
                    height: 171px;
                }

                .certified-badge .badge-bg,
                .certified-badge .badge-fg {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }

                .certified-badge .badge-fg {
                    object-fit: contain;
                    padding: 10px;
                }

                .certified-text {
                    flex: 1;
                }

                .certified-header {
                    display: flex;
                    align-items: center;
                    gap: 15px;
                    margin-bottom: 16px;
                }

                .eco-label-icon {
                    width: 74px;
                    height: auto;
                }

                .certified-text h3 {
                    font-size: 40px;
                    font-weight: 600;
                    line-height: 1.2;
                }

                .certified-subtitle {
                    font-size: 22px;
                    line-height: 1.5;
                    margin-bottom: 24px;
                }

                .certified-text ul {
                    list-style-type: '• ';
                    padding-left: 20px;
                    margin: 0;
                }

                .certified-text li {
                    font-size: 16px;
                    font-weight: 300;
                    line-height: 1.5;
                    margin-bottom: 12px;
                }

                @media (max-width: 992px) {
                    .certified-content {
                        flex-direction: column;
                    }

                    .certified-image {
                        flex: 0 0 auto;
                        width: 100%;
                        max-width: 537px;
                    }

                    .certified-text h3 {
                        font-size: 32px;
                    }

                    .certified-subtitle {
                        font-size: 24px;
                    }

                    .certified-text li {
                        font-size: 20px;
                    }
                }

                /* CSS for section section:timeline */
                .timeline-section {
                    padding-bottom: 120px;
                }

                .timeline-wrapper {
                    position: relative;
                    padding: 40px 20px;
                    border-radius: 12px;
                    background-color: rgba(255, 255, 255, 0.03);
                    backdrop-filter: blur(2px);
                    box-shadow: 7px 12px 27px 0px rgba(67, 232, 34, 0.34);
                }

                .timeline-bg {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    overflow: hidden;
                    z-index: -1;
                    border-radius: 12px;
                }

                .timeline-bg-img1,
                .timeline-bg-img2 {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }

                /* .timeline-bg-img1 { top: -15px; } */
                .timeline-bg-img2 {
                    top: 15px;
                }

                .timeline-items {
                    display: flex;
                    justify-content: space-around;
                    position: relative;
                    padding-bottom: 200px;
                }

                .timeline-item {
                    text-align: left;
                    max-width: 200px;
                    position: relative;
                    padding-left: 20px;
                }

                .timeline-item::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 2px;
                    height: 100%;
                    background-color: var(--green-primary);
                }

                .timeline-item h4 {
                    font-size: 28px;
                    font-weight: 600;
                    line-height: 1.2;
                }

                .timeline-item h5 {
                    font-size: 22px;
                    font-weight: 500;
                    margin: 8px 0;
                }

                .timeline-item p {
                    font-size: 20px;
                    font-weight: 500;
                    line-height: 1.4;
                }

                @media (max-width: 1200px) {
                    .timeline-items {
                        flex-wrap: wrap;
                        gap: 40px;
                        justify-content: center;
                        padding-top: 20px;
                    }

                    .timeline-item {
                        flex-basis: 40%;
                    }
                }

                @media (max-width: 768px) {
                    .timeline-items {
                        flex-direction: column;
                        align-items: center;
                    }

                    .timeline-item {
                        flex-basis: auto;
                        width: 100%;
                        max-width: 300px;
                        text-align: left;
                    }
                }

                @keyframes wave {
                    0% {
                        transform: translateY(0) scaleY(1);
                    }

                    50% {
                        transform: translateY(-4px) scaleY(0.95);
                    }

                    /* Moves up */
                    100% {
                        transform: translateY(0) scaleY(1);
                    }
                }

                .animate-wave {
                    animation: wave 3s ease-in-out infinite;
                }

                .animate-pulse-slow {
                    animation: pulse 8s cubic-bezier(0.4, 0, 0.6, 1) infinite;
                }

                @keyframes pulse {

                    0%,
                    100% {
                        opacity: 0.8;
                    }

                    50% {
                        opacity: 0.9;
                    }
                }

                /* CSS for section section:cta */
                .cta-section {
                    position: relative;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 500px;
                    padding-left: 60px;
                    padding-right: 20px;
                }

                .cta-bg {
                    position: absolute;
                    bottom: 20%;
                    right: 15%;

                    width: 1000px;
                    height: 400px;

                    z-index: -1;
                }

                .cta-bg img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 20px;

                }

                .cta-content {
                    background-color: rgba(255, 255, 255, 0.21);
                    border-radius: 19px;
                    backdrop-filter: blur(10px);
                    padding: 50px;
                    max-width: 1032px;
                    width: 100%;
                    text-align: left;
                    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
                }

                .cta-content h2 {
                    font-size: 53px;
                    font-weight: 700;
                    line-height: 1.2;
                    color: var(--text-light);
                    margin-bottom: 20px;
                }

                .cta-content p {
                    font-family: 'Poppins', sans-serif;
                    font-size: 30px;
                    line-height: 1.5;
                    color: var(--text-light);
                    margin-bottom: 40px;
                }

                @media (max-width: 768px) {
                    .cta-content {
                        padding: 30px;
                        text-align: center;
                    }

                    .cta-content h2 {
                        font-size: 36px;
                    }

                    .cta-content p {
                        font-size: 20px;
                    }
                }
            </style>
            </head>

            <body style="min-height: 100vh">

                <header class="site-header sticky top-0 z-50 glassmorphism transition-all duration-300 ease-out">
                    <div class="container max-w-7xl mx-auto px-8">
                        <div class="header-container flex items-center justify-between min-h-20">
                            <!-- Logo -->
                            <a href="#"
                                class="logo flex items-center relative logo-glow transition-transform duration-300 hover:scale-105">
                                <img src="<?= base_url(relativePath: 'images/ithpllogo.png'); ?>" alt="ITHPL Logo"
                                    class="h-12 w-auto object-contain transition-all duration-300"
                                    style="filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.1))" />
                            </a>

                            <!-- Mobile Menu Toggle -->
                            <button
                                class="mobile-menu-toggle md:hidden flex flex-col cursor-pointer p-2 rounded-lg transition-colors duration-300 hover:bg-brand-purple hover:bg-opacity-10"
                                onclick="toggleMobileMenu()">
                                <span
                                    class="w-6 h-0.5 bg-slate-600 mb-1 transition-all duration-300 rounded-full"></span>
                                <span
                                    class="w-6 h-0.5 bg-slate-600 mb-1 transition-all duration-300 rounded-full"></span>
                                <span class="w-6 h-0.5 bg-slate-600 transition-all duration-300 rounded-full"></span>
                            </button>


                            <nav class="main-nav hidden md:flex items-center gap-2 mx-auto">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-hover">Home</a>
                                    <div class="dropdown-menu   single-column">
                                        <div class="dropdown-arrow"></div>
                                        <a href="index.html#why-choose-us">Why ITHPL</a>
                                        <a href="index.html#short-about">About Us</a>
                                        <a href="index.html#core-values">Key Features</a>
                                        <a href="index.html#products">Featured Products</a>
                                        <a href="index.html#certifications">Certifications</a>
                                    </div>
                                </li>

                                <!-- About Us -->
                                <li class="nav-item">
                                    <a href="aboutus.html" class="nav-hover">About Us</a>
                                    <div class="dropdown-menu wide">
                                        <div class="dropdown-arrow"></div>
                                        <div class="dropdown-column">
                                            <a href="aboutus.html#about-a">Who We Are</a>
                                            <a href="aboutus.html#drives-us-a">Mission, Vision & Value</a>
                                            <a href="aboutus.html#journey">Journey</a>
                                            <a href="aboutus.html#core-team">Core Team</a>
                                            <a href="aboutus.html#partners">Partners</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <a href="aboutus.html#clients">Customers</a>
                                            <a href="aboutus.html#testimonials">Testimonials</a>
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
                                    <a href="services.html" class="nav-hover">Services</a>
                                    <div class="dropdown-menu wide-3col">
                                        <div class="dropdown-arrow"></div>
                                        <div class="dropdown-column">
                                            <a href="ewastemanagement.html">E-Waste Management</a>
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
                                    <a href="solutions.html" class="nav-hover">Solutions</a>
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
                                        <a href="apple-work.html">Apple At Work</a>
                                        <a href="apple-business.html">Apple for Business</a>
                                        <a href="apple-enterprise.html">Apple for Enterprises</a>
                                        <a href="apple-smart-epp.html">Apple Smart EPP</a>
                                        <a href="apple.html#s-why">Why Apple?</a>
                                    </div>
                                </li>


                                <!-- Sustainability -->
                                <li class="nav-item">
                                    <a href="sustainabilty.html" class="nav-hover">Sustainability</a>
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
                            <a href="contact.html"
                                class="contact-button text-white font-semibold text-sm px-7 py-3.5 rounded-xl transition-all duration-300 relative overflow-hidden gradient-shine border border-white border-opacity-20 hover:shadow-xl active:scale-95"
                                style="
              background: #87a862;
              box-shadow: 0 4px 14px rgba(37, 170, 55, 0.34);
              transform: translateY(0);
            " onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(208, 155, 237, 0.4)'"
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
                            <a href="index.html">Home</a>
                            <a href="AboutUs.html">About Us</a>
                            <a href="#products">Products</a>
                            <a href="services.html">Services</a>
                            <a href="solutions.html">Solutions</a>
                            <a href="#">Apple</a>
                            <a href="sustainabilty.html">Sustainability</a>
                        </div>
                    </nav>
                </header>

                <section class="hero-section-s">
                    <div class="hero-bg">
                        <img src="<?= base_url(relativePath: 'images/abstract-green-bg.png'); ?>" alt="Abstract green background">
                    </div>
                    <div class="hero-content-wrapper">
                        <div class="hero-content">
                            <div class="content-slider">
                                <div class="content-slide active">
                                    <h1>Greening <span class="gradient-sustain">Our Future,</span> One Tree at a Time.
                                    </h1>
                                    <p>Through regular plantation drives, we're growing green cover and cultivating a
                                        more sustainable future.</p>
                                </div>
                                <div class="content-slide">
                                    <h1>Turning Pages into <span class="gradient-sustain">Digital Pixels.</span></h1>
                                    <p>We've embraced digital alternatives across our operations to significantly cut
                                        down on paper usage.</p>
                                </div>
                                <div class="content-slide">
                                    <h1>Clean Energy, Smarter Moves <span class="gradient-sustain">Greener
                                            Choices.</span></h1>
                                    <p>From electric vehicles to energy-efficient Macs, we're investing in clean energy
                                        and smarter technology.</p>
                                </div>
                            </div>
                            <div class="hero-buttons">
                                <a href="#section-initiatives" class="hero-button">Explore More</a>
                            </div>
                        </div>

                        <div class="image-carousel-container ">
                            <div class="image-carousel ">
                                <div class="carousel-inner ">
                                    <img src="<?= base_url(relativePath: 'images/tree-planting.png'); ?>" alt="Tree planting" class="carousel-slide ">
                                    <img src="<?= base_url(relativePath: 'images/recycle-paper.png'); ?>" alt="Digital workplace"
                                        class="carousel-slide active">
                                    <img src="<?= base_url(relativePath: 'images/renewable-energy.png'); ?>" alt="Clean energy solutions"
                                        class="carousel-slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-why-sustainability" class="page-container">
                    <h2 class="section-title">Why <span class="gradient-susatcore">Sustainability</span>?</h2>
                    <div class="why-sustainability-content">
                        <div class="why-sustainability-image">
                            <img src="<?= base_url(relativePath: 'images/sustainable_activities.png'); ?>" alt="Collage of sustainable activities">
                        </div>
                        <div class="why-sustainability-text">
                            <h3>The Case for Sustainability</h3>
                            <p>At <strong>ITHPL</strong>, we understand the growing impact of the tech industry, from
                                rising <strong>e-waste to high energy</strong> use. That’s why we are making conscious
                                choices every day to <strong>reduce our impact</strong> and move toward a
                                <strong>greener future.</strong></p>
                            <div class="hero-buttons">
                                <a href="#section-initiatives" class="hero-button mt-2 sm:m-4">Explore Our
                                    Initiatives</a>
                            </div>




                        </div>
                    </div>
                </section>

                <section id="section-initiatives" class="page-container">
                    <h2 class="section-title">What We're <span class="gradient-sustain2">Doing?</span></h2>
                    <div class="initiatives-grid">

                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="green-circle" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/zero-printout-icon.png'); ?>" alt="Zero Printouts Icon" class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/office_with_no_print.png'); ?>" alt="Office with no printouts">
                                    </div>
                                    <div class="card-back"
                                        style="background-image: url('images/office_with_no_print.png')">
                                        <p>Going fully digital has helped us cut down unnecessary paper use.</p>
                                    </div>
                                </div>
                            </div>
                            <p>Zero Printouts</p>
                        </div>


                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/hand-icon.png'); ?>" alt="Hand Icon" class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/hand_dryer.png'); ?>" alt="Hand dryer in a washroom">
                                    </div>
                                    <div class="card-back" style="background-image: url('images/hand_dryer.png')">
                                        <p>Reducing paper waste in all our facilities.</p>
                                    </div>
                                </div>
                            </div>
                            <p>Hand Dryers, Not Tissues</p>
                        </div>


                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/led_bulb_icon.png'); ?>" alt="LED Bulb Icon" class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/led_bulbs.png'); ?>" alt="LED light bulbs">
                                    </div>
                                    <div class="card-back" style="background-image: url('images/led_bulbs.png')">
                                        <p>All our workspaces use energy-efficient LED lighting.</p>
                                    </div>
                                </div>
                            </div>
                            <p>LED Lighting</p>
                        </div>


                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/solar_icon_energy.png'); ?>" alt="Solar Energy Icon" class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/solar_panels.png'); ?>" alt="Solar panels in a field">
                                    </div>
                                    <div class="card-back" style="background-image: url('images/solar-energy.jpg')">
                                        <p>10% of our power needs are met via solar panels and we’re expanding further..
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p>Solar Energy Usage</p>
                        </div>

                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/packaging_icon.png'); ?>" alt="Packaging Icon" class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/eco_friendly_card.png'); ?>" alt="Eco-friendly cardboard boxes">
                                    </div>
                                    <div class="card-back"
                                        style="background-image: url('images/eco_friendly_card.png')">
                                        <p>We’ve switched to biodegradable or recyclable packaging for all shipments.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p>Eco-Conscious Packaging</p>
                        </div>


                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/waste-segragation-icon.png'); ?>" alt="Waste Segregation Icon"
                                        class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/segragated-waste-bins.png'); ?>" alt="Segregated waste bins">
                                    </div>
                                    <div class="card-back"
                                        style="background-image: url('images/segragated-waste-bins.png')">
                                        <p>Our teams are trained to separate recyclables, e-waste, and general waste..
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p>Waste Segregation</p>
                        </div>


                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/recycle_icon.png'); ?>" alt="Recycle Icon" class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/waste-bins.png'); ?>" alt="Waste bin with recyclable materials">
                                    </div>
                                    <div class="card-back" style="background-image: url('images/waste-bins.png')">
                                        <p>Active internal and client recycling programs to dispose of e-waste
                                            responsibly..</p>
                                    </div>
                                </div>
                            </div>
                            <p>Recycling Programs</p>
                        </div>

                        <div class="initiative-card">
                            <div class="initiative-image-wrapper">
                                <div class="initiative-icon">
                                    <img src="<?= base_url(relativePath: 'images/green-circle.png'); ?>" alt="" class="icon-bg">
                                    <img src="<?= base_url(relativePath: 'images/glass-icon.png'); ?>" alt="Glass Icon" class="icon-fg">
                                </div>
                                <div class="card-inner">
                                    <div class="card-front">
                                        <img src="<?= base_url(relativePath: 'images/glass-bottles.png'); ?>" alt="Glass bottle instead of plastic">
                                    </div>
                                    <div class="card-back" style="background-image: url('images/glass-bottles.png')">
                                        <p>We've eliminated plastic bottles and now use glass containers to reduce
                                            single-use plastic.</p>
                                    </div>
                                </div>
                            </div>
                            <p>Glass Over Plastic</p>
                        </div>
                    </div>
                </section>

                <section id="section-certified" class="page-container">
                    <h2 class="section-title">Certified for a <span class="gradient-sustain2">Greener Tomorrow</span>
                    </h2>
                    <div class="certified-content">
                        <div class="certified-image">
                            <img src="<?= base_url(relativePath: 'images/plant-growing-from-coins.png'); ?>"
                                alt="Plant growing from coins with sustainability icons">
                            <!--merged image-->
                            <div class="certified-badge">
                                <img src="<?= base_url(relativePath: 'images/eclipse-white.png'); ?>" alt="" class="badge-bg">
                                <img src="<?= base_url(relativePath: 'images/iso-14001-certified.png'); ?>" alt="ISO 14001 Certified Badge"
                                    class="badge-fg">
                            </div>
                        </div>
                        <div class="certified-text">
                            <div class="certified-header">
                                <img src="<?= base_url(relativePath: 'images/eco-label-icon.png'); ?>" alt="Eco Label Icon" class="eco-label-icon">
                                <h3>ISO 14001:2015 Certified</h3>
                            </div>
                            <p class="certified-subtitle">We’re proud to hold an internationally recognized
                                certification for environmental responsibility.</p>
                            <ul>
                                <li>Certified for Environmental Management System (EMS)</li>
                                <li>Follows the ISO 14001:2015 global standard</li>
                                <li>Ensures waste reduction, energy conservation & pollution control</li>
                                <li>Reflects our ongoing commitment to sustainable operations</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="section-timeline" class="timeline-section">
                    <div class="page-container">
                        <h2 class="section-title">
                            Towards <span class="gradient-sustain2">Net Zero</span> by 2030
                        </h2>

                        <div class="timeline-wrapper">
                            <div class="timeline-container">
                                <img src="<?= base_url(relativePath: 'images/Milestone.gif'); ?>" alt="Milestone" class="timeline-animation" />
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-impact" class="py-16 px-4 bg-gray-50">
                    <h2 class="text-center text-4xl md:text-5xl font-bold mb-16">Our <span
                            class="gradient-sustain2">Impact</span> in Numbers</h2>

                    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">

                        <div class="impact-item group">
                            <div
                                class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                                < <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90">
                            </div>


                            <div class="liquid-container absolute bottom-0 w-full h-[68%] overflow-hidden">
                                <svg viewBox="0 0 200 200" preserveAspectRatio="none"
                                    class="w-full h-full animate-wave">
                                    <defs>
                                        <linearGradient id="liquid-green" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" stop-color="#1BA109" />
                                            <stop offset="100%" stop-color="#0A3B03" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#liquid-green)"
                                        d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                                </svg>
                            </div>

                            <!-- Glass Effect -->
                            <div
                                class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                            </div>

                            <!-- Number -->
                            <span class="relative z-10 text-5xl font-bold text-gray-900 drop-shadow-lg">68%</span>
                        </div>
                        <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">Waste Reduced</p>
                    </div>

                    <!-- CO₂ Saved - 124/150 = 82.67% -->
                    <div class="impact-item group">
                        <div
                            class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                            <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90"></div>

                            <div class="liquid-container absolute bottom-0 w-full h-[82.67%] overflow-hidden">
                                <svg viewBox="0 0 200 200" preserveAspectRatio="none" class="w-full h-full animate-wave"
                                    style="animation-duration: 5s">
                                    <defs>
                                        <linearGradient id="liquid-green-2" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" stop-color="#1BA109" />
                                            <stop offset="100%" stop-color="#0A3B03" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#liquid-green-2)"
                                        d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                                </svg>
                            </div>

                            <div
                                class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                            </div>
                            <span class="relative z-10 text-5xl font-bold text-gray-900 drop-shadow-lg">124T</span>
                        </div>
                        <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">CO₂ Saved</p>
                    </div>

                    <!-- Printouts Avoided - 1.2/1.5 = 80% -->
                    <div class="impact-item group">
                        <div
                            class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                            <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90"></div>

                            <div class="liquid-container absolute bottom-0 w-full h-[80%] overflow-hidden">
                                <svg viewBox="0 0 200 200" preserveAspectRatio="none" class="w-full h-full animate-wave"
                                    style="animation-duration: 4s">
                                    <defs>
                                        <linearGradient id="liquid-green-3" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" stop-color="#1BA109" />
                                            <stop offset="100%" stop-color="#0A3B03" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#liquid-green-3)"
                                        d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                                </svg>
                            </div>

                            <div
                                class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                            </div>
                            <span class="relative z-10 text-5xl font-bold text-gray-900 drop-shadow-lg">1.2M</span>
                        </div>
                        <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">Printouts Avoided</p>
                    </div>

                    <!-- Plastic Saved - 4300/5000 = 86% -->
                    <div class="impact-item group">
                        <div
                            class="relative w-64 h-64 mx-auto mb-6 rounded-full overflow-hidden flex justify-center items-center">
                            <div class="absolute inset-0 bg-white animate-pulse-slow opacity-90"></div>

                            <div class="liquid-container absolute bottom-0 w-full h-[86%] overflow-hidden">
                                <svg viewBox="0 0 200 200" preserveAspectRatio="none" class="w-full h-full animate-wave"
                                    style="animation-duration: 7s">
                                    <defs>
                                        <linearGradient id="liquid-green-4" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" stop-color="#1BA109" />
                                            <stop offset="100%" stop-color="#0A3B03" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#liquid-green-4)"
                                        d="M0,120 Q50,100 100,120 T200,120 L200,200 L0,200 Z" />
                                </svg>
                            </div>

                            <div
                                class="absolute inset-0 backdrop-blur-sm bg-white/20 border-2 border-white/30 rounded-full transition-all duration-500 group-hover:backdrop-blur-md shadow-inner">
                            </div>
                            <span class="relative z-10 text-4xl font-bold text-gray-900 drop-shadow-lg">4,300KG</span>
                        </div>
                        <p class="text-3xl text-center mt-2  text-gray-900 font-semibold">Plastic Saved</p>
                    </div>
                    </div>
                </section>

                <section id="section-cta" class="cta-section">
                    <div class="cta-bg">
                        <img src="<?= base_url(relativePath: 'images/green-solar-bg.png'); ?>" alt="Green solar panels background">
                    </div>
                    <div class="cta-content">
                        <h2>Let’s Build a Better Future</h2>
                        <p>Join us in creating a greener tomorrow. Whether you're a client, partner, or supporter — your
                            role matters.</p>
                        <div class="hero-buttons">
                            <a href="#section-footer" class="hero-button">Get in Touch</a>
                        </div>
                    </div>
                </section>

                <section id="subscribe" class="fade-in-section">
                    <div class="container">
                        <div class="subscribe-box">
                            <h2 class="subscribe-title">
                                Join the Movement for a Greener Tomorrow
                            </h2>
                            <p class="pb-8">Discover how you can be part of our sustainability journey..</p>

                            <form class="subscribe-form">
                                <input type="email" placeholder="Enter your email" class="subscribe-input" />
                                <button type="submit" class="subscribe-button-s">Submit</button>
                            </form>
                        </div>
                    </div>
                </section>
