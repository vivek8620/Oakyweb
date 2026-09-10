<?php include("components/header.php") ?>

<!-- Banner Section (Signature OakyWeb Brand Style with Right Showcase Image) -->
<section class="contain2 pt-4 pb-4 lg:pt-6 lg:pb-6 relative overflow-hidden" id="hero">
  <div class="contain">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-center">

      <!-- Left Side Content -->
      <div class="lg:col-span-6 flex flex-col items-center lg:items-start text-center lg:text-left z-10">
        <div class="flex flex-col gap-4 max-w-2xl">

          <!-- Main Heading -->
          <h1 class="Abhaya text-5xl sm:text-6xl md:text-7xl lg:text-[72px] xl:text-[84px] leading-[1.05] font-medium text-gray-900 tracking-tight">
            Case <span class="font-extrabold text-[#ffc835]">Studies</span>
          </h1>

          <!-- Description -->
          <p class="text-[16px] sm:text-[18px] lg:text-[19px] xl:text-[20px] text-[#313039] font-normal leading-relaxed">
            Discover how OakyWeb builds high-performance custom software, mission-critical mobile apps, and scalable cloud architectures that accelerate growth for startups and global enterprises.
          </p>

          <p class="text-[15px] sm:text-[16px] lg:text-[17px] text-[#64748b] leading-relaxed">
            From FinTech platforms to enterprise IoT systems and headless e-commerce architectures, explore our proven track record of engineering solutions that deliver measurable ROI.
          </p>

        </div>
      </div>

      <!-- Right Side Showcase Image (Larger Display) -->
      <div class="lg:col-span-6 flex justify-center lg:justify-end items-center">
        <img src="assets/multiImages/sortware-banner.png" alt="OakyWeb Case Studies" class="md:hidden w-full h-auto max-w-[550px]" />
        <img src="assets/multiImages/sortware-banner-lg.png" alt="OakyWeb Case Studies & Software Engineering" class="hidden md:block 2xl:aspect-[594/409] w-full h-auto max-w-[680px] xl:max-w-[760px]" />
      </div>

    </div>
  </div>
</section>


<!-- 2. CASE STUDIES SHOWCASE SECTION -->
<section class="w-full py-8 sm:py-10 bg-[#F8F9FA] border-t border-gray-100" id="case-studies-grid-section">
  <div class="contain">

    <!-- Section Heading Above Filter Tabs -->
    <div class="text-center max-w-3xl mx-auto mb-6 sm:mb-8">
      <h2 class="Abhaya text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight">
        Our <span class="text-[#ffc835]">Finest Work</span>
      </h2>
      <p class="text-base sm:text-lg text-gray-600 font-normal mt-2 leading-relaxed">
        Championing user experience design across industries, geographies, &amp; demographics
      </p>
    </div>

    <!-- Category Filter Tabs -->
    <div class="flex flex-wrap items-center justify-center gap-2 mb-6 sm:mb-8" id="filter-tabs">
      <button class="filter-tab active px-5 py-2 rounded-full text-xs sm:text-sm font-bold transition-all bg-[#0f172a] text-white cursor-pointer shadow-sm" data-filter="all">
        All Projects
      </button>
      <button class="filter-tab px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all bg-white text-gray-700 hover:bg-[#ffc835] hover:text-black border border-gray-200 cursor-pointer shadow-2xs" data-filter="mobile">
        Mobile Apps
      </button>
      <button class="filter-tab px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all bg-white text-gray-700 hover:bg-[#ffc835] hover:text-black border border-gray-200 cursor-pointer shadow-2xs" data-filter="web">
        Web &amp; SaaS
      </button>
      <button class="filter-tab px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition-all bg-white text-gray-700 hover:bg-[#ffc835] hover:text-black border border-gray-200 cursor-pointer shadow-2xs" data-filter="enterprise">
        Enterprise
      </button>
    </div>

    <!-- 4 Case Study Cards in One Row -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 xl:gap-6" id="case-study-list">

      <!-- Case 1: 1Click -->
      <div class="case-item group bg-white rounded-3xl border border-gray-200/90 hover:border-[#ffc835] overflow-hidden flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl" data-category="mobile">
        <div>
          <div class="h-44 xl:h-48 bg-gradient-to-tr from-amber-50 to-amber-100/60 flex items-center justify-center p-5 border-b border-gray-100 overflow-hidden">
            <img src="assets/homeImages/1click.png" alt="1Click App" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-sm" />
          </div>
          <div class="p-5 sm:p-6">
            <span class="inline-block text-[10.5px] font-bold text-amber-800 uppercase tracking-wider mb-2 bg-amber-50 px-2 py-0.5 rounded-md border border-amber-200/60">
              FinTech &amp; Insurance
            </span>
            <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-black leading-snug">
              1Click — Smart Insurance App
            </h3>
            <p class="text-gray-600 text-xs sm:text-[13px] mt-2.5 leading-relaxed">
              Consolidated fragmented insurance management into a unified mobile app with auto-renewal alerts and digital claim tracking.
            </p>
          </div>
        </div>
      </div>

      <!-- Case 2: CREDAI -->
      <div class="case-item group bg-white rounded-3xl border border-gray-200/90 hover:border-[#ffc835] overflow-hidden flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl" data-category="web">
        <div>
          <div class="h-44 xl:h-48 bg-gradient-to-tr from-amber-100 to-amber-200/50 flex items-center justify-center p-5 border-b border-gray-100 overflow-hidden">
            <img src="assets/homeImages/credai.png" alt="CREDAI Platform" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-sm" />
          </div>
          <div class="p-5 sm:p-6">
            <span class="inline-block text-[10.5px] font-bold text-amber-800 uppercase tracking-wider mb-2 bg-amber-50 px-2 py-0.5 rounded-md border border-amber-200/60">
              Event &amp; Conclave
            </span>
            <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-black leading-snug">
              CREDAI — Summit &amp; Delegate Portal
            </h3>
            <p class="text-gray-600 text-xs sm:text-[13px] mt-2.5 leading-relaxed">
              Architected a high-concurrency event portal managing 15,000+ delegate registrations, live QR check-ins, and sponsor analytics.
            </p>
          </div>
        </div>
      </div>

      <!-- Case 3: HR BABU -->
      <div class="case-item group bg-white rounded-3xl border border-gray-200/90 hover:border-[#ffc835] overflow-hidden flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl" data-category="enterprise">
        <div>
          <div class="h-44 xl:h-48 bg-gradient-to-tr from-emerald-50 to-teal-100/50 flex items-center justify-center p-5 border-b border-gray-100 overflow-hidden">
            <img src="assets/homeImages/hrbabu.png" alt="HR BABU HRMS" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-sm" />
          </div>
          <div class="p-5 sm:p-6">
            <span class="inline-block text-[10.5px] font-bold text-emerald-800 uppercase tracking-wider mb-2 bg-emerald-50 px-2 py-0.5 rounded-md border border-emerald-200/60">
              SaaS &amp; Workforce
            </span>
            <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-black leading-snug">
              HR BABU — Cloud HRMS &amp; Payroll
            </h3>
            <p class="text-gray-600 text-xs sm:text-[13px] mt-2.5 leading-relaxed">
              Intelligent workforce system with geofenced biometric attendance, automated payroll, and employee self-service.
            </p>
          </div>
        </div>
      </div>

      <!-- Case 4: Cytometry -->
      <div class="case-item group bg-white rounded-3xl border border-gray-200/90 hover:border-[#ffc835] overflow-hidden flex flex-col justify-between transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl" data-category="web">
        <div>
          <div class="h-44 xl:h-48 bg-slate-900 flex items-center justify-center p-5 border-b border-gray-100 overflow-hidden">
            <img src="assets/homeImages/Cytometry.png" alt="Cytometry Journal" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-500 drop-shadow-sm" />
          </div>
          <div class="p-5 sm:p-6">
            <span class="inline-block text-[10.5px] font-bold text-slate-800 uppercase tracking-wider mb-2 bg-slate-100 px-2 py-0.5 rounded-md border border-slate-200">
              Healthcare &amp; Research
            </span>
            <h3 class="text-base sm:text-lg font-bold text-gray-900 group-hover:text-black leading-snug">
              Cytometry — Medical Research Journal
            </h3>
            <p class="text-gray-600 text-xs sm:text-[13px] mt-2.5 leading-relaxed">
              Medical dissemination portal with automated peer review workflows, abstract publishing, and live keynote streaming.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- 3. LOGO & ACHIEVEMENTS SWIPER AREA -->
<section class="logo__area py-8 sm:py-10 bg-[#F8F9FA] relative overflow-hidden border-t border-b border-gray-100" id="achievements-section">

  <div class="container mx-auto px-4 relative z-10">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-lg-12">
        
        <!-- Section Title Wrapper -->
        <div class="sec-title-wrapper text-center mb-6 sm:mb-8">
          <h3 class="sec-title title-anim text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-2">
            Trusted By <span class="text-[#ffc835]">Clients Worldwide</span>
          </h3>
          <p class="text-gray-500 text-xs sm:text-sm max-w-2xl mx-auto">
            Delivering scalable engineering solutions for national institutions and global companies.
          </p>
        </div>

        <!-- Swiper Slider Box -->
        <div class="slider-box max-w-7xl mx-auto">
          <div class="swiper achievements__slider swiper-horizontal">
            <div class="swiper-wrapper">
              <?php 
              $allClientLogos = [
                ['name' => 'AIIMS', 'img' => 'assets/client_logo/AIIMS1.png'],
                ['name' => 'PwC', 'img' => 'assets/client_logo/PWC.png'],
                ['name' => 'Taj Hotels', 'img' => 'assets/client_logo/TAJ.png'],
                ['name' => 'ICAI', 'img' => 'assets/client_logo/ICAI.png'],
                ['name' => 'IGL', 'img' => 'assets/client_logo/IGL.png'],
                ['name' => 'DCM Shriram', 'img' => 'assets/client_logo/DCM.png'],
                ['name' => 'PPAP', 'img' => 'assets/client_logo/PPAP.png'],
                ['name' => 'SRM University', 'img' => 'assets/client_logo/SRM.png'],
                ['name' => 'ELCON', 'img' => 'assets/client_logo/ELCON.png'],
                ['name' => 'EveKare', 'img' => 'assets/client_logo/EVEKARE.png'],
                ['name' => 'ICAR', 'img' => 'assets/client_logo/ICAR.png'],
                ['name' => 'MGRM', 'img' => 'assets/client_logo/MGRM.png'],
                ['name' => 'Oncquest', 'img' => 'assets/client_logo/ONCQUEST.png'],
                ['name' => 'SIGMA', 'img' => 'assets/client_logo/SIGMA.png'],
                ['name' => 'TCG Global', 'img' => 'assets/client_logo/TCG.png'],
                ['name' => 'USIEF', 'img' => 'assets/client_logo/USIEF.png'],
                ['name' => 'Vigyan Prasar', 'img' => 'assets/client_logo/VP.png'],
                ['name' => 'AIIMS Rishikesh', 'img' => 'assets/client_logo/AIIMSR.png'],
                ['name' => 'WSAR', 'img' => 'assets/client_logo/WSAR.png'],
                ['name' => 'URC', 'img' => 'assets/client_logo/URC.png'],
              ];
              
              foreach ($allClientLogos as $item): ?>
                <div class="swiper-slide">
                  <div class="b-slider__ref flex flex-col items-center justify-center group cursor-pointer w-full">
                    <div class="bg-white rounded-2xl sm:rounded-3xl border border-gray-200/90 shadow-sm group-hover:shadow-xl group-hover:border-[#ffc835] group-hover:-translate-y-1 transition-all duration-300 h-28 sm:h-32 md:h-36 w-full flex items-center justify-center p-4">
                      <img loading="lazy" 
                           src="<?= $item['img'] ?>" 
                           alt="<?= $item['name'] ?>" 
                           class="max-h-20 sm:max-h-24 md:max-h-28 max-w-[170px] sm:max-w-[195px] w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
.logo__area {
  position: relative;
}
.achievements__slider .swiper-wrapper {
  -webkit-transition-timing-function: linear !important;
  -o-transition-timing-function: linear !important;
  transition-timing-function: linear !important;
}
.achievements__slider .swiper-slide {
  width: 220px !important;
  flex-shrink: 0;
  display: flex;
  justify-content: center;
}
.b-slider__ref {
  display: block;
  text-decoration: none;
  width: 100%;
}
.b-slider__img {
  display: block;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  if (typeof Swiper !== 'undefined') {
    new Swiper('.achievements__slider', {
      slidesPerView: 'auto',
      spaceBetween: 30,
      loop: true,
      speed: 4000,
      allowTouchMove: true,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      breakpoints: {
        320: {
          spaceBetween: 20
        },
        640: {
          spaceBetween: 25
        },
        1024: {
          spaceBetween: 35
        }
      }
    });
  }
});
</script>


<!-- 4. HIGH IMPACT CALL TO ACTION -->
<section class="w-full py-10 sm:py-14 bg-[#0f172a] text-white relative overflow-hidden">
  
  <!-- Subtle Amber Glow -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[300px] bg-[#ffc835]/10 rounded-full blur-[140px]"></div>
  </div>

  <div class="contain text-center max-w-3xl mx-auto relative z-10">
    <span class="inline-block text-[#ffc835] font-bold text-xs uppercase tracking-widest mb-2.5">
      Start Your Success Story
    </span>
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white tracking-tight leading-tight">
      Have an Ambitious Project in Mind?<br />
      <span class="text-[#ffc835]">Let's Build It Together.</span>
    </h2>
    <p class="text-gray-300 text-sm sm:text-base mt-4 leading-relaxed max-w-2xl mx-auto">
      Schedule a strategic discovery call with our tech leaders to evaluate technical architecture, project scope, and engineering timelines.
    </p>
    <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
      <a href="start-project.php" class="bg-[#ffc835] hover:bg-[#ffb703] text-black font-extrabold px-8 py-3.5 rounded-xl text-xs uppercase tracking-wider transition-all shadow-lg hover:shadow-xl">
        Start Your Project
      </a>
      <a href="contact-us.html" class="bg-white/10 hover:bg-white/20 text-white font-semibold px-8 py-3.5 rounded-xl text-xs uppercase tracking-wider transition-all border border-white/15">
        Contact Us
      </a>
    </div>
  </div>
</section>


<!-- Category Filter Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll("#filter-tabs .filter-tab");
  const items = document.querySelectorAll("#case-study-list .case-item");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Toggle Tab Active Classes
      tabs.forEach(t => {
        t.classList.remove("active", "bg-[#0f172a]", "text-white", "shadow-sm");
        t.classList.add("bg-white", "text-gray-700", "border-gray-200");
      });

      tab.classList.add("active", "bg-[#0f172a]", "text-white", "shadow-sm");
      tab.classList.remove("bg-white", "text-gray-700", "border-gray-200");

      const filter = tab.getAttribute("data-filter");

      items.forEach(item => {
        const category = item.getAttribute("data-category");
        if (filter === "all" || category === filter) {
          item.style.display = "flex";
        } else {
          item.style.display = "none";
        }
      });
    });
  });
});
</script>

<?php include("components/footer.php") ?>

<h1 class="hidden"> Case Studies & Our Finest Work | OakyWeb</h1>
