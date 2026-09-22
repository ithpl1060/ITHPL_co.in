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
  .apple-card-dark {
    background: #000000;
    border-radius: 1.5rem;
    border: 1px solid rgba(255, 255, 255, 0.08);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
    overflow: hidden;
    position: relative;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
  }
  @media (min-width: 640px) {
    .apple-card-dark {
      border-radius: 2rem;
    }
  }
  .apple-card-dark:hover {
    border-color: rgba(255, 255, 255, 0.18);
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.6);
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

<div class="bg-white text-[#1d1d1f] antialiased selection:bg-blue-100 selection:text-blue-900" data-product-key="mac_studio">

  <!-- ==================== STICKY PRODUCT SUBNAV ==================== -->
  <div id="apple-subnav"
    class="sticky top-[58px] sm:top-[72px] z-40 w-full apple-subnav-blur border-b border-black/[0.06] transition-all duration-300 shadow-xs">
    <div class="max-w-[1024px] mx-auto px-3 sm:px-4 h-11 sm:h-13 flex items-center justify-between py-1.5 sm:py-2.5">
      <div class="flex items-baseline space-x-2 sm:space-x-3">
        <a href="#sec-hero"
          class="text-lg sm:text-xl font-bold tracking-tight text-[#1d1d1f] hover:text-blue-600 transition-colors">Mac Studio</a>
      </div>

      <div class="flex items-center space-x-3 sm:space-x-6 text-xs">
        <nav class="hidden md:flex items-center space-x-5 text-gray-600">
          <a href="#sec-hero" class="hover:text-black font-medium text-black">Overview</a>
          <a href="#sec-chips" class="hover:text-black">M5 Max &amp; M5 Ultra</a>
          <a href="#sec-design" class="hover:text-black">Architecture</a>
          <a href="#sec-ports" class="hover:text-black">Ports</a>
          <a href="#sec-chip-compare" class="hover:text-blue-600 font-medium text-blue-600">Compare Chips</a>
          <a href="#sec-specs" class="hover:text-black">Tech Specs</a>
          <a href="#sec-legal" class="hover:text-black text-gray-400">Legal</a>
        </nav>

        <button
          class="trigger-buy-modal bg-[#0071e3] hover:bg-[#0077ed] text-white px-3.5 sm:px-4 py-1.5 rounded-full text-xs font-medium transition duration-200 transform hover:scale-[1.03] shadow-sm flex items-center gap-1.5 cursor-pointer"
          data-product-key="mac_studio">
          <span>Buy Now</span>
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- ==================== MAIN MARKETING CONTENT ==================== -->
  <main class="w-full bg-white overflow-hidden pb-12 sm:pb-20">

    <!-- ==================== SECTION 1: HERO BANNER ==================== -->
    <section id="sec-hero" class="w-full bg-[#f5f5f7] relative border-b border-gray-200/50 pt-10 sm:pt-14 md:pt-16 pb-8 sm:pb-12 scroll-mt-24 sm:scroll-mt-32">
      <div class="max-w-[1440px] mx-auto relative group px-4 sm:px-6">
        <picture class="block pt-2 sm:pt-4">
          <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_1.png"
            alt="Mac Studio - Brawn of a new age. Supercharged by M5 Max and M5 Ultra."
            class="w-full h-auto max-w-[840px] sm:max-w-[900px] lg:max-w-[940px] max-h-[440px] sm:max-h-[500px] mx-auto block object-contain" loading="eager">
        </picture>

        <!-- Polished typographic sub-headline & Buy CTA -->
        <div class="text-center max-w-2xl mx-auto px-4 pt-4 sm:pt-6">
          <p class="text-xs sm:text-sm font-semibold uppercase tracking-widest text-[#86868b] mb-1.5">
            Apple M5 Max &amp; M5 Ultra
          </p>
          <p class="text-xs sm:text-sm md:text-base text-[#6e6e73] leading-relaxed max-w-xl mx-auto mb-6">
            Built for pushing the limits, from 3D rendering across multiple displays to training custom AI models right on your desk. It’s the ultimate pro desktop.
          </p>
          <div class="flex items-center justify-center gap-3.5">
            <button class="trigger-buy-modal bg-[#0071e3] hover:bg-[#0077ed] text-white px-7 py-2.5 rounded-full text-xs sm:text-sm font-semibold shadow-md hover:shadow-lg transition-all transform hover:scale-[1.02] cursor-pointer" data-product-key="mac_studio">
              Buy Now
            </button>
            <a href="#sec-chip-compare" class="text-xs sm:text-sm font-semibold text-[#0071e3] hover:underline px-4 py-2.5 inline-flex items-center gap-1">
              Explore M5 Chips &darr;
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================== CONTENT WRAPPER FOR RESPONSIVE CARDS ==================== -->
    <div class="max-w-[1440px] xl:max-w-[1680px] 2xl:max-w-[2044px] mx-auto px-3 sm:px-6 lg:px-8 space-y-6 sm:space-y-9 mt-6 sm:mt-9">

      <!-- ==================== SECTION 2: APPLE SILICON HERO CARD ==================== -->
      <section id="sec-chips" class="apple-card-dark relative overflow-hidden group">
        <picture>
          <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_2.png"
            alt="Mac Studio supercharged by Apple M5 Max and M5 Ultra chips"
            class="apple-card-img transition-transform duration-700 group-hover:scale-[1.01]" loading="lazy">
        </picture>
      </section>

      <!-- ==================== SECTION 3: COMPACT POWERHOUSE & THERMAL ARCHITECTURE ==================== -->
      <section id="sec-design" class="apple-card relative overflow-hidden group">
        <picture>
          <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_3.png"
            alt="Mac Studio compact enclosure and revolutionary thermal architecture"
            class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
        </picture>

        <!-- Interactive Hotspot: Thermal Airflow -->
        <div class="hotspot-pin" style="left: 48%; top: 46%;" title="Thermal System">
          +
          <div class="hotspot-tooltip">
            <strong>Groundbreaking Thermal System</strong><br>Double-sided blowers pull cool air through 2,000+ perforations
          </div>
        </div>

        <!-- Interactive Hotspot: Compact Footprint -->
        <div class="hotspot-pin" style="left: 23%; top: 68%;" title="Compact Footprint">
          +
          <div class="hotspot-tooltip">
            <strong>19.7 cm (7.7 in) Square</strong><br>Fits perfectly under most displays with whisper-quiet operation
          </div>
        </div>

        <!-- Interactive Hotspot: Front Access -->
        <div class="hotspot-pin" style="left: 77%; top: 68%;" title="Front Connectivity">
          +
          <div class="hotspot-tooltip">
            <strong>Front-Facing Ports</strong><br>Convenient SDXC card slot and 2× Thunderbolt / USB-C
          </div>
        </div>
      </section>

      <!-- ==================== SECTION 4: OUTRAGEOUS PRO PERFORMANCE ==================== -->
      <section id="sec-performance" class="apple-card-dark relative overflow-hidden group">
        <picture>
          <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_4.png"
            alt="Outrageous performance: M5 Max vs M5 Ultra CPU, GPU, and ProRes media engine benchmarks"
            class="apple-card-img transition-transform duration-700 group-hover:scale-[1.01]" loading="lazy">
        </picture>
      </section>

      <!-- ==================== SECTION 5: PRO CONNECTIVITY & PORTS ==================== -->
      <section id="sec-ports" class="apple-card relative overflow-hidden group">
        <picture>
          <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_5.png"
            alt="Mac Studio front and rear pro ports connectivity"
            class="apple-card-img" loading="lazy">
        </picture>

        <!-- Front Left: SDXC Card Slot -->
        <div class="hotspot-pin" style="left: 21%; top: 44%;" title="SDXC Slot">
          +
          <div class="hotspot-tooltip">
            <strong>SDXC Card Slot (UHS-II)</strong><br>Fast media offload directly from cameras
          </div>
        </div>

        <!-- Front Right: 2x USB-C / Thunderbolt 5 -->
        <div class="hotspot-pin" style="left: 29%; top: 44%;" title="Front USB-C / TB">
          +
          <div class="hotspot-tooltip">
            <strong>2× Front Thunderbolt / USB-C</strong><br>Up to 40Gb/s on M5 Max, up to 120Gb/s on M5 Ultra (Thunderbolt 5)
          </div>
        </div>

        <!-- Rear Left: 4x Thunderbolt 4/5 -->
        <div class="hotspot-pin" style="left: 65%; top: 44%;" title="4x Thunderbolt">
          +
          <div class="hotspot-tooltip">
            <strong>4× Thunderbolt Ports</strong><br>Up to 120Gb/s bandwidth, DisplayPort 2.1 &amp; high-speed RAID
          </div>
        </div>

        <!-- Rear Mid: 10Gb Ethernet -->
        <div class="hotspot-pin" style="left: 74%; top: 44%;" title="10Gb Ethernet">
          +
          <div class="hotspot-tooltip">
            <strong>10Gb Ethernet Port</strong><br>High-speed local network storage &amp; corporate server transfer
          </div>
        </div>

        <!-- Rear Right: HDMI & USB-A -->
        <div class="hotspot-pin" style="left: 84%; top: 44%;" title="HDMI & USB-A">
          +
          <div class="hotspot-tooltip">
            <strong>HDMI 2.1 &amp; 2× USB-A</strong><br>Up to 8K video output and legacy peripheral compatibility
          </div>
        </div>
      </section>

      <!-- ==================== SECTION 6 & 7: DISPLAYS & STUDIO DISPLAY (2-COLUMN GRID) ==================== -->
      <section id="sec-display" class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-9">
        <!-- Multi-Display Support -->
        <article class="apple-card group">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_6.png"
              alt="Mac Studio supports up to 8 displays simultaneously on M5 Ultra"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
          </picture>
        </article>

        <!-- Studio Display Pairing -->
        <article class="apple-card group">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_7.png"
              alt="Studio Display - 27-inch 5K Retina display, 12MP camera, and six-speaker sound system"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
          </picture>
        </article>
      </section>

      <!-- ==================== SECTION 8 & 9: ACCESSORIES & PRO MACOS (2-COLUMN GRID) ==================== -->
      <section id="sec-ecosystem" class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-9">
        <!-- Magic Accessories -->
        <article class="apple-card group">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_8.png"
              alt="Magic Keyboard with Numeric Keypad and Touch ID, Magic Mouse, and Magic Trackpad"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
          </picture>
        </article>

        <!-- macOS Sonoma & Pro Apps -->
        <article class="apple-card group">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_9.png"
              alt="macOS Sonoma optimized for Apple Silicon - Logic Pro, Final Cut Pro, DaVinci Resolve, Xcode"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
          </picture>
        </article>
      </section>

    </div><!-- End max-w-[2044px] content wrapper -->

    <!-- ==================== SECTION 10: INTERACTIVE CHIP COMPARISON SECTION ==================== -->
    <section id="sec-chip-compare" class="w-full mt-8 sm:mt-14 bg-[#f5f5f7] py-8 sm:py-14 border-y border-gray-200/50">
      <div class="max-w-[1440px] xl:max-w-[1680px] 2xl:max-w-[2044px] mx-auto px-3 sm:px-6 lg:px-8">

        <!-- ==================== CHOOSE YOUR SUPERPOWER SHOWCASE (MATCHING REFERENCE) ==================== -->
        <div class="bg-black text-white rounded-3xl p-6 sm:p-12 mb-10 shadow-2xl border border-white/10 relative overflow-hidden">
          <div class="text-center mb-8 sm:mb-12">
            <h3 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-white">
              Choose your superpower.
            </h3>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-10 sm:gap-14 max-w-4xl mx-auto items-start">
            <!-- M5 Max Column -->
            <div class="flex flex-col items-center text-center">
              <!-- M5 Max Chip Visual Square -->
              <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-2xl bg-gradient-to-br from-[#1a1238] via-[#24134b] to-[#0d091e] border border-purple-500/40 flex flex-col items-center justify-center p-3 shadow-[0_0_40px_rgba(168,85,247,0.35)] relative group transition-transform duration-300 hover:scale-105 mb-6">
                <div class="text-white text-3xl font-extrabold tracking-tight flex items-center justify-center gap-1">
                  <svg class="w-7 h-7 inline fill-current -mt-1" viewBox="0 0 384 512">
                    <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                  </svg>
                  <span>M5</span>
                </div>
                <span class="text-[11px] font-bold tracking-widest text-purple-200 uppercase mt-0.5">MAX</span>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-purple-500/25 via-transparent to-transparent pointer-events-none"></div>
              </div>

              <!-- Specs Bullets matching official reference -->
              <div class="space-y-2 text-xs sm:text-sm font-medium text-[#d8b4fe]">
                <p class="font-bold text-white">18-core CPU</p>
                <p>Up to 40-core GPU</p>
                <p>Up to 128GB unified memory</p>
                <p>Up to 614GB/s memory bandwidth</p>
                <p>16-core Neural Engine</p>
              </div>
            </div>

            <!-- M5 Ultra Column -->
            <div class="flex flex-col items-center text-center">
              <!-- M5 Ultra Chip Visual Square -->
              <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-2xl bg-gradient-to-br from-[#0c2444] via-[#103a66] to-[#071526] border border-cyan-400/50 flex flex-col items-center justify-center p-3 shadow-[0_0_40px_rgba(6,182,212,0.35)] relative group transition-transform duration-300 hover:scale-105 mb-6">
                <div class="text-white text-3xl font-extrabold tracking-tight flex items-center justify-center gap-1">
                  <svg class="w-7 h-7 inline fill-current -mt-1" viewBox="0 0 384 512">
                    <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                  </svg>
                  <span>M5</span>
                </div>
                <span class="text-[11px] font-bold tracking-widest text-cyan-200 uppercase mt-0.5">ULTRA</span>
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-cyan-400/25 via-transparent to-transparent pointer-events-none"></div>
              </div>

              <!-- Specs Bullets matching official reference -->
              <div class="space-y-2 text-xs sm:text-sm font-medium text-[#a5f3fc]">
                <p class="font-bold text-white">Up to 36-core CPU</p>
                <p>Up to 80-core GPU</p>
                <p>Up to 512GB unified memory</p>
                <p>1.2TB/s memory bandwidth</p>
                <p>32-core Neural Engine</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Section Header & Polished Segmented Control -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-5 mb-6 sm:mb-8 pb-4 border-b border-gray-300/60">
          <div>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#1d1d1f]">Which Mac Studio is right for you?</h2>
            <p class="text-gray-500 text-xs sm:text-sm mt-1">Choose between the powerhouse M5 Max or the monumental M5 Ultra.</p>
          </div>

          <!-- Apple macOS-style Segmented Control -->
          <div class="relative flex items-center bg-[#e5e5ea] p-[3px] rounded-[11px] gap-0 shadow-inner flex-shrink-0"
            role="group" aria-label="Filter Mac Studio chip models">
            <button
              class="chip-tab-btn active relative z-10 px-4 sm:px-5 py-[7px] rounded-[9px] text-[11px] sm:text-xs font-semibold text-[#1d1d1f] bg-white shadow-[0_1px_3px_rgba(0,0,0,0.12)] transition-all duration-200 cursor-pointer"
              data-chip="all" aria-pressed="true">
              Compare Both
            </button>
            <button
              class="chip-tab-btn relative z-10 px-4 sm:px-5 py-[7px] rounded-[9px] text-[11px] sm:text-xs font-semibold text-[#3c3c43]/70 hover:text-[#1d1d1f] transition-all duration-200 cursor-pointer"
              data-chip="m5max" aria-pressed="false">
              Apple M5 Max
            </button>
            <button
              class="chip-tab-btn relative z-10 px-4 sm:px-5 py-[7px] rounded-[9px] text-[11px] sm:text-xs font-semibold text-[#3c3c43]/70 hover:text-[#1d1d1f] transition-all duration-200 cursor-pointer"
              data-chip="m5ultra" aria-pressed="false">
              Apple M5 Ultra
            </button>
          </div>
        </div>

        <!-- Visual Chip Comparison Cards Grid -->
        <div id="chip-cards-grid" class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-9 max-w-6xl mx-auto transition-all duration-300">

          <!-- M5 Max Card -->
          <div class="chip-compare-card bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-black/[0.06] transition-all duration-300 flex flex-col justify-between"
            data-chip="m5max">
            <div>
              <!-- Card Header -->
              <div class="text-center pb-5 mb-5 border-b border-gray-100">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-blue-50 border border-blue-200 text-blue-700 text-xs font-semibold mb-2">
                  <span class="w-1.5 h-1.5 rounded-full bg-blue-600"></span>
                  Apple M5 Max
                </span>
                <h4 class="text-2xl sm:text-3xl font-bold text-[#1d1d1f]">Mac Studio (M5 Max)</h4>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Exceptional speed for design, 3D rendering, and multi-stream 8K ProRes editing</p>
              </div>

              <!-- Feature Tiles Spec List -->
              <div class="space-y-4 text-xs sm:text-sm text-[#1d1d1f]">
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Processing Power</span>
                  <span class="font-bold">18-core CPU with next-gen performance cores</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Graphics Architecture</span>
                  <span class="font-bold">Up to 40-core GPU with hardware ray tracing</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Unified Memory</span>
                  <span class="font-bold">Up to 128GB · 614GB/s bandwidth</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">AI Compute Engine</span>
                  <span class="font-bold text-blue-600">16-core Neural Engine</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Display Support</span>
                  <span class="font-bold">Up to 5 displays simultaneously</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Front Connectivity</span>
                  <span class="font-bold">2× Thunderbolt 4 (40Gb/s) + 1× SDXC slot</span>
                </div>
              </div>
            </div>

            <!-- Card Footer CTA -->
            <div class="pt-6 mt-6 border-t border-gray-100 flex items-center justify-between">
              <span class="text-[11px] text-gray-400 font-medium">Apple M5 Max · Mac Studio</span>
              <button
                class="trigger-buy-modal group inline-flex items-center gap-1.5 text-xs font-semibold text-[#0071e3] hover:text-[#0077ed] transition-colors cursor-pointer"
                data-product-key="mac_studio" data-preset-chip="m5max" aria-label="Buy Mac Studio with Apple M5 Max">
                Configure &amp; Buy Now
                <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
              </button>
            </div>
          </div>

          <!-- M5 Ultra Card -->
          <div class="chip-compare-card bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-black/[0.06] transition-all duration-300 flex flex-col justify-between"
            data-chip="m5ultra">
            <div>
              <!-- Card Header -->
              <div class="text-center pb-5 mb-5 border-b border-gray-100">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-purple-50 border border-purple-200 text-purple-700 text-xs font-semibold mb-2">
                  <span class="w-1.5 h-1.5 rounded-full bg-purple-600"></span>
                  Apple M5 Ultra
                </span>
                <h4 class="text-2xl sm:text-3xl font-bold text-[#1d1d1f]">Mac Studio (M5 Ultra)</h4>
                <p class="text-xs sm:text-sm text-gray-500 mt-1">Colossal horsepower for massive 3D environments, LLMs, and multi-stream 8K ProRes</p>
              </div>

              <!-- Feature Tiles Spec List -->
              <div class="space-y-4 text-xs sm:text-sm text-[#1d1d1f]">
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Processing Power</span>
                  <span class="font-bold">Up to 36-core CPU with extreme scaling</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Graphics Architecture</span>
                  <span class="font-bold">Up to 80-core GPU with pro rendering engine</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Unified Memory</span>
                  <span class="font-bold">Up to 512GB · 1.2TB/s memory bandwidth</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">AI Compute Engine</span>
                  <span class="font-bold text-purple-600">32-core Neural Engine</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Display Support</span>
                  <span class="font-bold">Up to 8 displays simultaneously</span>
                </div>
                <div class="bg-[#f5f5f7] p-3.5 rounded-2xl flex items-center justify-between">
                  <span class="text-gray-500">Front Connectivity</span>
                  <span class="font-bold">2× Thunderbolt 5 (120Gb/s) + 1× SDXC slot</span>
                </div>
              </div>
            </div>

            <!-- Card Footer CTA -->
            <div class="pt-6 mt-6 border-t border-gray-100 flex items-center justify-between">
              <span class="text-[11px] text-gray-400 font-medium">Apple M5 Ultra · Mac Studio</span>
              <button
                class="trigger-buy-modal group inline-flex items-center gap-1.5 text-xs font-semibold text-[#0071e3] hover:text-[#0077ed] transition-colors cursor-pointer"
                data-product-key="mac_studio" data-preset-chip="m5ultra" aria-label="Buy Mac Studio with Apple M5 Ultra">
                Configure &amp; Buy Now
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

    <!-- ==================== REMAINING SECTIONS WRAPPER ==================== -->
    <div class="max-w-[1440px] xl:max-w-[1680px] 2xl:max-w-[2044px] mx-auto px-3 sm:px-6 lg:px-8 space-y-6 sm:space-y-9 mt-8 sm:mt-14">

      <!-- ==================== SECTION 11: APPLECARE+ & SUSTAINABILITY (2-COLUMN GRID) ==================== -->
      <section id="sec-sustainability" class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-9">
        <!-- AppleCare+ for Mac Studio -->
        <article class="apple-card group relative overflow-hidden">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_10.png"
              alt="AppleCare+ for Mac Studio - Easy, fast repairs for accidents"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
          </picture>
          <!-- CTA overlay -->
          <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-6">
            <a href="https://www.apple.com/in/support/products/mac/" target="_blank" rel="noopener"
              class="inline-flex items-center gap-1 text-[#0071e3] hover:text-[#0077ed] text-sm font-medium transition-colors">
              Learn more about AppleCare+
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </article>

        <!-- 100% Recycled Aluminum & Carbon Impact -->
        <article class="apple-card group">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_13.png"
              alt="Mac Studio environmental footprint - 100% recycled aluminum and low carbon footprint"
              class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
          </picture>
        </article>
      </section>

      <!-- ==================== SECTION 12: TECH SPECS MATRIX ==================== -->
      <section id="sec-specs" class="apple-card p-4 sm:p-8 bg-white border border-gray-200/80 shadow-sm">
        <div class="text-center max-w-3xl mx-auto mb-6 sm:mb-10">
          <span class="text-xs font-semibold text-blue-600 uppercase tracking-widest">Specifications</span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#1d1d1f] mt-1">Detailed Technical Specifications</h2>
          <p class="text-gray-500 text-xs sm:text-sm mt-1.5 sm:mt-2">Compare Mac Studio hardware configurations, media engines, and connectivity.</p>
        </div>

        <div class="relative overflow-hidden rounded-xl sm:rounded-2xl border border-gray-100 bg-[#fbfbfd]">
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_11.png"
              alt="Mac Studio Model Comparison Overview"
              class="apple-card-img border-b border-gray-100" loading="lazy">
          </picture>
          <picture>
            <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_12.png"
              alt="Mac Studio Full Tech Specifications Matrix"
              class="apple-card-img max-w-5xl mx-auto py-6 sm:py-10" loading="lazy">
          </picture>
        </div>

        <!-- Polished specs CTA strip -->
        <div class="mt-8 sm:mt-10 bg-white/80 backdrop-blur-sm border border-black/[0.06] rounded-2xl px-5 sm:px-8 py-4 sm:py-5 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
          <div class="text-center sm:text-left">
            <p class="text-sm font-semibold text-[#1d1d1f]">Ready to deploy Mac Studio in your enterprise?</p>
            <p class="text-xs text-gray-500 mt-0.5">GST input tax invoice · Custom volume pricing · Dedicated Apple Account Specialist</p>
          </div>
          <button
            class="trigger-buy-modal group flex-shrink-0 inline-flex items-center gap-2 bg-[#1d1d1f] hover:bg-[#2d2d2f] text-white text-xs sm:text-sm font-semibold px-6 py-2.5 rounded-full shadow-sm transition-all duration-200 cursor-pointer"
            data-product-key="mac_studio">
            <span>Configure &amp; Buy Now</span>
            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none"
              stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </section>

      <!-- ==================== SECTION 13: IN THE BOX ==================== -->
      <section id="sec-box" class="apple-card group">
        <picture>
          <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_14.png"
            alt="What's In the Box - Mac Studio and Power Cord"
            class="apple-card-img transition-transform duration-500 group-hover:scale-[1.01]" loading="lazy">
        </picture>
      </section>

      <!-- ==================== SECTION 14: LEGAL DISCLAIMERS & FOOTNOTES ==================== -->
      <section id="sec-legal" class="pt-8 sm:pt-12 border-t border-gray-200 text-[#86868b] text-[11px] leading-relaxed">
        <picture>
          <img src="<?= base_url('images/appleProducts/mac_studio/') ?>Section_15.png"
            alt="Mac Studio footnotes and legal disclaimers"
            class="w-full h-auto block mb-6 opacity-90" loading="lazy">
        </picture>

        <h3 class="font-bold text-gray-700 text-xs mb-3 uppercase tracking-wider">◊ Enterprise Terms &amp; Conditions</h3>
        <p class="text-gray-500 leading-normal">
          Power and performance claims based on testing conducted by Apple. Testing involved workloads across DaVinci Resolve Studio, Final Cut Pro, Adobe Premiere Pro, Cinema 4D, and Xcode. Actual performance will vary based on configuration, network, and environmental factors. Apple Business Manager (ABM) requires an active corporate D-U-N-S registration. GST 18% Input Tax Credit is applicable upon submitting a valid company GSTIN.
        </p>
      </section>

    </div><!-- End content wrapper -->

  </main>


  <!-- ==================== UNIVERSAL B2B MODAL ==================== -->
  <?php include_once APPPATH . 'Views/ui/appleProducts/partials/apple_buy_modal.php'; ?>

  <!-- ==================== HOTSPOT + SCROLL JS ==================== -->
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    // Sticky subnav shadow on scroll
    const subnav = document.getElementById('apple-subnav');
    window.addEventListener('scroll', function () {
      if (window.scrollY > 44) {
        subnav.classList.add('shadow-sm');
      } else {
        subnav.classList.remove('shadow-sm');
      }
    });

    // Chip comparison segmented control
    const chipTabs = document.querySelectorAll('.chip-tab-btn');
    const chipCards = document.querySelectorAll('.chip-compare-card');
    const chipGrid = document.getElementById('chip-cards-grid');
    chipTabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        const target = tab.getAttribute('data-chip');
        chipTabs.forEach(function (t) { t.classList.remove('active', 'bg-white', 'shadow-sm'); });
        tab.classList.add('active', 'bg-white', 'shadow-sm');
        if (target === 'all') {
          if (chipGrid) { chipGrid.classList.remove('md:grid-cols-1', 'max-w-2xl'); chipGrid.classList.add('md:grid-cols-2', 'max-w-6xl'); }
          chipCards.forEach(function (c) { c.style.display = 'flex'; });
        } else {
          if (chipGrid) { chipGrid.classList.remove('md:grid-cols-2', 'max-w-6xl'); chipGrid.classList.add('md:grid-cols-1', 'max-w-2xl'); }
          chipCards.forEach(function (c) {
            c.style.display = (c.getAttribute('data-chip') === target) ? 'flex' : 'none';
          });
        }
      });
    });

    // Hotspot pin toggle
    const pins = document.querySelectorAll('.hotspot-pin');
    pins.forEach(function (pin) {
      pin.addEventListener('click', function (e) {
        e.stopPropagation();
        const was = pin.classList.contains('is-active');
        pins.forEach(function (p) { p.classList.remove('is-active'); });
        if (!was) pin.classList.add('is-active');
      });
    });
    document.addEventListener('click', function () {
      pins.forEach(function (p) { p.classList.remove('is-active'); });
    });

    // Smooth scroll for in-page anchors
    document.querySelectorAll('a[href^="#sec-"]').forEach(function (a) {
      a.addEventListener('click', function (e) {
        e.preventDefault();
        const t = document.querySelector(a.getAttribute('href'));
        if (t) { const pos = t.getBoundingClientRect().top + window.pageYOffset - 90; window.scrollTo({ top: pos, behavior: 'smooth' }); }
      });
    });

    console.log('Mac Studio page initialized.');
  });
  </script>
</div>

