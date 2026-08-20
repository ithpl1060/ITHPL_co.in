<?php
/**
 * HP AI PCs - Powered by Intel Core Ultra Processors and Intel vPro
 * Landing Page for Innovative Techhub Pvt. Ltd.
 * Faithful Pixel-Accurate Implementation matching Reference Image 1
 */
?>
<style>
    /* ===== SCOPING & SITE CHROME SUPPRESSION ===== */
    .site-header, header.site-header, footer.site-footer, .footer, #mobileNav {
        display: none !important;
    }

    :root {
        --hp-blue: #0057b8;
        --hp-blue-hover: #004399;
        --hp-blue-footer: #0047ba;
        --hp-heading-color: #111827;
        --hp-subhead-color: #374151;
        --hp-body-color: #4b5563;
        --hp-bg-light: #f3f4f6;
        --hp-card-bg: #f2f4f7;
        --hp-border-subtle: #d1d5db;
        --hp-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #ffffff;
        font-family: var(--hp-font-family);
        color: var(--hp-body-color);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .hp-page {
        width: 100%;
        overflow-x: hidden;
        background: #ffffff;
    }

    .hp-container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 24px;
        box-sizing: border-box;
    }

    /* ===== 1. TOP CO-BRANDING HEADER ===== */
    .hp-header-bar {
        background-color: #ffffff;
        padding: 18px 0 14px 0;
        width: 100%;
    }

    .hp-header-inner {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 28px;
    }

    .hp-brand-lockup {
        display: flex;
        align-items: center;
    }

    .hp-brand-lockup img {
        height: 54px;
        width: auto;
        object-fit: contain;
        display: block;
    }

    .hp-header-tagline {
        font-size: 15px;
        font-weight: 500;
        color: #1e293b;
        letter-spacing: -0.01em;
    }

    .hp-header-tagline sup {
        font-size: 0.6em;
        top: -0.4em;
    }

    /* ===== 2. HERO SECTION ===== */
    .hp-hero-section {
        background-color: #ffffff;
        padding: 16px 0 36px 0;
    }

    .hp-hero-grid {
        display: grid;
        grid-template-columns: 1.15fr 1fr;
        gap: 32px;
        align-items: center;
    }

    .hp-hero-content {
        padding-right: 8px;
    }

    .hp-hero-content h1 {
        font-size: 24px;
        font-weight: 800;
        line-height: 1.28;
        color: var(--hp-heading-color);
        margin: 0 0 14px 0;
        letter-spacing: -0.015em;
    }

    .hp-blue-text {
        color: var(--hp-blue);
    }

    .hp-hero-content h1 sup {
        font-size: 0.55em;
        font-weight: 600;
        top: -0.5em;
    }

    .hp-hero-content p {
        font-size: 13px;
        line-height: 1.55;
        color: var(--hp-body-color);
        max-width: 420px;
        margin: 0 0 22px 0;
    }

    .hp-hero-cta-row {
        display: flex;
        align-items: center;
        gap: 40px;
    }

    .hp-btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: var(--hp-blue);
        color: #ffffff !important;
        font-size: 14.5px;
        font-weight: 600;
        padding: 11px 32px;
        border-radius: 3px;
        text-decoration: none !important;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.15s ease;
        border: none;
        white-space: nowrap;
    }

    .hp-btn-primary:hover {
        background-color: var(--hp-blue-hover);
        transform: translateY(-1px);
    }

    .hp-partner-badge img {
        height: 36px;
        width: auto;
        object-fit: contain;
        display: block;
    }

    /* Hero visual: use pre-cropped composite from reference design */
    .hp-hero-visual {
        width: 100%;
        display: flex;
        align-items: stretch;
    }

    .hp-hero-visual img {
        width: 100%;
        height: 100%;
        min-height: 300px;
        object-fit: cover;
        object-position: left center;
        display: block;
    }

    /* ===== 3. SECOND CONTENT SECTION ===== */
    .hp-features-section {
        background-color: #ffffff;
        padding: 25px 0 50px 0;
    }

    .hp-features-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 36px;
        align-items: start;
    }

    .hp-features-col-left h2 {
        font-size: 25px;
        font-weight: 700;
        color: var(--hp-heading-color);
        line-height: 1.25;
        margin: 0 0 8px 0;
        letter-spacing: -0.01em;
    }

    .hp-features-col-left .hp-features-subhead {
        font-size: 13.5px;
        font-weight: 500;
        color: var(--hp-subhead-color);
        line-height: 1.5;
        margin: 0 0 14px 0;
    }

    .hp-features-col-left .hp-features-subhead sup {
        font-size: 0.6em;
        top: -0.4em;
    }

    .hp-features-col-left .hp-features-desc {
        font-size: 13px;
        line-height: 1.6;
        color: var(--hp-body-color);
        margin: 0 0 18px 0;
    }

    .hp-bullet-list {
        list-style: none;
        padding: 0;
        margin: 0 0 28px 0;
    }

    .hp-bullet-list li {
        font-size: 13px;
        line-height: 1.55;
        color: var(--hp-subhead-color);
        margin-bottom: 6px;
        padding-left: 14px;
        position: relative;
    }

    .hp-bullet-list li::before {
        content: "•";
        position: absolute;
        left: 0;
        top: -1px;
        color: var(--hp-blue);
        font-size: 15px;
        font-weight: 700;
    }

    .hp-bullet-list li strong {
        color: var(--hp-heading-color);
        font-weight: 700;
    }

    /* Woman visual: use pre-cropped composite from reference design */
    .hp-woman-visual {
        width: 100%;
        margin-top: 18px;
    }

    .hp-woman-visual img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* ===== LEAD CAPTURE FORM CARD ===== */
    .hp-form-card {
        background-color: var(--hp-card-bg);
        border-radius: 4px;
        padding: 30px 28px 26px 28px;
        box-sizing: border-box;
    }

    .hp-form-header-logos {
        margin-bottom: 16px;
    }

    .hp-form-header-logos img {
        height: 38px;
        width: auto;
        object-fit: contain;
        display: block;
    }

    .hp-form-card h3 {
        font-size: 17px;
        font-weight: 700;
        color: var(--hp-heading-color);
        margin: 0 0 6px 0;
        letter-spacing: -0.01em;
    }

    .hp-form-card .hp-form-instruction {
        font-size: 13px;
        line-height: 1.45;
        color: var(--hp-subhead-color);
        margin: 0 0 16px 0;
    }

    .hp-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
        margin-bottom: 12px;
    }

    .hp-form-input {
        width: 100%;
        height: 36px;
        padding: 6px 12px;
        background-color: #ffffff;
        border: 1px solid var(--hp-border-subtle);
        border-radius: 2px;
        font-size: 12.5px;
        color: var(--hp-heading-color);
        outline: none;
        box-sizing: border-box;
        font-family: inherit;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .hp-form-input:focus {
        border-color: var(--hp-blue);
        box-shadow: 0 0 0 2px rgba(0, 87, 184, 0.12);
    }

    .hp-form-input::placeholder {
        color: #6b7280;
        font-size: 12px;
    }

    .hp-privacy-box {
        font-size: 10.5px;
        line-height: 1.45;
        color: var(--hp-subhead-color);
        margin-bottom: 10px;
    }

    .hp-privacy-box p {
        margin: 0 0 6px 0;
    }

    .hp-privacy-box strong {
        color: var(--hp-heading-color);
        font-weight: 700;
    }

    .hp-privacy-box a {
        color: var(--hp-blue);
        text-decoration: underline;
    }

    .hp-checkbox-row {
        display: flex;
        align-items: flex-start;
        gap: 6px;
        margin-bottom: 5px;
        cursor: pointer;
    }

    .hp-checkbox-row input[type="checkbox"] {
        accent-color: var(--hp-blue);
        margin-top: 1.5px;
        flex-shrink: 0;
        cursor: pointer;
    }

    .hp-checkbox-row input[type="checkbox"].checkbox-invalid {
        outline: 2px solid #ef4444;
        outline-offset: 1px;
    }

    .hp-checkbox-row span {
        font-size: 10.5px;
        line-height: 1.35;
        color: var(--hp-subhead-color);
    }

    .hp-required-star {
        color: #ef4444;
        font-weight: 700;
        margin-left: 2px;
    }

    .hp-btn-submit {
        display: inline-block;
        width: auto;
        min-width: 160px;
        height: 40px;
        background-color: var(--hp-blue);
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        border-radius: 3px;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.15s ease;
        margin-top: 12px;
        text-align: center;
        box-sizing: border-box;
        padding: 0 28px;
    }

    .hp-btn-submit:hover {
        background-color: var(--hp-blue-hover);
    }

    .hp-btn-submit:active {
        transform: scale(0.99);
    }

    .hp-btn-submit:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    .hp-form-alert {
        display: none;
        padding: 12px 14px;
        border-radius: 4px;
        font-size: 12.5px;
        line-height: 1.45;
        margin-bottom: 12px;
        text-align: left;
    }

    .hp-form-alert.success {
        display: block;
        background-color: #ecfdf5;
        border: 1px solid #10b981;
        color: #065f46;
    }

    .hp-form-alert.error {
        display: block;
        background-color: #fef2f2;
        border: 1px solid #ef4444;
        color: #991b1b;
    }

    /* ===== SUCCESS STATE PANEL ===== */
    .hp-success-panel {
        display: none;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 32px 20px;
        min-height: 260px;
    }

    .hp-success-panel.visible {
        display: flex;
    }

    .hp-success-icon {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        background-color: #10b981;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        flex-shrink: 0;
    }

    .hp-success-icon svg {
        width: 30px;
        height: 30px;
    }

    .hp-success-panel h4 {
        font-size: 16px;
        font-weight: 700;
        color: var(--hp-heading-color);
        margin: 0 0 8px 0;
    }

    .hp-success-panel p {
        font-size: 13px;
        color: var(--hp-subhead-color);
        line-height: 1.55;
        margin: 0 0 20px 0;
    }

    .hp-success-pdf-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background-color: var(--hp-blue);
        color: #ffffff !important;
        font-size: 13px;
        font-weight: 600;
        padding: 9px 22px;
        border-radius: 3px;
        text-decoration: none !important;
        transition: background-color 0.2s ease;
    }

    .hp-success-pdf-btn:hover {
        background-color: var(--hp-blue-hover);
    }

    /* ===== 4. LOWER PRODUCT SECTION ===== */
    .hp-product-section {
        background-color: var(--hp-bg-light);
        padding: 50px 0 55px 0;
        width: 100%;
    }

    .hp-product-grid {
        display: grid;
        grid-template-columns: 1.15fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .hp-product-col-left h2 {
        font-size: 25px;
        font-weight: 700;
        color: var(--hp-heading-color);
        line-height: 1.25;
        margin: 0 0 14px 0;
        letter-spacing: -0.01em;
    }

    .hp-product-col-left .hp-product-desc {
        font-size: 13.5px;
        line-height: 1.6;
        color: var(--hp-body-color);
        margin: 0 0 20px 0;
    }

    .hp-product-col-left .hp-product-desc sup {
        font-size: 0.6em;
        top: -0.4em;
    }

    .hp-product-col-left h3 {
        font-size: 15px;
        font-weight: 700;
        color: var(--hp-heading-color);
        margin: 0 0 10px 0;
    }

    /* Laptop product visual: use pre-cropped composite from reference design */
    .hp-product-visual {
        width: 80%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hp-product-visual img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }

    /* ===== 5. CONTACT / ADDRESS SECTION ===== */
    .hp-contact-section {
        background-color: #ffffff;
        padding: 32px 0 24px 0;
        width: 100%;
    }

    .hp-contact-row {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .hp-contact-row:last-child {
        margin-bottom: 0;
    }

    .hp-contact-icon {
        flex-shrink: 0;
        color: var(--hp-blue);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hp-contact-row p {
        font-size: 13.5px;
        color: #1f2937;
        margin: 0;
        line-height: 1.5;
    }

    .hp-contact-row p strong {
        font-weight: 700;
    }

    .hp-contact-row a {
        font-size: 13.5px;
        color: var(--hp-blue);
        text-decoration: none;
        line-height: 1.5;
    }

    .hp-contact-row a:hover {
        text-decoration: underline;
    }

    /* ===== 6. LEGAL FOOTER ===== */
    .hp-legal-footer {
        background-color: var(--hp-blue-footer);
        padding: 13px 20px;
        width: 100%;
        box-sizing: border-box;
    }

    .hp-copyright-text {
        font-size: 11.5px;
        color: #ffffff;
        text-align: center;
        margin: 0;
        letter-spacing: 0.01em;
        opacity: 0.95;
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 992px) {
        .hp-hero-grid,
        .hp-features-grid,
        .hp-product-grid {
            grid-template-columns: 1fr;
            gap: 36px;
        }

        .hp-hero-visual {
            justify-content: center;
        }

        .hp-hero-img-wrapper {
            width: 100%;
            height: 290px;
        }

        .hp-hero-slant-accent {
            left: 10px;
            width: 55px;
        }

        .hp-woman-visual {
            max-width: 100%;
            height: 220px;
        }

        .hp-woman-img-wrapper {
            width: 100%;
        }

        .hp-woman-slant-accent {
            right: 10px;
        }
    }

    @media (max-width: 640px) {
        .hp-header-inner {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .hp-brand-lockup img {
            height: 46px;
        }

        .hp-header-tagline {
            font-size: 13.5px;
        }

        .hp-hero-content h1 {
            font-size: 23px;
        }

        .hp-hero-cta-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 18px;
        }

        .hp-features-col-left h2,
        .hp-product-col-left h2 {
            font-size: 21px;
        }

        .hp-form-grid {
            grid-template-columns: 1fr;
        }

        .hp-form-card {
            padding: 22px 16px;
        }

        .hp-laptop-img {
            width: 100%;
        }
    }
</style>

<div class="hp-page">

    <!-- =====================================================
         1. TOP CO-BRANDING HEADER
         ===================================================== -->
    <header class="hp-header-bar">
        <div class="hp-container hp-header-inner">
            <div class="hp-brand-lockup">
                <img src="<?= base_url('images/hpaipcs/hp_intel_lockup.png') ?>"
                     alt="HP / Intel Core Ultra / Intel vPro" />
            </div>
            <div class="hp-header-tagline">
                That's the power of Intel Inside<sup>&reg;</sup>
            </div>
        </div>
    </header>

    <!-- =====================================================
         2. HERO SECTION
         ===================================================== -->
    <section class="hp-hero-section">
        <div class="hp-container hp-hero-grid">
            <!-- Left: Headline + Text + CTA + Partner Logo -->
            <div class="hp-hero-content">
                <h1>
                    Bring AI to Every Workday<br>
                    with <span class="hp-blue-text">HP AI PCs</span> Powered by<br>
                    Intel<sup>&reg;</sup> Core&trade; Ultra Processors and Intel vPro<sup>&reg;</sup>
                </h1>
                <p>
                    Turn everyday work into smarter work with AI-powered PCs that enhance productivity, improve collaboration, and support better business outcomes.
                </p>
                <div class="hp-hero-cta-row">
                    <a href="#hp-lead-form" class="hp-btn-primary" id="btn-get-copy">Get a copy</a>
                    <div class="hp-partner-badge">
                        <img src="<?= base_url('images/ithpllogo.png') ?>" alt="Innovative Techhub Pvt. Ltd." />
                    </div>
                </div>
            </div>

            <!-- Right: Office photo with blue diagonal accent - pre-cropped composite -->
            <div class="hp-hero-visual">
                <img src="<?= base_url('images/hpaipcs/hero-1.jpeg') ?>"
                     alt="Business professionals collaborating using HP AI PCs" />
            </div>
        </div>
    </section>

    <!-- =====================================================
         3. SECOND CONTENT SECTION: Features + Form Card
         ===================================================== -->
    <section class="hp-features-section">
        <div class="hp-container hp-features-grid">

            <!-- Left: Value Bullets + Woman photo with slant accent -->
            <div class="hp-features-col-left">
                <h2>AI PCs Designed for Today's Workplace</h2>
                <p class="hp-features-subhead">
                    Move your business forward with HP AI PCs Powered by Intel<sup>&reg;</sup> Core&trade; Ultra Processors and Intel vPro<sup>&reg;</sup>
                </p>
                <p class="hp-features-desc">
                    The workplace is evolving, and so are the demands on your devices. HP AI PCs are designed to help your workforce get more done with built-in AI experiences. Get ready to experience intelligent performance and enterprise-ready security.
                </p>
                <ul class="hp-bullet-list">
                    <li><strong>Smarter Productivity:</strong> Built-in AI helps employees complete everyday tasks faster.</li>
                    <li><strong>Built-In Security:</strong> Hardware-level protection helps safeguard devices and business data.</li>
                    <li><strong>Simplified for IT:</strong> Deploy, manage, and support devices from virtually anywhere.</li>
                    <li><strong>Collaborate with Confidence:</strong> AI-powered features help make every meeting more natural.</li>
                </ul>

                <!-- Photo with blue diagonal geometric accent - pre-cropped composite -->
                <div class="hp-woman-visual">
                    <img src="<?= base_url('images/hpaipcs/hero-2.jpeg') ?>"
                         alt="Professional working on HP AI PC laptop" loading="lazy" />
                </div>
            </div>

            <!-- Right: Lead Capture Form Card -->
            <div id="hp-lead-form" class="hp-form-card">
                <div class="hp-form-header-logos">
                    <img src="<?= base_url('images/hpaipcs/hp_intel_lockup.png') ?>"
                         alt="HP / Intel Core Ultra / Intel vPro" />
                </div>
                <h3>Download the free guide</h3>
                <p class="hp-form-instruction">
                    Complete the form below to receive your copy directly in your inbox.
                </p>

                <form id="hpAiPcsForm" action="<?= base_url('hpaipcs/submit') ?>" method="POST" novalidate>
                    <?= csrf_field() ?>
                    <div id="hpFormAlert" class="hp-form-alert"></div>
                    <div class="hp-form-grid">
                        <input type="text"  name="full_name"      id="full_name"      placeholder="Full Name"      class="hp-form-input" required autocomplete="name" />
                        <input type="tel"   name="mobile_number"  id="mobile_number"  placeholder="Mobile Number"  class="hp-form-input" required autocomplete="tel" />
                        <input type="email" name="business_email" id="business_email" placeholder="Business Email" class="hp-form-input" required autocomplete="email" />
                        <input type="text"  name="company_name"   id="company_name"   placeholder="Company Name"   class="hp-form-input" required autocomplete="organization" />
                        <input type="text"  name="designation"    id="designation"    placeholder="Designation"    class="hp-form-input" autocomplete="organization-title" />
                        <input type="text"  name="city"           id="city"           placeholder="City"           class="hp-form-input" autocomplete="address-level2" />
                    </div>

                    <div class="hp-privacy-box">
                        <p><strong>Privacy Notice:</strong><br>
                        We process your request to provide the document you downloaded. If you give your consent, we may also send you marketing communications and use your information to personalize the content and offers you receive.</p>
                        <p>You have the right to withdraw your consent at any time, access, correct, or delete your personal data, restrict or object to its processing, and request not to be subject to automated decision-making. You also have the right to receive clear and transparent information about how your data is processed.</p>
                        <p>Visit our Privacy Policy page for more detail <a href="<?= base_url('privacy-policy') ?>">here</a>.</p>

                        <label class="hp-checkbox-row">
                            <input type="checkbox" id="consent_processing" name="consent_processing" value="1" />
                            <span>I accept the processing of my data to receive the requested document.<span class="hp-required-star">*</span></span>
                        </label>
                        <label class="hp-checkbox-row">
                            <input type="checkbox" id="consent_marketing" name="consent_marketing" value="1" />
                            <span>I agree to receive marketing communications from ITHPL.</span>
                        </label>
                    </div>

                    <button type="submit" class="hp-btn-submit" id="btn-instant-access">Get Instant Access</button>
                </form>

                <!-- Success panel shown after submission -->
                <div id="hpSuccessPanel" class="hp-success-panel">
                    <div class="hp-success-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 13l4 4L19 7" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h4>Your form has been submitted successfully.</h4>
                    <p>Thank you! Your guide is ready. Click the button below if it didn't open automatically.</p>
                    <a href="<?= base_url('images/hpaipcs/Innovative Techhub Next Generation HP AI PCs - PDF.pdf') ?>" target="_blank" rel="noopener noreferrer" id="hpPdfLink" class="hp-success-pdf-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path d="M12 16l-4-4h2.5V4h3v8H16l-4 4z" fill="#ffffff"/>
                            <path d="M20 18H4v2h16v-2z" fill="#ffffff"/>
                        </svg>
                        Open Free Guide (PDF)
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- =====================================================
         4. LOWER PRODUCT SECTION
         ===================================================== -->
    <section class="hp-product-section">
        <div class="hp-container hp-product-grid">
            <!-- Left: Product Details + Success Bullets -->
            <div class="hp-product-col-left">
                <h2>One Device. Limitless Business Potential.</h2>
                <p class="hp-product-desc">
                    Meet the HP EliteBook X Series; an AI-ready business laptop that combines HP innovation with Intel<sup>&reg;</sup> Core&trade; Ultra processors and Intel vPro<sup>&reg;</sup> to help organizations work smarter, stay secure, and adapt to the future of work.
                </p>
                <h3>Built for Business Success</h3>
                <ul class="hp-bullet-list">
                    <li><strong>Future-ready technology</strong> that keeps pace with evolving business demands.</li>
                    <li><strong>Business-class reliability</strong> for dependable day-to-day operations.</li>
                    <li><strong>Flexible deployment</strong> across office, hybrid, and remote teams.</li>
                    <li><strong>Designed to deliver long-term value</strong> for growing organizations.</li>
                </ul>
            </div>

            <!-- Right: HP EliteBook X Laptop - pre-cropped composite -->
            <div class="hp-product-visual">
                <img src="<?= base_url('images/hpaipcs/hero-3.jpeg') ?>"
                     alt="HP EliteBook X Series AI-ready business laptop"
                     loading="lazy" />
            </div>
        </div>
    </section>

    <!-- =====================================================
         5. CONTACT / ADDRESS STRIP
         ===================================================== -->
    <section class="hp-contact-section">
        <div class="hp-container">
            <div class="hp-contact-row">
                <span class="hp-contact-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#0057b8"/>
                    </svg>
                </span>
                <p><strong>Innovative Techhub Pvt. Ltd.,</strong> 5th Floor, Survey No.15, Plot.No.P7, Innovative Tower, Kharadi, Pune - 411014</p>
            </div>
            <div class="hp-contact-row">
                <span class="hp-contact-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" fill="#0057b8"/>
                    </svg>
                </span>
                <a href="https://ithpl.com" target="_blank" rel="noopener noreferrer">https://ithpl.com</a>
            </div>
        </div>
    </section>

    <!-- =====================================================
         6. LEGAL FOOTER
         ===================================================== -->
    <footer class="hp-legal-footer">
        <div class="hp-container">
            <p class="hp-copyright-text">
                &copy; Copyright 2026, HP Development Company, LP. The information contained herein is subject to change without notice.
            </p>
        </div>
    </footer>

</div>

<!-- Client-side Interactions & Smooth Scroll -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    // "Get a copy" smooth scroll to lead form
    var getCopyBtn = document.getElementById('btn-get-copy');
    if (getCopyBtn) {
        getCopyBtn.addEventListener('click', function (e) {
            e.preventDefault();
            var formCard = document.getElementById('hp-lead-form');
            if (formCard) {
                formCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
                setTimeout(function () {
                    var firstField = document.getElementById('full_name');
                    if (firstField) firstField.focus();
                }, 600);
            }
        });
    }

    // Form Client Validation & AJAX Submission
    var form = document.getElementById('hpAiPcsForm');
    var alertBox = document.getElementById('hpFormAlert');
    var submitBtn = document.getElementById('btn-instant-access');
    var successPanel = document.getElementById('hpSuccessPanel');
    var pdfUrl = document.getElementById('hpPdfLink') ? document.getElementById('hpPdfLink').href : null;

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var requiredIds = ['full_name', 'mobile_number', 'business_email', 'company_name'];
            var isValid = true;
            var firstInvalid = null;

            // Reset alerts & borders
            if (alertBox) {
                alertBox.className = 'hp-form-alert';
                alertBox.style.display = 'none';
                alertBox.innerHTML = '';
            }

            requiredIds.forEach(function (id) {
                var el = document.getElementById(id);
                if (el) {
                    var val = el.value.trim();
                    if (!val) {
                        el.style.borderColor = '#ef4444';
                        isValid = false;
                        if (!firstInvalid) firstInvalid = el;
                    } else if (id === 'business_email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
                        el.style.borderColor = '#ef4444';
                        isValid = false;
                        if (!firstInvalid) firstInvalid = el;
                    } else {
                        el.style.borderColor = '';
                    }
                }
            });

            // Validate mandatory checkbox: consent_processing
            var consentCheckbox = document.getElementById('consent_processing');
            if (consentCheckbox && !consentCheckbox.checked) {
                consentCheckbox.classList.add('checkbox-invalid');
                isValid = false;
                if (!firstInvalid) firstInvalid = consentCheckbox;
            } else if (consentCheckbox) {
                consentCheckbox.classList.remove('checkbox-invalid');
            }

            if (!isValid) {
                if (alertBox) {
                    alertBox.className = 'hp-form-alert error';
                    alertBox.innerHTML = '<strong>Please check your details:</strong> Please fill in all required fields and accept the data processing consent to proceed.';
                    alertBox.style.display = 'block';
                }
                if (firstInvalid) {
                    firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    setTimeout(function () { firstInvalid.focus(); }, 300);
                }
                return;
            }

            // Submit via AJAX
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span style="display:inline-block;animation:spin 1s linear infinite;">&#9696;</span> Submitting...';
            }

            var formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(function (response) {
                return response.json().then(function (data) {
                    return { ok: response.ok, status: response.status, data: data };
                }).catch(function () {
                    return { ok: response.ok, status: response.status, data: {} };
                });
            })
            .then(function (res) {
                if (res.ok && res.data && res.data.status === 200) {
                    // Hide the form, show success panel
                    form.style.display = 'none';
                    if (successPanel) {
                        successPanel.classList.add('visible');
                        successPanel.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    // Open PDF in a new tab
                    if (pdfUrl) {
                        window.open(pdfUrl, '_blank', 'noopener,noreferrer');
                    }
                } else {
                    var errorMsg = (res.data && res.data.message) ? res.data.message : 'An error occurred while submitting your request. Please try again.';
                    if (alertBox) {
                        alertBox.className = 'hp-form-alert error';
                        alertBox.innerHTML = '<strong>Error:</strong> ' + errorMsg;
                        alertBox.style.display = 'block';
                    }
                }
            })
            .catch(function (err) {
                console.error('Submission error:', err);
                if (alertBox) {
                    alertBox.className = 'hp-form-alert error';
                    alertBox.innerHTML = '<strong>Error:</strong> Network error occurred. Please check your connection and try again.';
                    alertBox.style.display = 'block';
                }
            })
            .finally(function () {
                if (submitBtn && form.style.display !== 'none') {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Get Instant Access';
                }
            });
        });

        // Remove checkbox error highlight on change
        var consentCb = document.getElementById('consent_processing');
        if (consentCb) {
            consentCb.addEventListener('change', function () {
                if (this.checked) {
                    this.classList.remove('checkbox-invalid');
                }
            });
        }
    }
});
</script>