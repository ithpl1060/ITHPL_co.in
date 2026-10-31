 
  <section id="hero-about" class=" main-section fade-in-section">
  <div class="hero-background-a"></div>
  <div class="container hero-content-a">
    <h1 class="hero-title-a">Power Your Business</h1>
    <h1 class="hero-title-a  gradient-services ">With Apple.</h1>
       <p class="hero-description-c">
      Unlock Efficiency, Productivity, and Security with <strong>Apple</strong> 
       Solutions.
    </p>
    <div class="hero-image-container-a">
      <img
        src="<?= base_url(relativePath: 'images/apq2.png'); ?>"
        alt="A collection of Apple devices including MacBook, iPhone, Apple Watch, and AirPods."
        class="max-w-4xl relative translate-y-[12px]"
      loading="eager"/>
    </div>
  </div>
   
</section>
<section>
     <div class="intro-section">
        <div class="container py-14">
          <p class="intro-text">Our <strong>Expert</strong> team <br>will guide you in selecting the right devices <br> and implementing <strong>Seamless Integration</strong>.</p>
        </div>
      </div>
</section>
 <section id="section-features">
      <div class="container">
        <h2 class="text-4xl text-center font-semibold pb-8">Why Choose Apple Devices for Your Business?</h2>
        <div class="features-grid2">
          <article class="feature-card2">
            <img src="<?= base_url(relativePath: 'images/innovation-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">Innovation</h3>
            <p class="feature-description">Stay ahead of the curve with cutting-edge Apple technology and smart business-ready features that drive progress.</p>
          </article>
          
          <article class="feature-card2 text-right">
            <img src="<?= base_url(relativePath: 'images/it-tickets-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">50% Fewer IT Tickets</h3>
            <p class="feature-description">Reduce technical disruptions as Apple's reliability lowers support tickets, easing IT workload and improving uptime.</p>
          </article>
          
          <article class="feature-card2 text-center">
            <img src="<?= base_url(relativePath: 'images/security-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">Security</h3>
            <p class="feature-description">Protect your business with Apple's built-in security, encryption, and consistent software updates to stay ahead of threats.</p>
          </article>
          
          <article class="feature-card2">
            <img src="<?= base_url(relativePath: 'images/integration-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">Integration</h3>
            <p class="feature-description">Seamlessly connect Apple devices with your current infrastructure, tools, and workflows for smooth operations.</p>
          </article>
          
          <article class="feature-card2 text-right">
            <img src="<?= base_url(relativePath: 'images/zero-touch-deployment-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">Zero-Touch Deployment</h3>
            <p class="feature-description">Deploy devices instantly — Apple's automated setup allows employees to start working straight out of the box.</p>
          </article>
          
          <article class="feature-card2 text-center">
            <img src="<?= base_url(relativePath: 'images/performance-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">Performance</h3>
            <p class="feature-description">Tackle demanding workloads with Apple silicon, delivering fast, responsive, and power-efficient performance.</p>
          </article>
          
          <article class="feature-card2">
            <img src="<?= base_url(relativePath: 'images/quality-built-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">Quality Built</h3>
            <p class="feature-description">Engineered with premium materials, Apple devices offer superior durability, sleek design, and long-term reliability.</p>
          </article>
          
          <article class="feature-card2 text-right">
            <img src="<?= base_url(relativePath: 'images/high-residual-value-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">High Residual Value</h3>
            <p class="feature-description">Make a smart investment — Apple devices hold their value longer, offering better trade-in and resale returns.</p>
          </article>
          
          <article class="feature-card2 text-center full-width">
            <img src="<?= base_url(relativePath: 'images/performance-icon.png'); ?>" alt="" class="feature-icon" loading="lazy">
            <h3 class="feature-title">Team Collaboration</h3>
            <p class="feature-description">Enhance teamwork with Apple's seamless ecosystem that keeps teams connected, productive, and aligned across every project.</p>
          </article>
        </div>
      </div>
    </section>
  <section id="products-2" class="py-12">
      <div class="container">
        <div class="products-section-header">
          <div>
            <h2 class="section-title">
             Discover Range of <span>Apple Devices</span>
            </h2>
            <p class="section-subtitle text-gray-500 text-sm mt-1">Explore industry-leading performance and innovation across the lineup.</p>
          </div>
          
          <div class="carousel-controls">
            <button type="button" class="carousel-arrow" id="carouselPrevBtn" aria-label="Previous Apple devices" title="Previous">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
            <button type="button" class="carousel-arrow" id="carouselNextBtn" aria-label="Next Apple devices" title="Next">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
          </div>
        </div>

        <div class="products-carousel-wrapper">
          <div class="products-grid products-carousel-track" id="productsCarouselTrack">
            <!-- Mac Mini Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('mac-mini') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/Mac-Mini-text.jpg'); ?>"
                alt="Mac Mini"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/Mac-mini-product.png'); ?>" class="fade-in" alt="Mac Mini">
                </div>
                <h3 class="product-title">Mac Mini</h3>
                <p class="product-description">Compact desktop power with Apple silicon for every workspace.</p>
                <a href="<?= base_url('mac-mini') ?>" class="product-button-preorder">Buy Now</a>
              </div>
            </div>

            <!-- Mac Studio Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('mac-studio') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/Mac-Studio-text.jpg'); ?>"
                alt="Mac Studio"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/mac-studio-product.png'); ?>" class="fade-in" alt="Mac Studio">
                </div>
                <h3 class="product-title">Mac Studio</h3>
                <p class="product-description">Pro-level desktop performance for creative professionals and studios.</p>
                <a href="<?= base_url('mac-studio') ?>" class="product-button-preorder">Buy Now</a>
              </div>
            </div>

            <!-- iPhone 18 Pro Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('iphone-18-pro') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/iPhone-18-Pro-text.jpg'); ?>"
                alt="iPhone 18 Pro"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/appleProducts/iphone_18_pro/images/compare_iphone_18_pro_max_burgundy_large.png'); ?>" class="fade-in" alt="iPhone 18 Pro">
                </div>
                <h3 class="product-title">iPhone 18 Pro</h3>
                <p class="product-description">Pro Fusion camera with variable aperture and groundbreaking A20 Pro chip.</p>
                <a href="<?= base_url('iphone-18-pro') ?>" class="product-button-preorder">Buy Now</a>
              </div>
            </div>

            <!-- Apple Watch Ultra Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('apple-watch-ultra') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/Apple-Watch-Ultra-text.jpg'); ?>"
                alt="Apple Watch Ultra"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/appleProducts/apple_watch_ultra/images/compare_apple_watch_ultra_4_large.png'); ?>" class="fade-in" alt="Apple Watch Ultra">
                </div>
                <h3 class="product-title">Apple Watch Ultra</h3>
                <p class="product-description">Rugged titanium design with multi-day battery and dual-frequency GPS.</p>
                <a href="<?= base_url('apple-watch-ultra') ?>" class="product-button-preorder">Buy Now</a>
              </div>
            </div>

            <!-- Apple Watch Series 12 Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('apple-watch-series-12') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/Apple-Watch-Series-12-text.jpg'); ?>"
                alt="Apple Watch Series 12"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/appleProducts/apple_watch_series_12/images/compare_apple_watch_series_12_large.png'); ?>" class="fade-in" alt="Apple Watch Series 12">
                </div>
                <h3 class="product-title">Apple Watch Series 12</h3>
                <p class="product-description">Advanced health insights, brilliant wide-angle display, and all-day battery.</p>
                <a href="<?= base_url('apple-watch-series-12') ?>" class="product-button-preorder">Buy Now</a>
              </div>
            </div>

            <!-- Apple AirPods Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('apple-airpods') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/AirPods-text.jpg'); ?>"
                alt="Apple AirPods"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/appleProducts/apple_airpods/images/hero_airpods_5_large.png'); ?>" class="fade-in" alt="Apple AirPods">
                </div>
                <h3 class="product-title">AirPods</h3>
                <p class="product-description">Active Noise Cancellation, Adaptive Audio, and exceptional acoustic architecture.</p>
                <a href="<?= base_url('apple-airpods') ?>" class="product-button-preorder">Buy Now</a>
              </div>
            </div>

            <!-- iPhone Duo Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('iphone-duo') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/iPhone-Duo-text.jpg'); ?>"
                alt="iPhone Duo"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/iphone-Duo-Hero.png'); ?>" class="fade-in" alt="iPhone Duo">
                </div>
                <h3 class="product-title">iPhone Duo</h3>
                <p class="product-description">Two screens. Infinite possibilities.</p>
                <a href="<?= base_url('iphone-duo') ?>" class="product-button-preorder">Buy Now</a>
              </div>
            </div>

            <!-- iMac (M6) Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('imac-m6') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/imac_m6_text.png'); ?>"
                alt="iMac M6"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url('appleProducts/imac_M6/Section_1__RX-hero.webp'); ?>" class="fade-in" alt="iMac with M6">
                </div>
                <h3 class="product-title">iMac</h3>
                <p class="product-description">Brilliant 4.5K Retina display powered by the superfast M6 chip.</p>
                <a href="<?= base_url('imac-m6') ?>" class="product-button-preorder">Pre-Order Now</a>
              </div>
            </div>

            <!-- iPad mini Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('ipad-mini') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/ipad_mini_text.png'); ?>"
                alt="iPad mini"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url('appleProducts/ipad_mini/images/hero_large.png'); ?>" class="fade-in" alt="iPad mini">
                </div>
                <h3 class="product-title">iPad mini</h3>
                <p class="product-description">Ultraportable power with the A20 Pro chip and Apple Intelligence.</p>
                <a href="<?= base_url('ipad-mini') ?>" class="product-button-preorder">Pre-Order Now</a>
              </div>
            </div>

            <!-- MacBook Pro (M5) Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('macbook-m5') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/Macbook-text.png'); ?>"
                alt="MacBook Pro M5"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url('appleProducts/macbook_m5/images/hero_large.png'); ?>" class="fade-in" alt="MacBook Pro with PROLED XDR">
                </div>
                <h3 class="product-title">MacBook Pro (M5)</h3>
                <p class="product-description">PROLED XDR Display with Touch capability and M5 Pro / Max chips.</p>
                <a href="<?= base_url('macbook-m5') ?>" class="product-button-preorder">Pre-Order Now</a>
              </div>
            </div>

            <!-- MacBook Pro (M6) Card - NEW -->
            <div class="product-card product-card-new" onclick="window.location.href='<?= base_url('macbook-m6') ?>'">
              <span class="product-new-badge">NEW</span>
              <img
                src="<?= base_url(relativePath: 'images/Macbook-text.png'); ?>"
                alt="MacBook Pro M6"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url('appleProducts/macbook_m6/images/hero_large.png'); ?>" class="fade-in" alt="MacBook Pro with M6">
                </div>
                <h3 class="product-title">MacBook Pro (M6)</h3>
                <p class="product-description">Dual Neural Engine and M6 chip delivering breakthrough AI performance.</p>
                <a href="<?= base_url('macbook-m6') ?>" class="product-button-preorder">Pre-Order Now</a>
              </div>
            </div>

            <!-- MacBook Card -->
            <div class="product-card" onclick="window.open('https://store.ithpl.com/?s=apple&post_type=product', '_blank')">
              <img
                src="<?= base_url(relativePath: 'images/Macbook-text.png'); ?>"
                alt="MacBook"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/macAir-13.png'); ?>" class="fade-in" alt="MacBook">
                </div>
                <h3 class="product-title">MacBook</h3>
                <p class="product-description">Powerful laptops for demanding tasks, performance, and creativity.</p>
                <a href="https://store.ithpl.com/?s=apple&post_type=product" target="_blank" rel="noopener" class="product-button-preorder" aria-label="Learn more about Apple MacBook at ITHPL Store">Buy Now</a>
              </div>
            </div>

            <!-- iPad & iPhone Card -->
            <div class="product-card" onclick="window.open('https://store.ithpl.com/?s=apple&post_type=product', '_blank')">
              <img
                src="<?= base_url(relativePath: 'images/iPad & Iphone.png'); ?>"
                alt="iPad and iPhone"
                class="product-bg"
              />
              <div class="product-overlay"></div>
              <div class="product-content">
                <div class="product-img-wrap">
                  <img src="<?= base_url(relativePath: 'images/apple-iphone-ipad.png'); ?>" class="fade-in" alt="iPad and iPhone">
                </div>
                <h3 class="product-title">iPad & iPhone</h3>
                <p class="product-description">Versatile devices for mobility, productivity, and communication.</p>
                <a href="https://store.ithpl.com/?s=apple&post_type=product" target="_blank" rel="noopener" class="product-button-preorder" aria-label="Learn more about Apple iPad & iPhone at ITHPL Store">Buy Now</a>
              </div>
            </div>
          </div>

          <!-- Progress indicator -->
          <div class="carousel-progress-container" aria-hidden="true">
            <div class="carousel-progress-track-bar">
              <div class="carousel-progress-thumb" id="carouselProgressThumb"></div>
            </div>
          </div>
        </div>
      </div>
  </section>

     <section id="section-solutions">
      <div class="container py-8">
        
        <h2 class="section-title pb-8">Explore Apple Solutions</h2>
        <div class="solutions-container">
          

          <article class="solution-card">
            <a href="<?= base_url('apple-tco-calc') ?>">
            <div class="solution-image-container pt-4">
              <img src="<?= base_url(relativePath: 'images/mac-m5.png'); ?>" alt="Total Cost of Ownership illustration" loading="lazy">
            </div>
            <div class="solution-content">
              <h3 class="solution-title">Total Cost of Ownership</h3>
              <p class="solution-description">Visit our TCO page to explore more. Contact our team for a customized solution and a detailed view of your cost benefits.</p>
            </div>
             </a>
          </article>
         

          
          <article class="solution-card">
             <a href="<?= base_url('apple-smart-epp') ?>">
            <div class="solution-image-container pt-3">
              <img src="<?= base_url(relativePath: 'images/apple-family-img.png'); ?>" alt="Apple Smart EPP illustration" loading="lazy">
            </div>
            <div class="solution-content">
              <h3 class="solution-title">Apple Smart EPP</h3>
              <p class="solution-description">With our Smart Employee Purchase Program, your workforce can access the latest Apple technology with flexible, affordable, and hassle-free options.</p>
            </div>
            </a>
          </article>
          
          
          <article class="solution-card">
             <a href="<?= base_url('apple-enterprises') ?>">
            <div class="solution-image-container pt-3">
              <img src="<?= base_url(relativePath: 'images/macbook-blue-screen.png'); ?>" alt="Apple For Enterprise illustration" loading="lazy">
            </div>
            <div class="solution-content">
              <h3 class="solution-title">Apple For Enterprise</h3>
              <p class="solution-description">With Apple devices and solutions, your business can unlock efficiency, innovation, and seamless integration across every team.</p>
            </div>
              </a>
          </article>
        
        </div>
      </div>
    </section>

    <section id="section-support mb-8 main-section ">
      <div class="container">
        <h2 class="text-5xl font-semibold text-center py-16 ">Expert Support for Your Apple Devices</h2>
        <div class="support-grid">
          <article class="support-card">
            <img src="<?= base_url(relativePath: 'images/puzzle-icon.png'); ?>" alt="" class="support-icon" loading="lazy">
            <h3 class="support-title">Implementation & Integration</h3>
            <p class="support-description">Seamless setup for all Apple devices.</p>
          </article>
          
          <article class="support-card">
            <img src="<?= base_url(relativePath: 'images/onboarding-icon.png'); ?>" alt="" class="support-icon" loading="lazy">
            <h3 class="support-title">Training & Onboarding</h3>
            <p class="support-description">Helping your team get the most out of Apple technology.</p>
          </article>
          
          <article class="support-card">
            <img src="<?= base_url(relativePath: 'images/support-icon.png'); ?>" alt="" class="support-icon" loading="lazy">
            <h3 class="support-title">Ongoing Maintenance & Support</h3>
            <p class="support-description">Continuous monitoring and troubleshooting.</p>
          </article>
        </div>
      </div>
    </section>



<section id="subscribe" class="">
      <div class="container">
        <div class="subscribe-box">
          <h2 class="subscribe-title">
            Get in touch
          </h2>
          <p class="cta-subtitle pb-6">Connect with our Apple experts to discover the best-fit solution for your needs.</p>
          <form class="subscribe-form" id="mailSubscriptionForm">
            <input
              type="email"  name="email" id="subscriptionEmail"
              placeholder="Enter your email"
              class="subscribe-input"
            />
            <button type="submit" class="subscribe-button">Submit</button>
          </form>
        </div>
      </div>
    </section>
    
    

<style>
/* Apple Devices Auto-Scrolling Showcase Carousel */

#products-2 .product-card {
  background: #000000 !important;
  position: relative;
  overflow: hidden;
}

#products-2 .product-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center !important;
  z-index: 1;
}

#products-2 .product-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    180deg,
    rgba(0, 0, 0, 0) 0%,
    rgba(0, 0, 0, 0.2) 30%,
    rgba(0, 0, 0, 0.7) 60%,
    rgba(0, 0, 0, 0.96) 78%,
    #000000 88%,
    #000000 100%
  ) !important;
  z-index: 2;
  transition: background 0.4s ease;
  pointer-events: none;
}

#products-2 .product-card:hover .product-overlay {
  background: linear-gradient(
    180deg,
    rgba(0, 0, 0, 0.05) 0%,
    rgba(0, 0, 0, 0.25) 30%,
    rgba(0, 0, 0, 0.65) 60%,
    rgba(0, 0, 0, 0.95) 78%,
    #000000 88%,
    #000000 100%
  ) !important;
}

#products-2 .products-section-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1.5rem;
  flex-wrap: wrap;
  gap: 1rem;
}

#products-2 .section-title {
  font-size: 2.25rem;
  font-weight: 700;
  margin: 0;
  padding: 0;
}

#products-2 .carousel-controls {
  display: flex;
  align-items: center;
  gap: 0.75rem;
}

#products-2 .carousel-arrow {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
  color: #1d1d1f;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
  outline: none;
  user-select: none;
}

#products-2 .carousel-arrow:hover {
  background: #ffffff;
  color: #9333ea;
  border-color: rgba(147, 51, 234, 0.4);
  box-shadow: 0 6px 20px rgba(147, 51, 234, 0.25);
  transform: scale(1.08);
}

#products-2 .carousel-arrow:active {
  transform: scale(0.95);
}

#products-2 .products-carousel-wrapper {
  position: relative;
  width: 100%;
}

#products-2 .products-carousel-track {
  display: flex !important;
  flex-direction: row !important;
  flex-wrap: nowrap !important;
  gap: 1.5rem !important;
  overflow-x: auto !important;
  overflow-y: visible !important;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  -ms-overflow-style: none;
  padding: 1.25rem 0.5rem 2.25rem 0.5rem !important;
  margin: 0 -0.5rem;
  cursor: grab;
  user-select: none;
}

#products-2 .products-carousel-track::-webkit-scrollbar {
  display: none;
}

#products-2 .products-carousel-track.is-dragging {
  cursor: grabbing;
  scroll-behavior: auto !important;
  scroll-snap-type: none !important;
}

#products-2 .products-carousel-track .product-card {
  flex: 0 0 295px !important;
  width: 295px !important;
  min-width: 295px !important;
  max-width: 295px !important;
  height: 350px !important;
  scroll-snap-align: start;
  opacity: 1 !important;
  transform: none !important;
  animation: none !important;
  transition: transform 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.35s ease !important;
}

#products-2 .products-carousel-track .product-card:hover {
  transform: translateY(-12px) scale(1.02) !important;
  box-shadow: 0 22px 45px rgba(145, 98, 168, 0.35) !important;
}

/* Progress indicator */
#products-2 .carousel-progress-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 0.5rem;
  padding: 0.5rem 0;
}

#products-2 .carousel-progress-track-bar {
  width: 160px;
  height: 4px;
  background: rgba(0, 0, 0, 0.08);
  border-radius: 999px;
  overflow: hidden;
  position: relative;
}

#products-2 .carousel-progress-thumb {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 35px;
  background: linear-gradient(90deg, #a855f7, #7c3aed);
  border-radius: 999px;
  transition: transform 0.15s ease-out;
}

@media (max-width: 768px) {
  #products-2 .products-section-header {
    flex-direction: column;
    align-items: flex-start;
  }
  #products-2 .carousel-controls {
    align-self: flex-end;
  }
  #products-2 .products-carousel-track .product-card {
    flex: 0 0 260px !important;
    width: 260px !important;
    min-width: 260px !important;
    max-width: 260px !important;
    height: 335px !important;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const track = document.getElementById('productsCarouselTrack');
  const prevBtn = document.getElementById('carouselPrevBtn');
  const nextBtn = document.getElementById('carouselNextBtn');
  const progressThumb = document.getElementById('carouselProgressThumb');

  if (!track) return;

  const AUTO_SCROLL_DELAY = 3200; // 3.2 seconds
  let autoScrollTimer = null;
  let isHovered = false;
  let isDragging = false;
  let isDown = false;
  let startX = 0;
  let scrollStart = 0;
  let dragDistance = 0;

  function getStepWidth() {
    const firstCard = track.querySelector('.product-card');
    if (!firstCard) return 320;
    const style = window.getComputedStyle(track);
    const gap = parseFloat(style.gap) || 24;
    return firstCard.offsetWidth + gap;
  }

  function updateProgressBar() {
    if (!progressThumb) return;
    const maxScroll = track.scrollWidth - track.clientWidth;
    if (maxScroll <= 0) {
      progressThumb.style.width = '100%';
      progressThumb.style.transform = 'translateX(0)';
      return;
    }
    const ratio = Math.min(Math.max(track.scrollLeft / maxScroll, 0), 1);
    const trackBarWidth = 160;
    const thumbWidth = 40;
    progressThumb.style.width = thumbWidth + 'px';
    const moveRange = trackBarWidth - thumbWidth;
    progressThumb.style.transform = 'translateX(' + (ratio * moveRange) + 'px)';
  }

  function scrollNext() {
    const step = getStepWidth();
    const maxScroll = track.scrollWidth - track.clientWidth;
    if (track.scrollLeft >= maxScroll - 15) {
      track.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
      track.scrollBy({ left: step, behavior: 'smooth' });
    }
  }

  function scrollPrev() {
    const step = getStepWidth();
    const maxScroll = track.scrollWidth - track.clientWidth;
    if (track.scrollLeft <= 15) {
      track.scrollTo({ left: maxScroll, behavior: 'smooth' });
    } else {
      track.scrollBy({ left: -step, behavior: 'smooth' });
    }
  }

  function startAutoScroll() {
    stopAutoScroll();
    if (!isHovered && !isDown) {
      autoScrollTimer = setInterval(function () {
        if (!isHovered && !isDown && !document.hidden) {
          scrollNext();
        }
      }, AUTO_SCROLL_DELAY);
    }
  }

  function stopAutoScroll() {
    if (autoScrollTimer) {
      clearInterval(autoScrollTimer);
      autoScrollTimer = null;
    }
  }

  function resetAutoScroll() {
    stopAutoScroll();
    startAutoScroll();
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', function () {
      scrollNext();
      resetAutoScroll();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', function () {
      scrollPrev();
      resetAutoScroll();
    });
  }

  // Hover pauses auto-scroll
  track.addEventListener('mouseenter', function () {
    isHovered = true;
    stopAutoScroll();
  });

  track.addEventListener('mouseleave', function () {
    isHovered = false;
    isDown = false;
    track.classList.remove('is-dragging');
    startAutoScroll();
  });

  // Touch pauses auto-scroll
  track.addEventListener('touchstart', function () {
    stopAutoScroll();
  }, { passive: true });

  track.addEventListener('touchend', function () {
    setTimeout(startAutoScroll, 2000);
  }, { passive: true });

  // Mouse drag to scroll
  track.addEventListener('mousedown', function (e) {
    if (e.button !== 0) return;
    isDown = true;
    dragDistance = 0;
    startX = e.pageX - track.offsetLeft;
    scrollStart = track.scrollLeft;
    stopAutoScroll();
  });

  window.addEventListener('mouseup', function () {
    if (isDown) {
      isDown = false;
      track.classList.remove('is-dragging');
      setTimeout(function () {
        isDragging = false;
      }, 50);
      startAutoScroll();
    }
  });

  track.addEventListener('mousemove', function (e) {
    if (!isDown) return;
    const x = e.pageX - track.offsetLeft;
    const walk = x - startX;
    dragDistance = Math.abs(walk);
    if (dragDistance > 6) {
      isDragging = true;
      track.classList.add('is-dragging');
      track.scrollLeft = scrollStart - walk;
    }
  });

  // Prevent card click if dragging occurred
  track.addEventListener('click', function (e) {
    if (isDragging) {
      e.preventDefault();
      e.stopPropagation();
    }
  }, true);

  // Scroll listener for progress bar
  track.addEventListener('scroll', updateProgressBar, { passive: true });

  // Pause on tab visibility change
  document.addEventListener('visibilitychange', function () {
    if (document.hidden) {
      stopAutoScroll();
    } else {
      startAutoScroll();
    }
  });

  // Initial call
  updateProgressBar();
  startAutoScroll();
});
</script>