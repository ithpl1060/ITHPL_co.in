<section id="hero-about" class="main-section fade-in-section">
  <div class="hero-background-a"></div>
  <div class="container hero-content-a ">

    <h1 class=" hero-title-a    ">Explore the latest <br> <span class="gradient-services">IT insights, tips, and
        updates.</span></h1>

    <p class=" hero-description-b">
      Our blogs are written from very research and well known writers writers so that we can provide you the best blogs
      and articles articles for you to read them all along
    </p>
    <div class="hero-image-container-a">
      <img src="<?= base_url(relativePath: 'images/Blog.png'); ?>" alt="Business technology illustration"
        class="hero-image-a" />
    </div>
  </div>
</section>

<section class="main-section py-8 px-8">
  <div class="float-left ">
    <h1 class="font-bold text-3xl">Our Recent Post</h1>
  </div>
  <div class="float-right"> <button
      onclick="viewAll();"
      class="contact-button text-white font-semibold text-sm px-7 py-3.5 rounded-xl transition-all duration-300 relative overflow-hidden gradient-shine border border-white border-opacity-20 hover:shadow-xl active:scale-95"
      style="
              background: linear-gradient(135deg, #d09bed 0%, #b678e3 100%);
              box-shadow: 0 4px 14px rgba(208, 155, 237, 0.25);
              transform: translateY(0);
            "
      onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(208, 155, 237, 0.4)'"
      onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 14px rgba(208, 155, 237, 0.25)'"
      onmousedown="this.style.transform='translateY(-1px)'" onmouseup="this.style.transform='translateY(-3px)'">
      View All

    </button>
  </div>

</section>
<section class="relative flex justify-center items-center min-h-[500px] pl-[60px] pr-5">

  <!-- Background Image -->
  <div
    class="absolute bottom-[20%] right-[15%] w-[1000px] h-[400px] -z-10 py-4 max-md:w-full max-md:right-0 max-md:bottom-0">
    <img src="" alt="" class="w-full h-full object-cover rounded-[20px]" id="recentBlogimg">
  </div>

  <div class="post-overlay"></div>

  <!-- Content Card -->
  <div
    class="bg-white/21 rounded-[19px] backdrop-blur-[10px] p-[50px] max-w-[1032px] w-full text-left shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] max-md:p-[30px] max-md:text-center">

    <!-- Post Meta -->
    <div class="flex items-center gap-4 font-bold text-xs uppercase tracking-[0.1em] mb-4 max-[480px]:text-[0.7rem]">
      <span class="text-white" id="rcategory"></span>
      <span class="text-white" id="rpdate">Nov 16, 2025</span>
    </div>

    <!-- Post Title -->
    <h3 id="rblogtitle"
      class="font-raleway font-bold text-2xl leading-[1.3] mb-4 max-w-[900px] text-white max-lg:text-[1.75rem] max-md:text-2xl max-[480px]:text-xl">
      
    </h3>

    <!-- Post Excerpt -->
    <p id="rhighlight_text" class="text-base mb-8 max-w-[800px] opacity-95 text-white">

    </p>

    <!-- Read More Button -->
    <div class="hero-buttons">
      <a id="rhero-buttons" href="" class="hero-button">Read More</a>
    </div>
  </div>
</section>

<!-- Featured Posts and Categories Section -->
<section class=" ">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-16">
      <!-- Main Content: Featured Posts -->
      <div class="lg:col-span-2">
        <div class="flex justify-between items-center mb-8">
          <h2 class="font-inter font-bold text-3xl sm:text-4xl text-gray-800">Our Featured Post</h2>
          <button
            onclick="viewAll();"
            class="contact-button text-white font-semibold text-sm px-7 py-3.5 rounded-xl transition-all duration-300 relative overflow-hidden gradient-shine border border-white border-opacity-20 hover:shadow-xl active:scale-95"
            style="
              background: linear-gradient(135deg, #d09bed 0%, #b678e3 100%);
              box-shadow: 0 4px 14px rgba(208, 155, 237, 0.25);
              transform: translateY(0);
            "
            onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 25px rgba(208, 155, 237, 0.4)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 14px rgba(208, 155, 237, 0.25)'"
            onmousedown="this.style.transform='translateY(-1px)'"
            onmouseup="this.style.transform='translateY(-3px)'">View ALL</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8" id="all-post-list">

        </div>
        <!-- Pagination -->
        <nav id="paginations" class="flex justify-center py-20">
           <!-- <ul class="inline-flex -space-x-px text-base h-15">
            <li>
              <a href="#"
                class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-800 bg-[#E1ACF9] border border-e-0 border-gray-300 rounded-s-lg hover:bg-purple-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
              <a href="#"
                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-800 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
              <a href="#"
                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-800 bg-purple border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
              <a href="#" aria-current="page"
                class="flex items-center justify-center px-4 h-10 text-purple-600 border border-gray-300 bg-purple-50 hover:bg-purple-100 hover:text-purple-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
              <a href="#"
                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-800 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
              <a href="#"
                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-800 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
              <a href="#"
                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-800 bg-[#E1ACF9] border border-gray-300 rounded-e-lg hover:bg-purple-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
          </ul> -->
        </nav>
      </div>
      <!-- Sidebar -->
      <aside class="space-y-12 mt-16 lg:mt-0">
        <div>
          <h3 class="font-inter font-bold text-3xl sm:text-4xl text-gray-800">Categories</h3>
          <div class="mt-6 space-y-4" id="categories">
            <!-- Category List -->
          </div>
        </div>
        <div>
          <div class="flex justify-between items-center">
            <h3 class="font-inter font-bold text-xl text-gray-800">Popular Post</h3>
            <!-- <a href="#" class="bg-custom-purple-light text-white px-6 py-2 rounded-md text-[10px] font-bold">View All</a> -->
          </div>
          <div class="mt-6 space-y-8" id="popular-posts">
            <!-- Popular Post Item 1 -->
            <!-- <div class="flex flex-col group">
              <img class="rounded-xl h-48 w-full object-cover transition-transform duration-700 group-hover:scale-105 "
                src="images/sea-travel.png" alt="Sea travel">
              <div class="mt-2">
                <div class="flex space-x-2 text-[9px] ">
                  <p class="font-bold text-gray-800">Travel</p>
                  <p class="text-gray-400 font-medium">13 Nov 2025</p>
                </div>
                <h4 class="font-raleway font-bold text-lg mt-1 text-gray-800 group-hover:text-custom-purple-light">8
                  Rules of Travelling In Sea You Need To Know</h4>
                <a href="#" class=" font-bold text-sm mt-2 text-[#C48BE8]">Read More...</a>
              </div>
            </div> -->
            <!-- Popular Post Item 2 -->
            <!-- <div class="flex flex-col group">
              <img class="rounded-xl h-48 w-full object-cover transition-transform duration-700 group-hover:scale-105 "
                src="images/ui-uxdesign.png" alt="UI/UX design">
              <div class="mt-2">
                <div class="flex space-x-2 text-[9px] ">
                  <p class="font-bold text-gray-800">DEVELOPMENT</p>
                  <p class="text-gray-400 font-medium">11 Oct 2025</p>
                </div>
                <h4 class="font-raleway font-bold text-lg mt-1 text-gray-800 group-hover:text-custom-purple-light">How
                  to build strong portfolio and get a Job in UI/UX</h4>
                <a href="#" class=" font-bold text-sm mt-2 text-[#C48BE8]">Read More...</a>
              </div>
            </div> -->
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<section id="subscribe" class="fade-in-section">
  <div class="container">
    <div class="subscribe-box">
      <h2 class="subscribe-title">
        Get our Blogs delivered From us to your inbox weekly.
      </h2>
      <form class="subscribe-form">
        <input type="email" placeholder="Enter your email" class="subscribe-input" />
        <button type="submit" class="subscribe-button">Submit</button>
      </form>
    </div>
  </div>
</section>


<script src="<?= base_url('js/global.js'); ?>" defer></script>