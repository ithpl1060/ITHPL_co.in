

<style>
  .apple-subnav-blur {
    background: rgba(255, 255, 255, 0.88);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
  }
  .apple-card {
    background: #ffffff;
    border-radius: 1.5rem;
    border: 1px solid rgba(0, 0, 0, 0.06);
    box-shadow: 0 4px 24px -2px rgba(0, 0, 0, 0.04);
    overflow: hidden;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
  }
  @media (min-width: 640px) {
    .apple-card {
      border-radius: 2rem;
    }
  }
  .apple-card:hover {
    box-shadow: 0 16px 40px -4px rgba(0, 0, 0, 0.08);
    transform: translateY(-2px);
  }
  .apple-card-img {
    width: 100%;
    height: auto;
    display: block;
  }
  /* Interactive Hotspot Pins */
  .hotspot-pin {
    position: absolute;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: rgba(0, 113, 227, 0.95);
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 2px 10px rgba(0, 113, 227, 0.45);
    transform: translate(-50%, -50%);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    z-index: 20;
    user-select: none;
  }
  .hotspot-pin::after {
    content: '';
    position: absolute;
    inset: -6px;
    border-radius: 50%;
    border: 2px solid rgba(0, 113, 227, 0.6);
    animation: hotspot-radar 2.2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
  }
  @keyframes hotspot-radar {
    0% { transform: scale(0.6); opacity: 0.9; }
    50% { opacity: 0.35; }
    100% { transform: scale(1.4); opacity: 0; }
  }
  .hotspot-pin:hover, .hotspot-pin.is-active {
    background: #0077ed;
    transform: translate(-50%, -50%) scale(1.18);
    box-shadow: 0 4px 16px rgba(0, 113, 227, 0.65);
    z-index: 35;
  }
  .hotspot-tooltip {
    position: absolute;
    bottom: calc(100% + 10px);
    left: 50%;
    transform: translateX(-50%) translateY(6px);
    background: rgba(29, 29, 31, 0.96);
    color: #f5f5f7;
    padding: 9px 14px;
    border-radius: 12px;
    font-size: 11px;
    line-height: 1.45;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    pointer-events: none;
    backdrop-filter: blur(16px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.16);
    z-index: 40;
  }
  .hotspot-tooltip::after {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    border-width: 6px;
    border-style: solid;
    border-color: rgba(29, 29, 31, 0.96) transparent transparent transparent;
  }
  .hotspot-pin:hover .hotspot-tooltip,
  .hotspot-pin.is-active .hotspot-tooltip {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
  }
  /* Segmented Control */
  .chip-tab-btn {
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .chip-tab-btn.active {
    background: #ffffff !important;
    color: #1d1d1f !important;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12) !important;
  }
  /* Configurator Modal Radio Cards */
  .spec-radio-card {
    border: 1.5px solid #e5e5ea;
    background: #ffffff;
    transition: all 0.2s ease;
  }
  .spec-radio-card:hover {
    border-color: #b0b0b8;
  }
  .spec-radio-card.is-selected {
    border-color: #0071e3 !important;
    background: rgba(0, 113, 227, 0.04) !important;
    box-shadow: 0 0 0 1px #0071e3 inset !important;
  }
  .pref-tag-btn {
    font-size: 11px;
    font-weight: 500;
    padding: 5px 11px;
    border-radius: 9999px;
    background: #f5f5f7;
    border: 1px solid rgba(0, 0, 0, 0.06);
    color: #1d1d1f;
    transition: all 0.2s ease;
    cursor: pointer;
  }
  .pref-tag-btn:hover {
    background: #e8e8ed;
  }
  .pref-tag-btn.is-active {
    background: #0071e3 !important;
    color: #ffffff !important;
    border-color: #0071e3 !important;
  }
  .field-error-msg {
    color: #e02424;
    font-size: 11px;
    margin-top: 4px;
    display: block;
  }
</style>

<div class="bg-white text-[#1d1d1f] antialiased selection:bg-blue-100 selection:text-blue-900" data-product-key="mac_mini">

  <!-- ==================== STICKY PRODUCT SUBNAV ==================== -->
  <div id="apple-subnav"
    class="sticky top-[58px] sm:top-[73px] z-40 w-full apple-subnav-blur border-b border-black/[0.06] transition-all duration-300 shadow-sm">
    <div class="max-w-[1024px] mx-auto px-3 sm:px-4 h-11 sm:h-13 flex items-center justify-between py-1.5 sm:py-2.5">
      <div class="flex items-baseline space-x-2 sm:space-x-3">
        <a href="#sec-hero"
          class="text-lg sm:text-xl font-bold tracking-tight text-[#1d1d1f] hover:text-blue-600 transition-colors">Mac
          mini</a>
      </div>

      <div class="flex items-center space-x-3 sm:space-x-6 text-xs">
        <nav class="hidden md:flex items-center space-x-5 text-gray-600">
          <a href="#sec-hero" class="hover:text-black font-medium text-black">Overview</a>
          <a href="#sec-b2b" class="hover:text-blue-600 font-medium text-blue-600">Enterprise</a>
          <a href="#sec-ports" class="hover:text-black">Ports</a>
          <a href="#sec-chips" class="hover:text-black">M6 &amp; M5 Pro</a>
          <a href="#sec-specs" class="hover:text-black">Tech Specs</a>
          <a href="#sec-legal" class="hover:text-black text-gray-400">Legal</a>
        </nav>

        <button
          class="trigger-buy-modal bg-[#0071e3] hover:bg-[#0077ed] text-white px-3.5 sm:px-4 py-1.5 rounded-full text-xs font-medium transition duration-200 transform hover:scale-[1.03] shadow-sm flex items-center gap-1.5 cursor-pointer"
          data-product-key="mac_mini">
          <span>Order Now</span>
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== QUICK JUMP NAVIGATION BAR ==================== -->
  <!-- <div
    class="bg-[#faf7f4] border-b border-gray-200/60 py-2 sm:py-2.5 px-3 sm:px-4 overflow-x-auto text-xs text-gray-500 whitespace-nowrap scrollbar-none touch-scroll">
    <div
      class="max-w-[1024px] mx-auto flex items-center justify-start md:justify-center space-x-4 sm:space-x-6 min-w-max px-1">
      <span class="font-semibold text-gray-800 flex items-center gap-1.5">
        <svg class="w-3 h-3 text-blue-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
            clip-rule="evenodd" />
        </svg>
        Explore:
      </span>
      <a href="#sec-hero" class="hover:text-blue-600 transition-colors">Hero</a>
      <a href="#sec-b2b" class="hover:text-blue-600 transition-colors font-medium text-blue-600">Enterprise Benefits</a>
      <a href="#sec-size" class="hover:text-blue-600 transition-colors">Size (12.7 cm)</a>
      <a href="#sec-ports" class="hover:text-blue-600 transition-colors">Ports</a>
      <a href="#sec-thermal" class="hover:text-blue-600 transition-colors">Thermal System</a>
      <a href="#sec-intelligence" class="hover:text-blue-600 transition-colors">Apple Intelligence</a>
      <a href="#sec-storage" class="hover:text-blue-600 transition-colors">Faster SSD</a>
      <a href="#sec-apps" class="hover:text-blue-600 transition-colors">Apps on Mac</a>
      <a href="#sec-chip-compare" class="hover:text-blue-600 transition-colors font-medium text-blue-600">M4 vs M4
        Pro</a>
      <a href="#sec-specs" class="hover:text-blue-600 transition-colors">Compare Models</a>
    </div>
  </div> -->

  <!-- ==================== MAIN MARKETING CONTENT ==================== -->
  <main class="w-full bg-white overflow-hidden pb-">

    <!-- ==================== SECTION 1: HERO BANNER ==================== -->
    <section id="sec-hero" class="w-full bg-[#faf7f4] relative border-b border-gray-200/50">
      <div class="max-w-[1920px] mx-auto relative group">
        <picture>
          
          <img src="<?= base_url('images/appleProducts/mac_mini/') ?>hero_banner.jpg"
            alt="Mac mini - Built for Apple Intelligence. Ultra-compact, fiercer, and more versatile than ever."
            class="w-full h-auto object-cover block" loading="eager" width="3000" height="1879">
        </picture>
        <!-- Overlay CTA for accessibility & interaction -->
        <!-- <div
          class="absolute bottom-4 sm:bottom-10 left-1/2 -translate-x-1/2 flex flex-col sm:flex-row items-center gap-2.5 sm:gap-4 w-11/12 sm:w-auto max-w-sm sm:max-w-none opacity-90 sm:opacity-0 sm:group-hover:opacity-100 transition-all duration-300">
          <button
            class="trigger-buy-modal w-full sm:w-auto justify-center bg-[#0071e3] hover:bg-[#0077ed] text-white px-6 py-2.5 rounded-full text-xs sm:text-sm font-semibold shadow-lg hover:shadow-xl transition-all flex items-center gap-2 cursor-pointer">
            <span>Buy Now</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </button>
          <a href="#sec-b2b"
            class="w-full sm:w-auto text-center bg-white/95 hover:bg-white text-gray-900 px-6 py-2.5 rounded-full text-xs sm:text-sm font-semibold backdrop-blur shadow hover:shadow-md transition-all">
            Enterprise Benefits ↓
          </a>
        </div> -->
      </div>
    </section>

    <!-- ==================== B2B ENTERPRISE PROCUREMENT HIGHLIGHTS ==================== -->


    <!-- Content Wrapper for 2044px grid modules -->
    <div
      class="max-w-[1440px] xl:max-w-[1680px] 2xl:max-w-[2044px] mx-auto px-3 sm:px-6 lg:px-8 space-y-6 sm:space-y-9 mt-6 sm:mt-9">

      <!-- ==================== SECTION 2: SIZE & FORM FACTOR ==================== -->
      <section id="sec-size" class="apple-card relative overflow-hidden group">
        <picture>
          
          <img src="<?= base_url('images/appleProducts/mac_mini/') ?>size_card.jpg" alt="12.7 cm - Sized to fit. Built to conquer."
            class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
            width="2044" height="878">
        </picture>
      </section>

      <!-- ==================== SECTION 3: PORTS & CONNECTIVITY ==================== -->
      <section id="sec-ports" class="apple-card relative overflow-hidden group">
        <picture>
          
          <img src="<?= base_url('images/appleProducts/mac_mini/') ?>ports_card.jpg"
            alt="Front and back ports on Mac mini - USB-C, 3.5mm headphone jack, Thunderbolt, HDMI, Gigabit Ethernet"
            class="apple-card-img" loading="lazy" width="2044" height="878">
        </picture>

        <!-- Front Ports Interactive Hotspots -->
        <div class="hotspot-pin" style="left: 20%; top: 62%;">
          +
          <div class="hotspot-tooltip">
            <strong>2× USB-C Ports</strong><br>Supports USB 3 (up to 10Gb/s) &amp; device charging
          </div>
        </div>

        <div class="hotspot-pin" style="left: 31%; top: 62%;">
          +
          <div class="hotspot-tooltip">
            <strong>3.5 mm Headphone Jack</strong><br>Advanced support for high-impedance headphones
          </div>
        </div>

        <!-- Back Ports Interactive Hotspots -->
        <div class="hotspot-pin" style="left: 64%; top: 62%;">
          +
          <div class="hotspot-tooltip">
            <strong>Ethernet Port</strong><br>Gigabit Ethernet (configurable to 10Gb Ethernet)
          </div>
        </div>

        <div class="hotspot-pin" style="left: 72%; top: 62%;">
          +
          <div class="hotspot-tooltip">
            <strong>HDMI 2.1 Port</strong><br>Support for up to 8K display at 60Hz or 4K at 240Hz
          </div>
        </div>

        <div class="hotspot-pin" style="left: 82%; top: 62%;">
          +
          <div class="hotspot-tooltip">
            <strong>3× Thunderbolt 4 / 5</strong><br>Data transfer up to 120Gb/s on M4 Pro, DisplayPort, Charging
          </div>
        </div>
      </section>

      <!-- ==================== SECTION 4 & 5: THERMAL & M4/M4 PRO (2-COLUMN GRID) ==================== -->
      <section id="sec-thermal" class="grid grid-cols-1 md:grid-cols-2 gap-9">
        <!-- Section 4: Innovative Thermal Architecture -->
        <article class="apple-card group">
          <picture>
            
            <img src="<?= base_url('images/appleProducts/mac_mini/') ?>thermal_card.jpg"
              alt="Innovative thermal system - stays cool and quiet under heavy workloads"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
              width="1003" height="878">
          </picture>
        </article>

        <!-- Section 5: Supercharged by M6 & M5 Pro Chips -->
        <article id="sec-chips" class="apple-card group">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_mini/') ?>chips_card.jpg" alt="Supercharged by Apple M6 and M5 Pro chips"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
              width="1003" height="878">
          </picture>
        </article>
      </section>

      <!-- ==================== SECTION 6: APPLE INTELLIGENCE ==================== -->
      <section id="sec-intelligence" class="apple-card siri-glow relative overflow-hidden group">
        <picture>
          
          <img src="<?= base_url('images/appleProducts/mac_mini/') ?>intelligence_card.jpg" alt="Designed for Apple Intelligence. Personal, private, powerful."
            class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
            width="2044" height="1003">
        </picture>
      </section>

      <!-- ==================== SECTION 7 & 8: SIRI AI & STORAGE (ASYMMETRIC GRID) ==================== -->
      <section id="sec-storage" class="grid grid-cols-1 lg:grid-cols-12 gap-9">
        <!-- Section 7: Siri AI -->
        <article class="lg:col-span-4 apple-card group">
          <picture>
            
            <img src="<?= base_url('images/appleProducts/mac_mini/') ?>siri_ai_card.jpg" alt="Siri AI coming in English later this year"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
              width="655" height="878">
          </picture>
        </article>

        <!-- Section 8: Faster Storage -->
        <article class="lg:col-span-8 apple-card group">
          <picture>
            
            <img src="<?= base_url('images/appleProducts/mac_mini/') ?>storage_card.jpg"
              alt="Up to 2x faster SSD storage. Open files, launch apps, and transfer media in a flash."
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
              width="1351" height="878">
          </picture>
        </article>
      </section>

      <!-- ==================== SECTION 9: APPS ECOSYSTEM ==================== -->
      <section id="sec-apps" class="apple-card relative overflow-hidden group">
        <picture>
          
          <img src="<?= base_url('images/appleProducts/mac_mini/') ?>apps_card.jpg"
            alt="Apps fly on Mac mini - Microsoft 365, Adobe Creative Cloud, Logic Pro, Xcode, Final Cut Pro, and more"
            class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
            width="2044" height="878">
        </picture>
      </section>

      <!-- ==================== SECTION 10 & 11: IPHONE & ACCESSORIES (2-COLUMN GRID) ==================== -->
      <section id="sec-ecosystem" class="grid grid-cols-1 md:grid-cols-2 gap-9">
        <!-- Section 10: iPhone Mirroring -->
        <article class="apple-card group">
          <picture>
            
            <img src="<?= base_url('images/appleProducts/mac_mini/') ?>iphone_card.jpg"
              alt="Mac + iPhone. iPhone Mirroring lets you view and use your iPhone directly from your Mac."
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
              width="1003" height="878">
          </picture>
        </article>

        <!-- Section 11: Magic Accessories -->
        <article id="sec-accessories" class="apple-card group">
          <picture>
            
            <img src="<?= base_url('images/appleProducts/mac_mini/') ?>accessories_card.jpg"
              alt="Magic accessories - Magic Keyboard with Touch ID, Magic Mouse, and Magic Trackpad with USB-C"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
              width="1003" height="878">
          </picture>
        </article>
      </section>

    </div><!-- End max-w-[2044px] content wrapper -->

    <!-- ==================== SECTION 12: CHIP COMPARISON BANNER & INTERACTIVE CARDS ==================== -->
    <section id="sec-chip-compare" class="w-full mt-8 sm:mt-14 bg-[#f5f5f7] py-8 sm:py-12 border-y border-gray-200/50">
      <div class="max-w-[1440px] xl:max-w-[1680px] 2xl:max-w-[2044px] mx-auto px-3 sm:px-6 lg:px-8">

        <!-- Section Header & Polished Segmented Control -->
        <div
          class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5 mb-6 sm:mb-8 pb-4 border-b border-gray-300/60">
          <div>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#1d1d1f]">Order Mac mini</h2>
            <p class="text-gray-500 text-xs sm:text-sm mt-1 max-w-2xl">
              M6 and M5 Pro make everything feel extra responsive. And for the first time on Mac mini, Neural Accelerators in the GPU speed up all kinds of AI tasks.
            </p>
          </div>

          <!-- Apple macOS-style Segmented Control -->
          <div class="relative flex items-center bg-[#e5e5ea] p-[3px] rounded-[11px] gap-0 shadow-inner flex-shrink-0"
            role="group" aria-label="Filter chip models">
            <button
              class="chip-tab-btn relative z-10 px-4 sm:px-5 py-[7px] rounded-[9px] text-[11px] sm:text-xs font-semibold text-[#1d1d1f] bg-white shadow-[0_1px_3px_rgba(0,0,0,0.12)] transition-all duration-200 cursor-pointer"
              data-chip="all" aria-pressed="true">
              Compare Both
            </button>
            <button
              class="chip-tab-btn relative z-10 px-4 sm:px-5 py-[7px] rounded-[9px] text-[11px] sm:text-xs font-semibold text-[#3c3c43]/70 hover:text-[#1d1d1f] transition-all duration-200 cursor-pointer"
              data-chip="m6" aria-pressed="false">
              Apple M6
            </button>
            <button
              class="chip-tab-btn relative z-10 px-4 sm:px-5 py-[7px] rounded-[9px] text-[11px] sm:text-xs font-semibold text-[#3c3c43]/70 hover:text-[#1d1d1f] transition-all duration-200 cursor-pointer"
              data-chip="m5pro" aria-pressed="false">
              Apple M5 Pro
            </button>
          </div>
        </div>

        <!-- Section Sub-headline -->
        <div class="text-center my-6 sm:my-10 max-w-3xl mx-auto">
          <p class="text-xs font-bold uppercase tracking-widest text-blue-600 mb-1">Chip Architecture</p>
          <h3 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#1d1d1f] leading-snug">
            Choose from these powerful options.
          </h3>
        </div>

        <!-- Visual Chip Comparison Cards Grid -->
        <div id="chip-cards-grid"
          class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-9 max-w-6xl mx-auto transition-all duration-300">
          <!-- M6 Card -->
          <div
            class="chip-compare-card bg-white rounded-3xl p-5 sm:p-7 shadow-sm border border-black/[0.06] transition-all duration-300 flex flex-col justify-between"
            data-chip="m6">
            <div>
              <!-- Card Header -->
              <div class="text-center pb-4 mb-4 border-b border-gray-100">
                <span
                  class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-semibold mb-2">
                  <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                  Apple M6 chip
                </span>
                <h4 class="text-xl sm:text-2xl font-bold text-[#1d1d1f]">Mac mini (M6)</h4>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Blazing fast, with next-level performance, for the personal, professional, and creative tasks you do every day.</p>
              </div>

              <!-- Spec highlights list -->
              <div class="space-y-3 mb-5 text-xs">
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">Processing Architecture</span>
                  <span class="font-bold text-[#1d1d1f]">12-core CPU · 12-core GPU</span>
                </div>
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">AI Engine</span>
                  <span class="font-bold text-blue-600">Dual 16-core Neural Engine</span>
                </div>
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">Hardware AI Acceleration</span>
                  <span class="font-bold text-[#1d1d1f]">Neural Accelerators in GPU</span>
                </div>
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">Unified Memory</span>
                  <span class="font-bold text-[#1d1d1f]">Up to 32GB unified memory</span>
                </div>
              </div>

              <!-- Clean 4-Feature Tiles Graphic -->
              <div class="relative overflow-hidden rounded-2xl bg-[#f5f5f7]">
                <picture>
                  <img src="<?= base_url('images/appleProducts/mac_mini/') ?>chip_compare_m4.jpg"
                    alt="Mac mini M6 features and performance"
                    class="w-full h-auto block rounded-2xl transition-transform duration-500 hover:scale-[1.01]"
                    loading="lazy" width="910" height="795">
                </picture>
              </div>
            </div>

            <!-- Polished typographic CTA -->
            <div class="pt-5 mt-5 border-t border-gray-100 flex items-center justify-between">
              <span class="text-[11px] text-gray-400 font-medium">Apple M6 · Mac mini</span>
              <button
                class="trigger-buy-modal group inline-flex items-center gap-1.5 text-xs font-semibold text-[#0071e3] hover:text-[#0077ed] transition-colors cursor-pointer"
                data-product-key="mac_mini" data-preset-chip="m6" aria-label="Buy Mac mini with Apple M6">
                Order Now
                <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div>
          </div>

          <!-- M5 Pro Card -->
          <div
            class="chip-compare-card bg-white rounded-3xl p-5 sm:p-7 shadow-sm border border-black/[0.06] transition-all duration-300 flex flex-col justify-between"
            data-chip="m5pro">
            <div>
              <!-- Card Header -->
              <div class="text-center pb-4 mb-4 border-b border-gray-100">
                <span
                  class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-purple-50 border border-purple-200 text-purple-700 text-xs font-semibold mb-2">
                  <span class="w-1.5 h-1.5 rounded-full bg-purple-600"></span>
                  Apple M5 Pro chip
                </span>
                <h4 class="text-xl sm:text-2xl font-bold text-[#1d1d1f]">Mac mini (M5 Pro)</h4>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Provides more performance and higher memory options for demanding workflows.</p>
              </div>

              <!-- Spec highlights list -->
              <div class="space-y-3 mb-5 text-xs">
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">Processing Architecture</span>
                  <span class="font-bold text-[#1d1d1f]">18-core CPU · 20-core GPU</span>
                </div>
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">AI Engine</span>
                  <span class="font-bold text-purple-600">16-core Neural Engine</span>
                </div>
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">Pro High-Speed I/O</span>
                  <span class="font-bold text-[#1d1d1f]">Thunderbolt 5 up to 120Gb/s</span>
                </div>
                <div class="bg-[#f5f5f7] p-3 rounded-xl flex items-center justify-between">
                  <span class="text-gray-500">Unified Memory</span>
                  <span class="font-bold text-[#1d1d1f]">Up to 64GB unified memory</span>
                </div>
              </div>

              <!-- Clean 4-Feature Tiles Graphic -->
              <div class="relative overflow-hidden rounded-2xl bg-[#f5f5f7]">
                <picture>
                  <img src="<?= base_url('images/appleProducts/mac_mini/') ?>chip_compare_m4pro.jpg"
                    alt="Mac mini M5 Pro features and performance"
                    class="w-full h-auto block rounded-2xl transition-transform duration-500 hover:scale-[1.01]"
                    loading="lazy" width="910" height="795">
                </picture>
              </div>
            </div>

            <!-- Polished typographic CTA -->
            <div class="pt-5 mt-5 border-t border-gray-100 flex items-center justify-between">
              <span class="text-[11px] text-gray-400 font-medium">Apple M5 Pro · Mac mini</span>
              <button
                class="trigger-buy-modal group inline-flex items-center gap-1.5 text-xs font-semibold text-[#0071e3] hover:text-[#0077ed] transition-colors cursor-pointer"
                data-product-key="mac_mini" data-preset-chip="m5pro" aria-label="Buy Mac mini with Apple M5 Pro">
                Order Now
                <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Wrapper for Remaining Sections -->
    <div
      class="max-w-[1440px] xl:max-w-[1680px] 2xl:max-w-[2044px] mx-auto px-3 sm:px-6 lg:px-8 space-y-6 sm:space-y-9 mt-8 sm:mt-14">

      <!-- ==================== SECTION 13: WHY MAC (3-COLUMN CARDS) ==================== -->
      <section id="sec-why-mac">
        <div class="text-center max-w-2xl mx-auto mb-6 sm:mb-8">
          <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-[#1d1d1f]">Why Mac</h2>
          <p class="text-gray-500 text-xs sm:text-sm mt-1.5 sm:mt-2">Engineered to elevate everything you do with
            unmatched ease, power, and durability.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:gap-8">
          <!-- Card 1: Easy to Learn -->
          <article class="apple-card group">
            <picture>
              
              <img src="<?= base_url('images/appleProducts/mac_mini/') ?>why_mac_easy.jpg" alt="Mac is designed to be easy to learn and use"
                class="apple-card-img transition-transform duration-500 group-hover:scale-[1.02]" loading="lazy"
                width="655" height="653">
            </picture>
          </article>

          <!-- Card 2: Incredible Power & Speed -->
          <article class="apple-card group">
            <picture>
              
              <img src="<?= base_url('images/appleProducts/mac_mini/') ?>why_mac_power.jpg"
                alt="The combination of Apple silicon and macOS means Mac delivers incredible power and speed"
                class="apple-card-img transition-transform duration-500 group-hover:scale-[1.02]" loading="lazy"
                width="658" height="653">
            </picture>
          </article>

          <!-- Card 3: Built to Last -->
          <article class="apple-card group">
            <picture>
              
              <img src="<?= base_url('images/appleProducts/mac_mini/') ?>why_mac_durable.jpg"
                alt="With a durable aluminium enclosure and free software updates, Mac is in it for the long haul"
                class="apple-card-img transition-transform duration-500 group-hover:scale-[1.02]" loading="lazy"
                width="655" height="653">
            </picture>
          </article>
        </div>
      </section>

      <!-- ==================== SECTION 14: TECH SPECS COMPARISON MATRIX ==================== -->
      <section id="sec-specs" class="apple-card p-4 sm:p-8 bg-white border border-gray-200/80 shadow-sm">
        <div class="text-center max-w-3xl mx-auto mb-6 sm:mb-10">
          <span class="text-xs font-semibold text-blue-600 uppercase tracking-widest">Compare</span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#1d1d1f] mt-1">Which Mac mini is
            right for you?</h2>
          <p class="text-gray-500 text-xs sm:text-sm mt-1.5 sm:mt-2">Compare Mac mini models across processing power,
            memory, ports, and display capabilities.</p>
        </div>

        <div class="relative overflow-hidden rounded-xl sm:rounded-2xl border border-gray-100">
          <picture>
            
            <img src="<?= base_url('images/appleProducts/mac_mini/') ?>tech_specs_matrix.jpg"
              alt="Mac mini technical specifications comparison table - M4 vs M4 Pro vs previous models"
              class="apple-card-img" loading="lazy" width="2044" height="2426">
          </picture>
        </div>

        <!-- Polished specs CTA strip -->
        <div
          class="mt-8 sm:mt-10 bg-white/70 backdrop-blur-sm border border-black/[0.06] rounded-2xl px-5 sm:px-8 py-4 sm:py-5 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
          <div class="text-center sm:text-left">
            <p class="text-sm font-semibold text-[#1d1d1f]">Ready to configure your fleet?</p>
            <p class="text-xs text-gray-500 mt-0.5">GST tax invoice · Volume pricing · Zero-touch MDM</p>
          </div>
          <button
            class="trigger-buy-modal group flex-shrink-0 inline-flex items-center gap-2 bg-[#1d1d1f] hover:bg-[#2d2d2f] text-white text-xs sm:text-sm font-semibold px-6 py-2.5 rounded-full shadow-sm transition-all duration-200 cursor-pointer"
            data-product-key="mac_mini">
            <span>Configure &amp; Order Now</span>
            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </section>

      <!-- ==================== SECTION 15: APPLECARE+ PROTECTION PLAN ==================== -->
      <section id="sec-applecare" class="apple-card group">
        <picture>
          
          <img src="<?= base_url('images/appleProducts/mac_mini/') ?>applecare_card.jpg"
            alt="AppleCare+ for Mac - Enjoy easy, fast repairs for accidents like drops and spills, and priority care."
            class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy"
            width="2044" height="868">
        </picture>
      </section>

      <!-- ==================== SECTION 16: LEGAL DISCLAIMERS & FOOTNOTES ==================== -->
      <section id="sec-legal" class="pt-10  border-t border-gray-200 text-[#86868b] text-[11px] leading-relaxed">
        <h3 class="font-bold text-gray-700 text-xs mb-4 uppercase tracking-wider">◊ Legal Disclaimers</h3>

        <div class="space-y-4">
          <p id="footnote-accessories">
            Accessories: Accessories are sold separately; availability varies by region.
          </p>

          <p id="footnote-intelligence">
            Apple Intelligence: Apple Intelligence is available with Siri and device language set to Chinese (Simplified), Chinese (Traditional), Danish, Dutch, English, French, German, Italian, Japanese, Korean, Norwegian, Portuguese, Spanish, Swedish, Turkish or Vietnamese. Some features may not be available in all regions or languages. Some devices may not be available in all regions.
          </p>

          <p id="footnote-apps">
            Apps: Some apps and services may require a subscription. Some software is sold separately.
          </p>

          <p id="footnote-availability">
            Feature, App and Service Availability: Features are subject to change. Some features, applications and services may not be available in all regions or languages.
          </p>

          <p id="footnote-siri">
            Siri AI: Siri AI will be available in beta later this year and requires an Apple Intelligence–enabled device set to a supported language. Available in English to start. Siri AI will not initially be available in the EU on iOS, iPadOS and watchOS.
          </p>

          <p id="footnote-storage">
            Storage: Actual formatted capacity of SSD is less.
          </p>

          <p id="footnote-faster-storage">
            Up to 2x Faster Storage: Testing conducted by Apple in July 2026 using pre-production Mac mini systems with Apple M6, 12-core CPU and 12-core GPU, and production Mac mini systems with Apple M4, 10-core CPU and 10-core GPU, both configured with 32GB of unified memory and 2TB SSD. Tested with FIO 3.42, 1024KB request size, 10GB test file and IO depth=8. Mac mini systems tested with an attached 5K display. Performance tests are conducted using specific computer systems and reflect the approximate performance of Mac mini.
          </p>

          <p id="footnote-faster-m4">
            Up to 4.8x Faster than M4: Testing conducted by Apple in July 2026 using pre-production Mac mini systems with Apple M6, 12-core CPU and 12-core GPU, and production Mac mini systems with Apple M4, 10-core CPU and 10-core GPU, both configured with 32GB of unified memory and 2TB SSD. Time to first token measured with an 8K-token prompt using a 14-billion parameter model with 4-bit quantisation, and LM Studio 0.4.18+1. Mac mini systems tested with an attached 5K display. Performance tests are conducted using specific computer systems and reflect the approximate performance of Mac mini.
          </p>

          <p id="footnote-faster-m4-pro">
            Up to 4x Faster than M4 Pro: Testing conducted by Apple in July 2026 using pre-production Mac mini systems with Apple M5 Pro, 18-core CPU, 20-core GPU, 64GB of unified memory and 8TB SSD, as well as production Mac mini systems with Apple M4 Pro, 14-core CPU, 20-core GPU, 64GB of unified memory and 8TB SSD. Time to first token measured with an 8K-token prompt using a 14-billion parameter model with 4-bit quantisation, and LM Studio 0.4.18+1. Mac mini systems tested with an attached 5K display. Performance tests are conducted using specific computer systems and reflect the approximate performance of Mac mini.
          </p>

          <p id="footnote-3d-m1">
            Up to 10.3x Faster Graphics for 3D Rendering than Mac mini with M1 Chip: Testing conducted by Apple in July 2026 using pre-production Mac mini systems with Apple M6, 12-core CPU, 12-core GPU and 32GB of unified memory, as well as production Mac mini systems with Apple M4, 10-core CPU, 10-core GPU and 32GB of unified memory, and Mac mini systems with Apple M1, 8-core CPU, 8-core GPU and 16GB of unified memory, all configured with 2TB SSD. Tested with Blender 5.2.0 using the built-in benchmark. Mac mini systems tested with an attached 5K display. Performance tests are conducted using specific computer systems and reflect the approximate performance of Mac mini.
          </p>

          <p id="footnote-llm-m1">
            Up to 13.5x Faster with LLM Prompt Processing than Mac mini with M1 Chip: Testing conducted by Apple in July 2026 using pre-production Mac mini systems with Apple M6, 12-core CPU, 12-core GPU and 32GB of unified memory, as well as production Mac mini systems with Apple M4, 10-core CPU, 10-core GPU and 32GB of unified memory, and Mac mini systems with Apple M1, 8-core CPU, 8-core GPU and 16GB of unified memory, all configured with 2TB SSD. Time to first token measured with an 8K-token prompt using a 14-billion parameter model with 4-bit quantisation, and LM Studio 0.4.18+1. Mac mini systems tested with an attached 5K display. Performance tests are conducted using specific computer systems and reflect the approximate performance of Mac mini.
          </p>

          <p id="footnote-gpu-m2-pro">
            Up to 4.5x Faster GPU Performance than Mac mini with M2 Pro Chip: Testing conducted by Apple in July 2026 using pre-production Mac mini systems with Apple M5 Pro, 18-core CPU, 20-core GPU, 64GB of unified memory and 8TB SSD, as well as production Mac mini systems with Apple M2 Pro, 12-core CPU, 19-core GPU, 32GB of unified memory and 8TB SSD. Tested with Blender 5.2.0 using the built-in benchmark. Mac mini systems tested with an attached 5K display. Performance tests are conducted using specific computer systems and reflect the approximate performance of Mac mini.
          </p>

          <p id="footnote-ai-m2-pro">
            Up to 8.5x Faster AI Performance than Mac mini with M2 Pro Chip: Testing conducted by Apple in July 2026 using pre-production Mac mini systems with Apple M5 Pro, 18-core CPU, 20-core GPU, 64GB of unified memory and 8TB SSD, as well as production Mac mini systems with Apple M2 Pro, 12-core CPU, 19-core GPU, 32GB of unified memory and 8TB SSD. Time to first token measured with an 8K-token prompt using a 14-billion parameter model with 4-bit quantisation, and LM Studio 0.4.18+1. Mac mini systems tested with an attached 5K display. Performance tests are conducted using specific computer systems and reflect the approximate performance of Mac mini.
          </p>

          <p id="footnote-wifi7">
            Wi-Fi 7: Wi-Fi 7 availability varies by country. For more information, visit <a href="https://support.apple.com/en-in/148165" class="text-blue-600 underline hover:text-blue-800" target="_blank" rel="noopener">support.apple.com/en-in/148165</a>.
          </p>
        </div>
      </section>

    </div><!-- End wrapper -->

  </main>

  <!-- ==================== ITHPL SITE FOOTER ==================== -->
  

  <!-- ==================== UNIVERSAL B2B MODAL ==================== -->
  <?php include_once APPPATH . 'Views/ui/appleProducts/partials/apple_buy_modal.php'; ?>

  <!-- ==================== PAGE JS (hotspot, chip switch, scroll) ==================== -->
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    // Sticky subnav shadow
    var subnav = document.getElementById('apple-subnav');
    if (subnav) window.addEventListener('scroll', function () {
      subnav.classList.toggle('shadow-sm', window.scrollY > 44);
    });

    // Chip comparison switcher
    var chipTabs = document.querySelectorAll('.chip-tab-btn');
    var chipCards = document.querySelectorAll('.chip-compare-card');
    var chipGrid = document.getElementById('chip-cards-grid');
    chipTabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var target = tab.getAttribute('data-chip');
        chipTabs.forEach(function (t) { t.classList.remove('active', 'bg-white', 'shadow-sm'); });
        tab.classList.add('active', 'bg-white', 'shadow-sm');
        if (target === 'all') {
          if (chipGrid) { chipGrid.classList.remove('md:grid-cols-1', 'max-w-2xl'); chipGrid.classList.add('md:grid-cols-2', 'max-w-6xl'); }
          chipCards.forEach(function (c) { c.style.display = 'flex'; });
        } else {
          if (chipGrid) { chipGrid.classList.remove('md:grid-cols-2', 'max-w-6xl'); chipGrid.classList.add('md:grid-cols-1', 'max-w-2xl'); }
          chipCards.forEach(function (c) { c.style.display = (c.getAttribute('data-chip') === target) ? 'flex' : 'none'; });
        }
      });
    });

    // Hotspot pins
    var pins = document.querySelectorAll('.hotspot-pin');
    pins.forEach(function (pin) {
      pin.addEventListener('click', function (e) {
        e.stopPropagation();
        var was = pin.classList.contains('is-active');
        pins.forEach(function (p) { p.classList.remove('is-active'); });
        if (!was) pin.classList.add('is-active');
      });
    });
    document.addEventListener('click', function () {
      pins.forEach(function (p) { p.classList.remove('is-active'); });
    });

    // Smooth scroll for #sec- anchors
    document.querySelectorAll('a[href^="#sec-"]').forEach(function (a) {
      a.addEventListener('click', function (e) {
        e.preventDefault();
        var t = document.querySelector(a.getAttribute('href'));
        if (t) { var pos = t.getBoundingClientRect().top + window.pageYOffset - 90; window.scrollTo({ top: pos, behavior: 'smooth' }); }
      });
    });

    console.log('Mac mini page initialized.');
  });
  </script>
</div>

